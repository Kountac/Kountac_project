<?php

namespace Blog\BlogOrnoirBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Blog\BlogOrnoirBundle\Form\MediaType;
use Blog\BlogOrnoirBundle\Entity\Media;

class ServicesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', 'text', array('attr' => array('placeholder' => 'Entrer le titre de votre service',
                                                            'class' => 'textField'),'label' => 'Titre* : '))
                
            ->add('description','textarea', array('attr' => array('class' => 'ckeditor'),'label' => 'Contenu* : '))
            ->add('image', new MediaType, array('label' => 'AJOUT D\'IMAGE(S) : ',
                            'data_class' => Media::class))            
            //->add('editeur')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Blog\BlogOrnoirBundle\Entity\Services'
        ));
    }

    public function getName()
    {
        return 'blog_blogornoirbundle_servicestype';
    }
}
