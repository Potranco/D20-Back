<?php

namespace AppBundle\Entity;

class D20Campaign
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
     * @var \AppBundle\Entity\D20Player
     */
    private $masterId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $D20Characters;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->D20Characters = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return D20Campaign
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
     * Set masterId
     *
     * @param \AppBundle\Entity\D20Player $masterId
     *
     * @return D20Campaign
     */
    public function setMasterId(\AppBundle\Entity\D20Player $masterId = null)
    {
        $this->masterId = $masterId;

        return $this;
    }

    /**
     * Get masterId
     *
     * @return \AppBundle\Entity\D20Player
     */
    public function getMasterId()
    {
        return $this->masterId;
    }

    /**
     * Add d20Character
     *
     * @param \AppBundle\Entity\D20Character $d20Character
     *
     * @return D20Campaign
     */
    public function addD20Character(\AppBundle\Entity\D20Character $d20Character)
    {
        $this->D20Characters[] = $d20Character;

        return $this;
    }

    /**
     * Remove d20Character
     *
     * @param \AppBundle\Entity\D20Character $d20Character
     */
    public function removeD20Character(\AppBundle\Entity\D20Character $d20Character)
    {
        $this->D20Characters->removeElement($d20Character);
    }

    /**
     * Get d20Characters
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getD20Characters()
    {
        return $this->D20Characters;
    }
}
