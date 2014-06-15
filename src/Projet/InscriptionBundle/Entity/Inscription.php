<?php

namespace Projet\InscriptionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscription
 *
 * @ORM\Table(name="inscription", indexes={@ORM\Index(name="fk_Inscription_Formation1_idx", columns={"formation_id"})})
 * @ORM\Entity
 */
class Inscription
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=150, nullable=false)
     */
    private $rue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeNaissance", type="date", nullable=false)
     */
    private $datedenaissance;

    /**
     * @var integer
     *
     * @ORM\Column(name="boite", type="integer", nullable=false)
     */
    private $boite;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel", type="integer", nullable=false)
     */
    private $tel;

    /**
     * @var integer
     *
     * @ORM\Column(name="codePostal", type="integer", nullable=false)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=45, nullable=false)
     */
    private $ville;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;
    /**
     * @var string
     *
     * @ORM\Column(name="paypal_stat", type="string", length=1, nullable=true)
     */
    private $paypal_stat;
    /**
     * @var string
     *
     * @ORM\Column(name="paypal_hash", type="string", length=32, nullable=false)
     */
    private $paypal_hash;
    /**
     * @var string
     *
     * @ORM\Column(name="formation_id", type="string", length=10, nullable=true)
     */
    private $formation_id;



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
     * @return Inscription
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
     * @return Inscription
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
     * Set email
     *
     * @param string $email
     * @return Inscription
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set rue
     *
     * @param string $rue
     * @return Inscription
     */
    public function setRue($rue)
    {
        $this->rue = $rue;

        return $this;
    }

    /**
     * Get rue
     *
     * @return string 
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * Set datedenaissance
     *
     * @param \DateTime $datedenaissance
     * @return Inscription
     */
    public function setDatedenaissance($datedenaissance)
    {
        $this->datedenaissance = $datedenaissance;

        return $this;
    }

    /**
     * Get datedenaissance
     *
     * @return \DateTime 
     */
    public function getDatedenaissance()
    {
        return $this->datedenaissance;
    }

    /**
     * Set boite
     *
     * @param integer $boite
     * @return Inscription
     */
    public function setBoite($boite)
    {
        $this->boite = $boite;

        return $this;
    }

    /**
     * Get boite
     *
     * @return integer 
     */
    public function getBoite()
    {
        return $this->boite;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     * @return Inscription
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return integer 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set codepostal
     *
     * @param integer $codepostal
     * @return Inscription
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return integer 
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Inscription
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

    /**
     * Set formation
     *
     * @param \Projet\InscriptionBundle\Entity\Formation $formation
     * @return Inscription
     */
    public function setFormation($formation = null)
    {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get formation
     *
     * @return \Projet\InscriptionBundle\Entity\Formation
     */
    public function getFormation()
    {
        return $this->formation;
    }





    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Inscription
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
     * Set paypal_stat
     *
     * @param string $paypalStat
     * @return Inscription
     */
    public function setPaypalStat($paypalStat)
    {
        $this->paypal_stat = $paypalStat;

        return $this;
    }

    /**
     * Get paypal_stat
     *
     * @return string 
     */
    public function getPaypalStat()
    {
        return $this->paypal_stat;
    }

    /**
     * Set paypal_hash
     *
     * @param string $paypalHash
     * @return Inscription
     */
    public function setPaypalHash($paypalHash)
    {
        $this->paypal_hash = $paypalHash;

        return $this;
    }

    /**
     * Get paypal_hash
     *
     * @return string 
     */
    public function getPaypalHash()
    {
        return $this->paypal_hash;
    }

    /**
     * Set formation_id
     *
     * @param string $formationId
     * @return Inscription
     */
    public function setFormationId($formationId)
    {
        $this->formation_id = $formationId;

        return $this;
    }

    /**
     * Get formation_id
     *
     * @return string 
     */
    public function getFormationId()
    {
        return $this->formation_id;
    }
}
