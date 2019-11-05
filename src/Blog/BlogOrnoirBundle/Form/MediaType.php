<?php

namespace Blog\BlogOrnoirBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MediaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('file','file', array('required' => false, 'label' => 'Ajouter une image* : '))
            ->add('file2','file', array('required' => false, 'label' => 'Ajouter une seconde image : '))
            ->getForm();
            ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Blog\BlogOrnoirBundle\Entity\Media'
        ));
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'blog_blogornoirbundle_media';
    }
}
