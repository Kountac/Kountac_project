<?php

namespace Blog\BlogOrnoirBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RechercheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('recherche','text', array('attr' => array('placeholder' => 'Rechercher',
                                                            'class' => 'textField'),'label' => false))
            ;
            }
    
    public function getName() 
    {
        return 'blog_ornoir_recherche';
    }
    
}