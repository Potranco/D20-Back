<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
Use AppBundle\Entity\D20Character;

class AbilityType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => array(
                '01 ('.D20Character::ABILITY_1.')'   =>'01',
                '02 ('.D20Character::ABILITY_2.')'   =>'02',
                '03 ('.D20Character::ABILITY_3.')'   =>'03',
                '04 ('.D20Character::ABILITY_4.')'   =>'04',
                '05 ('.D20Character::ABILITY_5.')'   =>'05',
                '06 ('.D20Character::ABILITY_6.')'   =>'06',
                '07 ('.D20Character::ABILITY_7.')'   =>'07',
                '08 ('.D20Character::ABILITY_8.')'   =>'08',
                '09 ('.D20Character::ABILITY_9.')'   =>'09',
                '10 ( '.D20Character::ABILITY_10.')' =>'10',
                '11 ( '.D20Character::ABILITY_11.')' =>'11',
                '12 (+'.D20Character::ABILITY_12.')' =>'12',
                '13 (+'.D20Character::ABILITY_13.')' =>'13',
                '14 (+'.D20Character::ABILITY_14.')' =>'14',
                '15 (+'.D20Character::ABILITY_15.')' =>'15',
                '16 (+'.D20Character::ABILITY_16.')' =>'16',
                '17 (+'.D20Character::ABILITY_17.')' =>'17',
                '18 (+'.D20Character::ABILITY_18.')' =>'18',
                '19 (+'.D20Character::ABILITY_19.')' =>'19',
                '20 (+'.D20Character::ABILITY_20.')' =>'20',
            )
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}