<?php

namespace TW\frontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Document
 */
class Document {

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var boolean
     */
    private $type;

    /**
     * @var string
     */
    private $url;

    /**
     * @var file
     */
    private $content;

    /**
     * @var \TW\frontOfficeBundle\Entity\Reclamation
     */
    private $idreclamation;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Document
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set type
     *
     * @param boolean $type
     * @return Document
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean 
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Document
     */
    public function setUrl($url) {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl() {
        return $this->getWebPath();
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Document
     */
    public function setContent($content) {
        $this->content = $content;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * Set idreclamation
     *
     * @param \TW\frontOfficeBundle\Entity\Reclamation $idreclamation
     * @return Document
     */
    public function setIdreclamation(\TW\frontOfficeBundle\Entity\Reclamation $idreclamation = null) {
        $this->idreclamation = $idreclamation;

        return $this;
    }

    /**
     * Get idreclamation
     *
     * @return \TW\frontOfficeBundle\Entity\Reclamation 
     */
    public function getIdreclamation() {
        return $this->idreclamation;
    }

    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @Assert\File(maxSize="500k")
     */
    private $file;

    public function getFile() {
        return $this->file;
    }

    public function setFile($file) {
        $this->file = $file;
    }

    public function getWebPath() {
        return null === $this->url ? null : $this->getWebDir() . "/" . $this->url;
    }

    protected function getUploadRootDir() {
// le chemin absolu du répertoire dans lequel sauvegarder les photos de profil
        return __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'web' . DIRECTORY_SEPARATOR . $this->getUploadDir();
    }

    protected function getUploadDir() {
// get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return 'uploads' . DIRECTORY_SEPARATOR . 'reclamations' . DIRECTORY_SEPARATOR . $this->idreclamation->getId() . "_" . $this->idreclamation->getTitre();
    }
    
    protected function getWebDir(){
        return 'uploads/reclamations/'  . $this->idreclamation->getId() . "_" . $this->idreclamation->getTitre();
    }

    public function upload() {
// Nous utilisons le nom de fichier original, donc il est dans la pratique 
// nécessaire de le nettoyer pour éviter les problèmes de sécurité
// move copie le fichier présent chez le client dans le répertoire indiqué.
        $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());

// On sauvegarde le nom de fichier
        $this->type = 1;
        $this->url = $this->file->getClientOriginalName();

// La propriété file ne servira plus
        $this->file = null;
    }

// …
}
