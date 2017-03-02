<?php

namespace AppBundle\Entity;

class D20Race
{
    public function __toString()
    {
        return $this->getName();
    }

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $size;

    /**
     * @var integer
     */
    private $abilitySTR;

    /**
     * @var integer
     */
    private $abilityDEX;

    /**
     * @var integer
     */
    private $abilityCON;

    /**
     * @var integer
     */
    private $abilityINT;

    /**
     * @var integer
     */
    private $abilityWIS;

    /**
     * @var integer
     */
    private $abilityCHA;

    /**
     * @var integer
     */
    private $savingFortitude;

    /**
     * @var integer
     */
    private $savingReflex;

    /**
     * @var integer
     */
    private $savingWill;

    /**
     * @var integer
     */
    private $baseAttack;

    /**
     * @var integer
     */
    private $spellResistance;

    /**
     * @var integer
     */
    private $hitPoints;

    /**
     * @var integer
     */
    private $armorClass;

    /**
     * @var integer
     */
    private $initiative;

    /**
     * @var integer
     */
    private $speed;

    /**
     * @var integer
     */
    private $damageReduction;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return D20Race
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set size
     *
     * @param integer $size
     *
     * @return D20Race
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set abilitySTR
     *
     * @param integer $abilitySTR
     *
     * @return D20Race
     */
    public function setAbilitySTR($abilitySTR)
    {
        $this->abilitySTR = $abilitySTR;

        return $this;
    }

    /**
     * Get abilitySTR
     *
     * @return integer
     */
    public function getAbilitySTR()
    {
        return $this->abilitySTR;
    }

    /**
     * Set abilityDEX
     *
     * @param integer $abilityDEX
     *
     * @return D20Race
     */
    public function setAbilityDEX($abilityDEX)
    {
        $this->abilityDEX = $abilityDEX;

        return $this;
    }

    /**
     * Get abilityDEX
     *
     * @return integer
     */
    public function getAbilityDEX()
    {
        return $this->abilityDEX;
    }

    /**
     * Set abilityCON
     *
     * @param integer $abilityCON
     *
     * @return D20Race
     */
    public function setAbilityCON($abilityCON)
    {
        $this->abilityCON = $abilityCON;

        return $this;
    }

    /**
     * Get abilityCON
     *
     * @return integer
     */
    public function getAbilityCON()
    {
        return $this->abilityCON;
    }

    /**
     * Set abilityINT
     *
     * @param integer $abilityINT
     *
     * @return D20Race
     */
    public function setAbilityINT($abilityINT)
    {
        $this->abilityINT = $abilityINT;

        return $this;
    }

    /**
     * Get abilityINT
     *
     * @return integer
     */
    public function getAbilityINT()
    {
        return $this->abilityINT;
    }

    /**
     * Set abilityWIS
     *
     * @param integer $abilityWIS
     *
     * @return D20Race
     */
    public function setAbilityWIS($abilityWIS)
    {
        $this->abilityWIS = $abilityWIS;

        return $this;
    }

    /**
     * Get abilityWIS
     *
     * @return integer
     */
    public function getAbilityWIS()
    {
        return $this->abilityWIS;
    }

    /**
     * Set abilityCHA
     *
     * @param integer $abilityCHA
     *
     * @return D20Race
     */
    public function setAbilityCHA($abilityCHA)
    {
        $this->abilityCHA = $abilityCHA;

        return $this;
    }

    /**
     * Get abilityCHA
     *
     * @return integer
     */
    public function getAbilityCHA()
    {
        return $this->abilityCHA;
    }

    /**
     * Set savingFortitude
     *
     * @param integer $savingFortitude
     *
     * @return D20Race
     */
    public function setSavingFortitude($savingFortitude)
    {
        $this->savingFortitude = $savingFortitude;

        return $this;
    }

    /**
     * Get savingFortitude
     *
     * @return integer
     */
    public function getSavingFortitude()
    {
        return $this->savingFortitude;
    }

    /**
     * Set savingReflex
     *
     * @param integer $savingReflex
     *
     * @return D20Race
     */
    public function setSavingReflex($savingReflex)
    {
        $this->savingReflex = $savingReflex;

        return $this;
    }

    /**
     * Get savingReflex
     *
     * @return integer
     */
    public function getSavingReflex()
    {
        return $this->savingReflex;
    }

    /**
     * Set savingWill
     *
     * @param integer $savingWill
     *
     * @return D20Race
     */
    public function setSavingWill($savingWill)
    {
        $this->savingWill = $savingWill;

        return $this;
    }

    /**
     * Get savingWill
     *
     * @return integer
     */
    public function getSavingWill()
    {
        return $this->savingWill;
    }

    /**
     * Set baseAttack
     *
     * @param integer $baseAttack
     *
     * @return D20Race
     */
    public function setBaseAttack($baseAttack)
    {
        $this->baseAttack = $baseAttack;

        return $this;
    }

    /**
     * Get baseAttack
     *
     * @return integer
     */
    public function getBaseAttack()
    {
        return $this->baseAttack;
    }

    /**
     * Set spellResistance
     *
     * @param integer $spellResistance
     *
     * @return D20Race
     */
    public function setSpellResistance($spellResistance)
    {
        $this->spellResistance = $spellResistance;

        return $this;
    }

    /**
     * Get spellResistance
     *
     * @return integer
     */
    public function getSpellResistance()
    {
        return $this->spellResistance;
    }

    /**
     * Set hitPoints
     *
     * @param integer $hitPoints
     *
     * @return D20Race
     */
    public function setHitPoints($hitPoints)
    {
        $this->hitPoints = $hitPoints;

        return $this;
    }

    /**
     * Get hitPoints
     *
     * @return integer
     */
    public function getHitPoints()
    {
        return $this->hitPoints;
    }

    /**
     * Set armorClass
     *
     * @param integer $armorClass
     *
     * @return D20Race
     */
    public function setArmorClass($armorClass)
    {
        $this->armorClass = $armorClass;

        return $this;
    }

    /**
     * Get armorClass
     *
     * @return integer
     */
    public function getArmorClass()
    {
        return $this->armorClass;
    }

    /**
     * Set initiative
     *
     * @param integer $initiative
     *
     * @return D20Race
     */
    public function setInitiative($initiative)
    {
        $this->initiative = $initiative;

        return $this;
    }

    /**
     * Get initiative
     *
     * @return integer
     */
    public function getInitiative()
    {
        return $this->initiative;
    }

    /**
     * Set speed
     *
     * @param integer $speed
     *
     * @return D20Race
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get speed
     *
     * @return integer
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set damageReduction
     *
     * @param integer $damageReduction
     *
     * @return D20Race
     */
    public function setDamageReduction($damageReduction)
    {
        $this->damageReduction = $damageReduction;

        return $this;
    }

    /**
     * Get damageReduction
     *
     * @return integer
     */
    public function getDamageReduction()
    {
        return $this->damageReduction;
    }
}
