<?php

namespace Blog\BlogOrnoirBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('objet','text', array('attr' => array('placeholder' => 'Objet* ',
                                                            'class' => 'textField'),'label' => false))
            ->add('nom','text', array('attr' => array('placeholder' => 'Nom* ',
                                                            'class' => 'textField'),'label' => false))
            ->add('email','email', array('attr' => array('placeholder' => 'Email* ',
                                                            'class' => 'textField'),'label' => false))
            ->add('comment','textarea', array('attr' => array('placeholder' => 'Nous écrire ici* ',
                                                            'class' => 'textArea'),'label' => false))
            
                ;
            }
    
    public function getName() 
    {
        return 'blog_ornoir_contact';
    }
    
}