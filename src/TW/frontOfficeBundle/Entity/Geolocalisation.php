<?php

namespace TW\frontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Geolocalisation
 */
class Geolocalisation
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $lon;

    /**
     * @var float
     */
    private $lat;

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
     * Set lon
     *
     * @param float $lon
     * @return Geolocalisation
     */
    public function setLon($lon)
    {
        $this->lon = $lon;

        return $this;
    }

    /**
     * Get lon
     *
     * @return float 
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * Set lat
     *
     * @param float $lat
     * @return Geolocalisation
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return float 
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set idreclamation
     *
     * @param \TW\frontOfficeBundle\Entity\Reclamation $idreclamation
     * @return Geolocalisation
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
    
    public function __toString() {
        return "aa";
    }

}
