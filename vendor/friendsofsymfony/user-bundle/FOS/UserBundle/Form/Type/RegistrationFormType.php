<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Blog\BlogOrnoirBundle\Form\MediaType;
//use Utilisateurs\UtilisateursBundle\Form\AdresseType;

class RegistrationFormType extends AbstractType
{
    private $class;

    /**
     * @param string $class The User class name
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', null, array('attr' => array('placeholder' => 'Nom d\'utilisateur* ',
                                                            'class' => 'textField'),'label' => false, 'translation_domain' => 'FOSUserBundle'))
            ->add('email', 'email', array('attr' => array('placeholder' => 'Adresse email* ',
                                                            'class' => 'textField'),'label' => false, 'translation_domain' => 'FOSUserBundle'))
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('attr' => array('placeholder' => 'Entrer votre mot de passe* ',
                                                            'class' => 'textField'),'label' => false),
                'second_options' => array('attr' => array('placeholder' => 'Confirmer mot de passe* ',
                                                            'class' => 'textField'),'label' => false),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
           //->add('adresse', new AdresseType());
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->class,
            'intention'  => 'registration',
        ));
    }

    public function getName()
    {
        return 'fos_user_registration';
    }
}
