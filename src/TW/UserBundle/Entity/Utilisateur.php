<?php

namespace TW\UserBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 * @ORM\AttributeOverrides({
 *      @ORM\AttributeOverride(name="email",
 *          column=@ORM\Column(
 *              name     = "mail",
 *              type     = "string",
 *              length   = 30,
 *              nullable = true
 *          )
 *      ),
 *      @ORM\AttributeOverride(name="password",
 *          column=@ORM\Column(
 *              name     = "mdp",
 *              type     = "string",
 *              length   = 200,
 *              nullable = true
 *          )
 *      ),
 * })
 */
class Utilisateur extends BaseUser
{
    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->type = "C";
    }
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     * @Assert\Length(
     *     min=3,
     *     max="255",
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $nom;

    /**
    * @ORM\Column(type="string",length=255,nullable=true) 
    */
    protected $prenom;

    /**
    * @ORM\Column(type="string",length=1,nullable=true) 
    * 
    */
    protected $sexe;

    /**
    * @ORM\Column(type="string",length=255,nullable=true) 
    */
    protected $adress;

    /**
    * @ORM\Column(type="string",length=255,nullable=true) 
    */
    protected $login;

    /**
    * @ORM\Column(type="string",length=1,nullable=true) 
    */
    protected $type;
    
    /**
    * @ORM\Column(type="date",length=255,nullable=true) 
    */
    protected $datenaissance;
    
    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    protected $idetablissement;
    
    /**
    * @ORM\Column(type="date",length=255,nullable=true) 
    */
    protected $photo;
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
     * Get idetablissement
     *
     * @return integer 
     */
    public function getIdetablissement()
    {
        return $this->idetablissement;
    }
    
    /**
     * Set idetablissement
     *
     * @param integer $idetablissement
     * @return Utilisateur
     */
    public function setIdetablissement($idetablissement)
    {
        $this->idetablissement = $idetablissement;

        return $this;
    }
    /**
     * Set nom
     *
     * @param string $nom
     * @return Utilisateur
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
     * Set prenom
     *
     * @param string $prenom
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return Utilisateur
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set adress
     *
     * @param string $adress
     * @return Utilisateur
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string 
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Utilisateur
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Utilisateur
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set datenaissance
     *
     * @param \DateTime $datenaissance
     * @return Utilisateur
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return \DateTime 
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }
}
