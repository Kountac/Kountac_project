<?php

namespace Utilisateurs\UtilisateursBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nom')
                ->add('prenom')
                ->add('bibliographie')
                ->add('cp')
                ->add('rue')
                ->add('ville')
                ->add('pays','country')
                ->add('mobile')
                ->add('telephone');
    }
    
    public function getParent() {
        return 'fos_user_profile';
    }
    
    public function getName() 
    {
        return 'blog_ornoir_user_profile';
    }
}