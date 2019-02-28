<?php

namespace PiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class JobType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre')
                ->add('categorie', ChoiceType::class, [
                    'choices' => [
                        'Admin Support' => '1',
                        'Web, Software And IT' => '2',
                        'Design, Art And Multimedia' => '3',
                        'Management And Finance' => '4',
                        'Writing And Translation' => '5',
                        'Engineering And Architecture' => '6',
                        'Legal' => '7',
                        'Others' => '8',
                    ],
                ])
                ->add('souscategorie', ChoiceType::class, [
                    'choices' => [
                        'HTML5' => '1',
                        'CSS3' => '2',
                        'Bootstrap' => '3',
                        'PHP' => '4',

                    ],
                ])
                ->add('pays', ChoiceType::class, [
                    'choices' => [
                        'Tunisie' => '1',
                        'France' => '2',
                        'Algerie' => '3',
                        'Maroc' => '4',

                    ],
                ])
                ->add('budget')
                ->add('heuresPs', ChoiceType::class, [
                    'choices' => [
                        '40+' => '1',
                        '30-39' => '2',
                        '20-29' => '3',
                        '10-19' => '4',
                        '1-9' => '5',

                    ],
                ])



        ->add('description');

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PiBundle\Entity\Job'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'pibundle_job';
    }


}
