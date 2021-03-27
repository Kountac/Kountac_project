<?php

namespace Kountac\KountacBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class NewsletterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email','email', array('attr' => array('class' => 'form-control',
                                                        'placeholder' => 'Entrez votre email',),
                                            'label' => false))
        ;
    }
    
    public function getName() 
    {
        return 'kountac_kountacbundle_newsletter';
    }
    
}