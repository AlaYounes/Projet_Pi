<?php

namespace JobpostsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnnoncesPostsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre', TextType::class, array(
            'attr' => array(
                'placeholder' => 'Titre',
                'class' => 'form-control border-color-1'
            )))
            ->add('salaire', IntegerType::class, array(
                'attr' => array(
                    'placeholder' => 'salaire en DT',
                    'class' => 'form-control border-color-5'
                )))
            ->add('description', TextareaType::class, array(
                'attr' => array(
                    'placeholder' => 'Description',
                    'class' => 'form-control border-color-4'
                )))->add('speciality', TextareaType::class, array(
                'attr' => array(
                    'placeholder' => 'speciality',
                    'class' => 'form-control border-color-4'
                )))
            ->add('save', SubmitType::class, array(
                'attr' => array(
                    'class' => 'btn btn-primary'
                )));}/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'JobpostsBundle\Entity\AnnoncesPosts'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'jobpostsbundle_annoncesposts';
    }


}
