<?php

namespace TW\frontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lieu
 */
class Lieu
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $ville;


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
     * Set ville
     *
     * @param string $ville
     * @return Lieu
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }
    
    public function __toString() {
       return $this->ville; 
    }

}
