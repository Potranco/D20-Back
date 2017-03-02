<?php

namespace AppBundle\Entity;

class D20Character
{
    const SIZE_FINE       = +8;
    const SIZE_DIMINUTIVE = +4;
    const SIZE_TINY       = +2;
    const SIZE_SMALL      = +1;
    const SIZE_MEDIUM     = +0;
    const SIZE_LARGE      = -1;
    const SIZE_HUGE       = -2;
    const SIZE_GARGANTUAN = -4;
    const SIZE_COLOSSAL   = -8;

    const MODIFIER_PLUS1  = +1;
    const MODIFIER_PLUS2  = +2;
    const MODIFIER_PLUS3  = +3;
    const MODIFIER_PLUS4  = +4;
    const MODIFIER_PLUS5  = +5;
    const MODIFIER_LESS1  = -1;
    const MODIFIER_LESS2  = -2;
    const MODIFIER_LESS3  = -3;
    const MODIFIER_LESS4  = -4;
    const MODIFIER_LESS5  = -5;

    const ABILITY_1       = -5;
    const ABILITY_2       = -4;
    const ABILITY_3       = -4;
    const ABILITY_4       = -3;
    const ABILITY_5       = -3;
    const ABILITY_6       = -2;
    const ABILITY_7       = -2;
    const ABILITY_8       = -1;
    const ABILITY_9       = -1;
    const ABILITY_10      =  0;
    const ABILITY_11      =  0;
    const ABILITY_12      = +1;
    const ABILITY_13      = +1;
    const ABILITY_14      = +2;
    const ABILITY_15      = +2;
    const ABILITY_16      = +3;
    const ABILITY_17      = +3;
    const ABILITY_18      = +4;
    const ABILITY_19      = +4;
    const ABILITY_20      = +5;

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
     * @var string
     */
    private $deityName;

    /**
     * @var integer
     */
    private $age;

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
     * @var \AppBundle\Entity\D20Player
     */
    private $playerId;

    /**
     * @var \AppBundle\Entity\D20Race
     */
    private $raceId;

    /**
     * @var \AppBundle\Entity\D20Class
     */
    private $classId;


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
     * @return D20Character
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
     * Set deityName
     *
     * @param string $deityName
     *
     * @return D20Character
     */
    public function setDeityName($deityName)
    {
        $this->deityName = $deityName;

        return $this;
    }

    /**
     * Get deityName
     *
     * @return string
     */
    public function getDeityName()
    {
        return $this->deityName;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return D20Character
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set size
     *
     * @param integer $size
     *
     * @return D20Character
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
     * @return D20Character
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
     * @return D20Character
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
     * @return D20Character
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
     * @return D20Character
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
     * @return D20Character
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
     * @return D20Character
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
     * @return D20Character
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
     * @return D20Character
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
     * @return D20Character
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
     * @return D20Character
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
     * @return D20Character
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
     * @return D20Character
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
     * @return D20Character
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
     * @return D20Character
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
     * @return D20Character
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
     * @return D20Character
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

    /**
     * Set playerId
     *
     * @param \AppBundle\Entity\D20Player $playerId
     *
     * @return D20Character
     */
    public function setPlayerId(\AppBundle\Entity\D20Player $playerId = null)
    {
        $this->playerId = $playerId;

        return $this;
    }

    /**
     * Get playerId
     *
     * @return \AppBundle\Entity\D20Player
     */
    public function getPlayerId()
    {
        return $this->playerId;
    }

    /**
     * Set raceId
     *
     * @param \AppBundle\Entity\D20Race $raceId
     *
     * @return D20Character
     */
    public function setRaceId(\AppBundle\Entity\D20Race $raceId = null)
    {
        $this->raceId = $raceId;

        return $this;
    }

    /**
     * Get raceId
     *
     * @return \AppBundle\Entity\D20Race
     */
    public function getRaceId()
    {
        return $this->raceId;
    }

    /**
     * Set classId
     *
     * @param \AppBundle\Entity\D20Class $classId
     *
     * @return D20Character
     */
    public function setClassId(\AppBundle\Entity\D20Class $classId = null)
    {
        $this->classId = $classId;

        return $this;
    }

    /**
     * Get classId
     *
     * @return \AppBundle\Entity\D20Class
     */
    public function getClassId()
    {
        return $this->classId;
    }
}
