<?php

/*
 * This file is part of the `liip/LiipImagineBundle` project.
 *
 * (c) https://github.com/liip/LiipImagineBundle/graphs/contributors
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Liip\ImagineBundle\Imagine\Filter\Loader;

use Imagine\Image\ImageInterface;
use Imagine\Image\ImagineInterface;
use Liip\ImagineBundle\Exception\Imagine\Filter\LoadFilterException;
use Liip\ImagineBundle\Utility\OptionsResolver\OptionsResolver;
use Liip\ImagineBundle\Exception\InvalidArgumentException;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\Exception\ExceptionInterface;

class ResampleFilterLoader implements LoaderInterface
{
    /**
     * @var ImagineInterface
     */
    private $imagine;

    /**
     * @param ImagineInterface $imagine
     */
    public function __construct(ImagineInterface $imagine)
    {
        $this->imagine = $imagine;
    }

    /**
     * @param ImageInterface $image
     * @param array          $options
     *
     * @throws LoadFilterException
     *
     * @return ImageInterface
     */
    public function load(ImageInterface $image, array $options = array())
    {
        $options = $this->resolveOptions($options);
        $tmpFile = $this->getTemporaryFile($options['temp_dir']);

        try {
            $image->save($tmpFile, $this->getImagineSaveOptions($options));
            $image = $this->imagine->open($tmpFile);
            $this->delTemporaryFile($tmpFile);
        } catch (\Exception $exception) {
            $this->delTemporaryFile($tmpFile);
            throw new LoadFilterException('Unable to save/open file in resample filter loader.', null, $exception);
        }

        return $image;
    }

    /**
     * @param string $path
     *
     * @throws \RuntimeException
     *
     * @return string
     */
    private function getTemporaryFile($path)
    {
        if (!is_dir($path) || false === $file = tempnam($path, 'liip-imagine-bundle')) {
            throw new \RuntimeException(sprintf('Unable to create temporary file in "%s" base path.', $path));
        }

        return $file;
    }

    /**
     * @param $file
     *
     * @throws \RuntimeException
     */
    private function delTemporaryFile($file)
    {
        if (file_exists($file)) {
            unlink($file);
        }
    }

    /**
     * @param array $options
     *
     * @return array
     */
    private function getImagineSaveOptions(array $options)
    {
        $saveOptions = array(
            'resolution-units' => $options['unit'],
            'resolution-x' => $options['x'],
            'resolution-y' => $options['y'],
        );

        if (isset($options['filter'])) {
            $saveOptions['resampling-filter'] = $options['filter'];
        }

        return $saveOptions;
    }

    /**
     * @param array $options
     *
     * @return array
     */
    private function resolveOptions(array $options)
    {
        $resolver = new OptionsResolver();

        $resolver->setRequired(array('x', 'y', 'unit', 'temp_dir'));
        $resolver->setDefined(array('filter'));
        $resolver->setDefault('temp_dir', sys_get_temp_dir());
        $resolver->setDefault('filter', 'UNDEFINED');

        $resolver->setAllowedTypes('x', array('int', 'float'));
        $resolver->setAllowedTypes('y', array('int', 'float'));
        $resolver->setAllowedTypes('temp_dir', array('string'));
        $resolver->setAllowedTypes('filter', array('string'));

        $resolver->setAllowedValues('unit', array(
            ImageInterface::RESOLUTION_PIXELSPERINCH,
            ImageInterface::RESOLUTION_PIXELSPERCENTIMETER,
        ));

        $resolver->setNormalizer('filter', function (Options $options, $value) {
            foreach (array('\Imagine\Image\ImageInterface::FILTER_%s', '\Imagine\Image\ImageInterface::%s', '%s') as $format) {
                if (defined($constant = sprintf($format, strtoupper($value))) || defined($constant = sprintf($format, $value))) {
                    return constant($constant);
                }
            }

            throw new InvalidArgumentException(
                'Invalid value for "filter" option: must be a valid constant resolvable using one of formats '.
                '"\Imagine\Image\ImageInterface::FILTER_%s", "\Imagine\Image\ImageInterface::%s", or "%s".'
            );
        });

        try {
            return $resolver->resolve($options);
        } catch (ExceptionInterface $exception) {
            throw new InvalidArgumentException(sprintf('Invalid option(s) passed to %s::load().', __CLASS__), null, $exception);
        }
    }
}
