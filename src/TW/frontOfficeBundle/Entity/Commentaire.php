<?php

namespace TW\frontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 */
class Commentaire
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $texte;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \TW\frontOfficeBundle\Entity\Utilisateur
     */
    private $idutilisateur;

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
     * Set texte
     *
     * @param string $texte
     * @return Commentaire
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string 
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Commentaire
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
     * Set idutilisateur
     *
     * @param \TW\frontOfficeBundle\Entity\Utilisateur $idutilisateur
     * @return Commentaire
     */
    public function setIdutilisateur(\TW\frontOfficeBundle\Entity\Utilisateur $idutilisateur = null)
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }
    
   

    /**
     * Get idutilisateur
     *
     * @return \TW\frontOfficeBundle\Entity\Utilisateur 
     */
    public function getIdutilisateur()
    {
        return $this->idutilisateur;
    }

    /**
     * Set idreclamation
     *
     * @param \TW\frontOfficeBundle\Entity\Reclamation $idreclamation
     * @return Commentaire
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
