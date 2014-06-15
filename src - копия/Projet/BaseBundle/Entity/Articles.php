<?php

namespace Projet\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 *
 * @ORM\Table(name="articles", indexes={@ORM\Index(name="fk_Articles_Rubriques1_idx", columns={"rubriques_id"})})
 * @ORM\Entity
 */
class Articles
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
     * @ORM\Column(name="titre_fr", type="string", length=150, nullable=false)
     */
    private $titreFr;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_en", type="string", length=45, nullable=false)
     */
    private $titreEn;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_fr", type="text", nullable=false)
     */
    private $texteFr;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_en", type="text", nullable=false)
     */
    private $texteEn;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=70, nullable=true)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="string", length=45, nullable=true)
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="status_vend", type="integer", nullable=true)
     */
    private $statusVend;

    /**
     * @var \Rubriques
     *
     * @ORM\ManyToOne(targetEntity="Rubriques")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rubriques_id", referencedColumnName="id")
     * })
     */
    private $rubriques;



    /**
     * @var string
     *
     * @ORM\Column(name="videoLien", type="string", length=800, nullable=false)
     */
    private $videoLien;

    /**
     * @var string
     *
     * @ORM\Column(name="titreVideoFr", type="string", length=150, nullable=false)
     */
    private $titreVideoFr;

    /**
     * @var string
     *
     * @ORM\Column(name="titreVideoEn", type="string", length=150, nullable=false)
     */
    private $titreVideoEn;
    /**
     * @var string
     *
     * @ORM\Column(name="textVideoCourtFr", type="string", length=500, nullable=false)
     */
    private $textVideoCourtFr;
    /**
     * @var string
     *
     * @ORM\Column(name="textVideoCourtEn", type="string", length=500, nullable=false)
     */
    private $textVideoCourtEn;
    /**
     * @var string
     *
     * @ORM\Column(name="textVideoLongFr", type="text",  nullable=false)
     */
    private $textVideoLongFr;

    /**
     * @var string
     *
     * @ORM\Column(name="textVideoLongEn", type="text",  nullable=false)
     */
    private $textVideoLongEn;
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
     * Set titreFr
     *
     * @param string $titreFr
     * @return Articles
     */
    public function setTitreFr($titreFr)
    {
        $this->titreFr = $titreFr;

        return $this;
    }

    /**
     * Get titreFr
     *
     * @return string 
     */
    public function getTitreFr()
    {
        return $this->titreFr;
    }

    /**
     * Set titreEn
     *
     * @param string $titreEn
     * @return Articles
     */
    public function setTitreEn($titreEn)
    {
        $this->titreEn = $titreEn;

        return $this;
    }

    /**
     * Get titreEn
     *
     * @return string 
     */
    public function getTitreEn()
    {
        return $this->titreEn;
    }

    /**
     * Set texteFr
     *
     * @param string $texteFr
     * @return Articles
     */
    public function setTexteFr($texteFr)
    {
        $this->texteFr = $texteFr;

        return $this;
    }

    /**
     * Get texteFr
     *
     * @return string 
     */
    public function getTexteFr()
    {
        return $this->texteFr;
    }

    /**
     * Set texteEn
     *
     * @param string $texteEn
     * @return Articles
     */
    public function setTexteEn($texteEn)
    {
        $this->texteEn = $texteEn;

        return $this;
    }

    /**
     * Get texteEn
     *
     * @return string 
     */
    public function getTexteEn()
    {
        return $this->texteEn;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Articles
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
     * Set prix
     *
     * @param string $prix
     * @return Articles
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

    /**
     * Set statusVend
     *
     * @param integer $statusVend
     * @return Articles
     */
    public function setStatusVend($statusVend)
    {
        $this->statusVend = $statusVend;

        return $this;
    }

    /**
     * Get statusVend
     *
     * @return integer 
     */
    public function getStatusVend()
    {
        return $this->statusVend;
    }

    /**
     * Set rubriques
     *
     * @param \Projet\BaseBundle\Entity\Rubriques $rubriques
     * @return Articles
     */
    public function setRubriques(\Projet\BaseBundle\Entity\Rubriques $rubriques = null)
    {
        $this->rubriques = $rubriques;

        return $this;
    }

    /**
     * Get rubriques
     *
     * @return \Projet\BaseBundle\Entity\Rubriques 
     */
    public function getRubriques()
    {
        return $this->rubriques;
    }

    /**
     * Set videoLien
     *
     * @param string $videoLien
     * @return Articles
     */
    public function setVideoLien($videoLien)
    {
        $this->videoLien = $videoLien;

        return $this;
    }

    /**
     * Get videoLien
     *
     * @return string 
     */
    public function getVideoLien()
    {
        return $this->videoLien;
    }

    /**
     * Set titreVideoFr
     *
     * @param string $titreVideoFr
     * @return Articles
     */
    public function setTitreVideoFr($titreVideoFr)
    {
        $this->titreVideoFr = $titreVideoFr;

        return $this;
    }

    /**
     * Get titreVideoFr
     *
     * @return string 
     */
    public function getTitreVideoFr()
    {
        return $this->titreVideoFr;
    }

    /**
     * Set titreVideoEn
     *
     * @param string $titreVideoEn
     * @return Articles
     */
    public function setTitreVideoEn($titreVideoEn)
    {
        $this->titreVideoEn = $titreVideoEn;

        return $this;
    }

    /**
     * Get titreVideoEn
     *
     * @return string 
     */
    public function getTitreVideoEn()
    {
        return $this->titreVideoEn;
    }

    /**
     * Set textVideoFr
     *
     * @param string $textVideoFr
     * @return Articles
     */
    public function setTextVideoFr($textVideoFr)
    {
        $this->textVideoFr = $textVideoFr;

        return $this;
    }

    /**
     * Get textVideoFr
     *
     * @return string 
     */
    public function getTextVideoFr()
    {
        return $this->textVideoFr;
    }

    /**
     * Set textVideoEn
     *
     * @param string $textVideoEn
     * @return Articles
     */
    public function setTextVideoEn($textVideoEn)
    {
        $this->textVideoEn = $textVideoEn;

        return $this;
    }

    /**
     * Get textVideoEn
     *
     * @return string 
     */
    public function getTextVideoEn()
    {
        return $this->textVideoEn;
    }

    /**
     * Set textVideoCourtFr
     *
     * @param string $textVideoCourtFr
     * @return Articles
     */
    public function setTextVideoCourtFr($textVideoCourtFr)
    {
        $this->textVideoCourtFr = $textVideoCourtFr;

        return $this;
    }

    /**
     * Get textVideoCourtFr
     *
     * @return string 
     */
    public function getTextVideoCourtFr()
    {
        return $this->textVideoCourtFr;
    }

    /**
     * Set textVideoCourtEn
     *
     * @param string $textVideoCourtEn
     * @return Articles
     */
    public function setTextVideoCourtEn($textVideoCourtEn)
    {
        $this->textVideoCourtEn = $textVideoCourtEn;

        return $this;
    }

    /**
     * Get textVideoCourtEn
     *
     * @return string 
     */
    public function getTextVideoCourtEn()
    {
        return $this->textVideoCourtEn;
    }

    /**
     * Set textVideoLongFr
     *
     * @param string $textVideoLongFr
     * @return Articles
     */
    public function setTextVideoLongFr($textVideoLongFr)
    {
        $this->textVideoLongFr = $textVideoLongFr;

        return $this;
    }

    /**
     * Get textVideoLongFr
     *
     * @return string 
     */
    public function getTextVideoLongFr()
    {
        return $this->textVideoLongFr;
    }

    /**
     * Set textVideoLongEn
     *
     * @param string $textVideoLongEn
     * @return Articles
     */
    public function setTextVideoLongEn($textVideoLongEn)
    {
        $this->textVideoLongEn = $textVideoLongEn;

        return $this;
    }

    /**
     * Get textVideoLongEn
     *
     * @return string 
     */
    public function getTextVideoLongEn()
    {
        return $this->textVideoLongEn;
    }
}
