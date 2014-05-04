<?php

namespace TW\frontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domaine
 */
class Domaine
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idetablissement;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idetablissement = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     * @return Domaine
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Add idetablissement
     *
     * @param \TW\frontOfficeBundle\Entity\Etablissement $idetablissement
     * @return Domaine
     */
    public function addIdetablissement(\TW\frontOfficeBundle\Entity\Etablissement $idetablissement)
    {
        $this->idetablissement[] = $idetablissement;

        return $this;
    }

    /**
     * Remove idetablissement
     *
     * @param \TW\frontOfficeBundle\Entity\Etablissement $idetablissement
     */
    public function removeIdetablissement(\TW\frontOfficeBundle\Entity\Etablissement $idetablissement)
    {
        $this->idetablissement->removeElement($idetablissement);
    }

    /**
     * Get idetablissement
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdetablissement()
    {
        return $this->idetablissement;
    }
    
    public function __toString() {
        return $this->nom;
    }

}
