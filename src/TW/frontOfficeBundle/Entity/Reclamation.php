<?php

namespace TW\frontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 */
class Reclamation
{
    
    
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \DateTime
     */
    private $heure;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var boolean
     */
    private $etat;

    /**
     * @var \TW\frontOfficeBundle\Entity\Domaine
     */
    private $iddomaine;

    /**
     * @var \TW\frontOfficeBundle\Entity\Geolocalisation
     */
    private $idgeolocalisation;

    /**
     * @var \TW\frontOfficeBundle\Entity\Lieu
     */
    private $idlieu;

    /**
     * @var \TW\frontOfficeBundle\Entity\Utilisateur
     */
    private $idcitoyen;

    
    function __construct() {
         $this->documents = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function setId($id) {
        $this->id = $id;
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
     * Set date
     *
     * @param \DateTime $date
     * @return Reclamation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set heure
     *
     * @param \DateTime $heure
     * @return Reclamation
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return \DateTime 
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Reclamation
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
     * Set titre
     *
     * @param string $titre
     * @return Reclamation
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     * @return Reclamation
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set iddomaine
     *
     * @param \TW\frontOfficeBundle\Entity\Domaine $iddomaine
     * @return Reclamation
     */
    public function setIddomaine(\TW\frontOfficeBundle\Entity\Domaine $iddomaine = null)
    {
        $this->iddomaine = $iddomaine;

        return $this;
    }

    /**
     * Get iddomaine
     *
     * @return \TW\frontOfficeBundle\Entity\Domaine 
     */
    public function getIddomaine()
    {
        return $this->iddomaine;
    }

    /**
     * Set idgeolocalisation
     *
     * @param \TW\frontOfficeBundle\Entity\Geolocalisation $idgeolocalisation
     * @return Reclamation
     */
    public function setIdgeolocalisation(\TW\frontOfficeBundle\Entity\Geolocalisation $idgeolocalisation = null)
    {
        $this->idgeolocalisation = $idgeolocalisation;

        return $this;
    }

    /**
     * Get idgeolocalisation
     *
     * @return \TW\frontOfficeBundle\Entity\Geolocalisation 
     */
    public function getIdgeolocalisation()
    {
        return $this->idgeolocalisation;
    }

    /**
     * Set idlieu
     *
     * @param \TW\frontOfficeBundle\Entity\Lieu $idlieu
     * @return Reclamation
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
     * Set idcitoyen
     *
     * @param \TW\frontOfficeBundle\Entity\Utilisateur $idcitoyen
     * @return Reclamation
     */
    public function setIdcitoyen(\TW\frontOfficeBundle\Entity\Utilisateur $idcitoyen = null)
    {
        $this->idcitoyen = $idcitoyen;

        return $this;
    }

    /**
     * Get idcitoyen
     *
     * @return \TW\frontOfficeBundle\Entity\Utilisateur 
     */
    public function getIdcitoyen()
    {
        return $this->idcitoyen;
    }
    
    private $documents;
    
    public function getDocuments(){
        return $this->documents;
    }
    
    public function setDocuments(\Doctrine\Common\Collections\ArrayCollection $documents){
        $this->documents = $documents;
    }
    
     public function addDocument(\TW\frontOfficeBundle\Entity\Document $document)
    {
        $this->documents[] = $document;
        return $this;
    }

    /**
     * Remove docuement
     *
     * @param \TW\frontOfficeBundle\Entity\document $document
     */
    public function removeDocument(\TW\frontOfficeBundle\Entity\Document $document)
    {
        $this->documents->removeElement($document);
    }
    
    public function __toString() {
        return $this->titre;
    }

    
}
