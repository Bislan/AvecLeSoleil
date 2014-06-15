<?php

namespace Projet\InscriptionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation", indexes={@ORM\Index(name="fk_Formation_Site1_idx", columns={"site_id"})})
 * @ORM\Entity
 */
class Formation
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
     * @ORM\Column(name="nom_fr", type="string", length=45, nullable=false)
     */
    private $nomFr;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_en", type="string", length=45, nullable=false)
     */
    private $nomEn;

    /**
     * @var string
     *
     * @ORM\Column(name="description_fr", type="string", length=45, nullable=true)
     */
    private $descriptionFr;

    /**
     * @var string
     *
     * @ORM\Column(name="description_en", type="string", length=45, nullable=true)
     */
    private $descriptionEn;




    /**
     * @var string
     *
     * @ORM\Column(name="nomeformateur", type="string", length=120, nullable=true)
     */
    private $nomeformateur;
    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=45, nullable=true)
     */
    private $telephone;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;
    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="string", length=5, nullable=false)
     */
    private $prix;







    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=70, nullable=true)
     */
    private $photo;
    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=70, nullable=false)
     */
    private $slug;
    /**
     * @var \Site
     *
     * @ORM\ManyToOne(targetEntity="Projet\BaseBundle\Entity\Site")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="site_id", referencedColumnName="id")
     * })
     */
    private $site;



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
     * Set nomFr
     *
     * @param string $nomFr
     * @return Formation
     */
    public function setNomFr($nomFr)
    {
        $this->nomFr = $nomFr;

        return $this;
    }

    /**
     * Get nomFr
     *
     * @return string
     */
    public function getNomFr()
    {
        return $this->nomFr;
    }

    /**
     * Set nomEn
     *
     * @param string $nomEn
     * @return Formation
     */
    public function setNomEn($nomEn)
    {
        $this->nomEn = $nomEn;

        return $this;
    }

    /**
     * Get nomEn
     *
     * @return string
     */
    public function getNomEn()
    {
        return $this->nomEn;
    }

    /**
     * Set descriptionFr
     *
     * @param string $descriptionFr
     * @return Formation
     */
    public function setDescriptionFr($descriptionFr)
    {
        $this->descriptionFr = $descriptionFr;

        return $this;
    }

    /**
     * Get descriptionFr
     *
     * @return string
     */
    public function getDescriptionFr()
    {
        return $this->descriptionFr;
    }

    /**
     * Set descriptionEn
     *
     * @param string $descriptionEn
     * @return Formation
     */
    public function setDescriptionEn($descriptionEn)
    {
        $this->descriptionEn = $descriptionEn;

        return $this;
    }

    /**
     * Get descriptionEn
     *
     * @return string
     */
    public function getDescriptionEn()
    {
        return $this->descriptionEn;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Formation
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set site
     *
     * @param \Projet\BaseBundle\Entity\Site $site
     * @return Formation
     */
    public function setSite(\Projet\BaseBundle\Entity\Site $site = null)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return \Projet\BaseBundle\Entity\Site
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set sit_slug
     *
     * @param string $sitSlug
     * @return Formation
     */
    public function setSlug($Slug)
    {
        $this->site_slug = $Slug;

        return $this;
    }

    /**
     * Get sit_slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set nomeformateur
     *
     * @param string $nomeformateur
     * @return Formation
     */
    public function setNomeformateur($nomeformateur)
    {
        $this->nomeformateur = $nomeformateur;

        return $this;
    }

    /**
     * Get nomeformateur
     *
     * @return string 
     */
    public function getNomeformateur()
    {
        return $this->nomeformateur;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Formation
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Formation
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
    public function __toString()
    {
        return $this->slug;
    }




    /**
     * Set prix
     *
     * @param string $prix
     * @return Formation
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string 
     */
    public function getPrix()
    {
        return $this->prix;
    }
}
