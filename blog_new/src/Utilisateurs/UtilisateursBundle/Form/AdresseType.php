<?php

namespace Utilisateurs\UtilisateursBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Blog\BlogOrnoirBundle\Form\MediaType;
use Blog\BlogOrnoirBundle\Entity\Media;

class AdresseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text', array('attr' => array('placeholder' => 'Noms* ',
                                                            'class' => 'textField'),'label' => false))
            ->add('prenom','text', array('attr' => array('placeholder' => 'Prénom(s)* ',
                                                            'class' => 'textField'),'label' => false))
            ->add('bibliographie','textarea', array('attr' => array('class' => 'ckeditor'),'label' => 'A propos de moi (bibliographie)* : '))

            ->add('pays','text', array('attr' => array('placeholder' => 'Pays de résidence* ',
                                                            'class' => 'textField'),'label' => false))
            ->add('telephone','text', array('attr' => array('placeholder' => 'Téléphone* ',
                                                            'class' => 'textField'),'label' => false))
        
            ->add('image', new MediaType, array('label' => 'AJOUT D\'IMAGE(S) : ',
                'data_class' => Media::class))
            
                ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Utilisateurs\UtilisateursBundle\Entity\Adresse'
        ));
    }

    public function getName()
    {
        return 'utilisateurs_utilisateursbundle_adressetype';
    }
}
