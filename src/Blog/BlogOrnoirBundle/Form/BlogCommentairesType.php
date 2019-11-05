<?php

namespace Blog\BlogOrnoirBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Blog\BlogOrnoirBundle\Entity\BlogCommentaires;

class BlogCommentairesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pseudo', 'text', array('attr' => array('placeholder' => 'Pseudo*',
                                                            'class' => 'textField'),'label' => false))
            ->add('email', 'email', array('attr' => array('placeholder' => 'Email*',
                                                            'class' => 'textField'),'label' => false))
            ->add('commentaire', 'textarea', array('attr' => array('placeholder' => 'Commentaire*',
                                                                'class' => 'ckeditor'),'label' => 'Contenu'))
            //->add('date')
            //->add('blog')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Blog\BlogOrnoirBundle\Entity\BlogCommentaires'
        ));
    }

    public function getName()
    {
        return 'blog_blogornoirbundle_blogcommentairestype';
    }
}
