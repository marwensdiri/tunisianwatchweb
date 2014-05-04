<?php

namespace TW\frontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluation
 */
class Evaluation
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $note;

    /**
     * @var \TW\frontOfficeBundle\Entity\Utilisateur
     */
    private $idcitoyen;

    /**
     * @var \TW\frontOfficeBundle\Entity\Reclamation
     */
    private $idreclamation;


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
     * Set note
     *
     * @param boolean $note
     * @return Evaluation
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return boolean 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set idcitoyen
     *
     * @param \TW\frontOfficeBundle\Entity\Utilisateur $idcitoyen
     * @return Evaluation
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

    /**
     * Set idreclamation
     *
     * @param \TW\frontOfficeBundle\Entity\Reclamation $idreclamation
     * @return Evaluation
     */
    public function setIdreclamation(\TW\frontOfficeBundle\Entity\Reclamation $idreclamation = null)
    {
        $this->idreclamation = $idreclamation;

        return $this;
    }

    /**
     * Get idreclamation
     *
     * @return \TW\frontOfficeBundle\Entity\Reclamation 
     */
    public function getIdreclamation()
    {
        return $this->idreclamation;
    }
}
