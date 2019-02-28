<?php

namespace BlogBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Commentaire_BlogType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
            $builder->add('contenuCommentaire',TextareaType::class ,array('attr' => array(
        'class' => 'form-control' ,
        'style' => 'margin-bottom: 20px;',
        'placeholder' => 'Write a comment...'
    )))
                ->add('submit',SubmitType::class)
            ;

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BlogBundle\Entity\Commentaire_Blog'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'blogbundle_commentaire_blog';
    }


}
