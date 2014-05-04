<?php

namespace TW\frontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etablissement
 */
class Etablissement
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
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $image;

    /**
     * @var \TW\frontOfficeBundle\Entity\Lieu
     */
    private $idlieu;

    /**
     * @var \TW\frontOfficeBundle\Entity\Utilisateur
     */
    private $idresponsable;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $iddomaine;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->iddomaine = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Etablissement
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
     * Set description
     *
     * @param string $description
     * @return Etablissement
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Etablissement
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set idlieu
     *
     * @param \TW\frontOfficeBundle\Entity\Lieu $idlieu
     * @return Etablissement
     */
    public function setIdlieu(\TW\frontOfficeBundle\Entity\Lieu $idlieu = null)
    {
        $this->idlieu = $idlieu;

        return $this;
    }

    /**
     * Get idlieu
     *
     * @return \TW\frontOfficeBundle\Entity\Lieu 
     */
    public function getIdlieu()
    {
        return $this->idlieu;
    }

    /**
     * Set idresponsable
     *
     * @param \TW\frontOfficeBundle\Entity\Utilisateur $idresponsable
     * @return Etablissement
     */
    public function setIdresponsable(\TW\frontOfficeBundle\Entity\Utilisateur $idresponsable = null)
    {
        $this->idresponsable = $idresponsable;

        return $this;
    }

    /**
     * Get idresponsable
     *
     * @return \TW\frontOfficeBundle\Entity\Utilisateur 
     */
    public function getIdresponsable()
    {
        return $this->idresponsable;
    }

    /**
     * Add iddomaine
     *
     * @param \TW\frontOfficeBundle\Entity\Domaine $iddomaine
     * @return Etablissement
     */
    public function addIddomaine(\TW\frontOfficeBundle\Entity\Domaine $iddomaine)
    {
        $this->iddomaine[] = $iddomaine;

        return $this;
    }

    /**
     * Remove iddomaine
     *
     * @param \TW\frontOfficeBundle\Entity\Domaine $iddomaine
     */
    public function removeIddomaine(\TW\frontOfficeBundle\Entity\Domaine $iddomaine)
    {
        $this->iddomaine->removeElement($iddomaine);
    }

    /**
     * Get iddomaine
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIddomaine()
    {
        return $this->iddomaine;
    }
}
