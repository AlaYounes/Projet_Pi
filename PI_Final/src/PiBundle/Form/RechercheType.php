<?php

namespace PiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class RechercheType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
            ->add('submit',SubmitType::class)
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
        ;
    }/**
 * {@inheritdoc}
 */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PiBundle\Entity\Offre'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'recherche';
    }


}
