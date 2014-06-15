<?php

namespace Projet\VideoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video
 *
 * @ORM\Table(name="video", indexes={@ORM\Index(name="fk_Articles_Rubriques1_idx", columns={"rubriques_id"})})
 * @ORM\Entity
 */
class Video
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
     * @ORM\Column(name="videoLien", type="text", nullable=false)
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
     * @var \Rubriques
     *
     * @ORM\ManyToOne(targetEntity="Projet\BaseBundle\Entity\Rubriques")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rubriques_id", referencedColumnName="id")
     * })
     */
    private $rubriques;

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
     * Set videoLien
     *
     * @param string $videoLien
     * @return Video
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
     * @return Video
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
     * @return Video
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
     * Set textVideoCourtFr
     *
     * @param string $textVideoCourtFr
     * @return Video
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
     * @return Video
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
     * @return Video
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
     * @return Video
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

    /**
     * Set rubriques
     *
     * @param \Projet\BaseBundle\Entity\Rubriques $rubriques
     * @return Video
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
}
