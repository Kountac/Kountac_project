<?php

namespace Utilisateurs\UtilisateursBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Kountac\KountacBundle\Form\MediaType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nom','text', array('attr' => array('class' => 'input form-control'),'label' => 'Nom(s)*','required' => true))
                ->add('prenom','text', array('attr' => array('class' => 'input form-control'),'label' => 'Prénom(s)','required' => false))
                
                ->add('sexe','choice', array('choices' => array('0' => 'M.',
                                                                '1' => 'Mme.'),'expanded'=>true, 'required' => true))
                
                ->add('adresse','text', array('attr' => array('class' => 'input form-control'),'label' => 'Numéro et nom de rue', 'required' => false))
                ->add('pays','country', array('attr' => array('class' => 'select form-control'),'label' => 'Pays/Région','required' => true))
                ->add('ville','text', array('attr' => array('class' => 'input form-control'),'label' => 'Ville*','required' => true))
                ->add('rue','text', array('attr' => array('class' => 'input form-control'),'label' => 'Complément d\'adresse','required' => false))
                ->add('digicode','number', array('attr' => array('class' => 'input form-control'),'label' => 'Digicode','required' => false))
                ->add('cp','number', array('attr' => array('class' => 'input form-control'),'label' => 'Code postal','required' => false))
                ->add('codeparrain','text', array('attr' => array('class' => 'input form-control'),'label' => 'Code de parrain','required' => false))
                ->add('telephone','number', array('attr' => array('class' => 'input form-control'),'label' => 'Téléphone mobile','required' => false))
                ->add('telephonefix','number', array('attr' => array('class' => 'input form-control'),'label' => 'Téléphone 2','required' => false))
                ->add('image', new MediaType())
                ;
    }
    
    public function getParent() {
        return 'fos_user_registration';
    }
    
    public function getName() 
    {
        return 'ornoir_user_registration';
    }
}