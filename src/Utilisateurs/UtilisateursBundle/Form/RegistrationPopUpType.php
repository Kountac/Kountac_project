<?php

namespace Utilisateurs\UtilisateursBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationPopUpType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('newsletter', 'checkbox', array('label' => 'Abonnez vous à la News-Letter pour ne rien rater !','required' => false,));
    }
    
    public function getParent() {
        return 'fos_user_registration';
    }
}