<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\D20Character;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Form\Type\AbilityType;

class D20CharacterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('name')
            ->add('playerId', EntityType::class, array(
                    'class' => 'AppBundle:D20Player',
                    ))
            ->add('raceId', EntityType::class, array(
                    'class' => 'AppBundle:D20Race',
                    ))
            ->add('classId', EntityType::class, array(
                'class' => 'AppBundle:D20Class',
            ))
            ->add('deityName')
            ->add('age')
            ->add('size')
            ->add('abilitySTR', AbilityType::class)
            ->add('abilityDEX', AbilityType::class)
            ->add('abilityCON', AbilityType::class)
            ->add('abilityINT', AbilityType::class)
            ->add('abilityWIS', AbilityType::class)
            ->add('abilityCHA', AbilityType::class)
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
            'data_class' => D20Character::class,
        ));
    }
}