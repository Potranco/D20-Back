<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\D20Race;
use Symfony\Component\OptionsResolver\OptionsResolver;


class D20RaceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('size')
            ->add('abilitySTR')
            ->add('abilityDEX')
            ->add('abilityCON')
            ->add('abilityINT')
            ->add('abilityWIS')
            ->add('abilityCHA')
            ->add('savingFortitude')
            ->add('savingReflex')
            ->add('savingWill')
            ->add('baseAttack')
            ->add('spellResistance')
            ->add('hitPoints')
            ->add('armorClass')
            ->add('initiative')
            ->add('speed')
            ->add('damageReduction')
            ->add('save', SubmitType::class)
        ;


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => D20Race::class,
        ));
    }
}