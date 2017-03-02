<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\D20Campaign;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class D20CampaignType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('masterId', EntityType::class, array(
                'class' => 'AppBundle:D20Player',
            ))
            ->add('D20Characters', EntityType::class, array(
                'class' => 'AppBundle:D20Character',
                'multiple' => true ,
            ))

            ->add('save', SubmitType::class)
        ;


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => D20Campaign::class,
        ));
    }
}