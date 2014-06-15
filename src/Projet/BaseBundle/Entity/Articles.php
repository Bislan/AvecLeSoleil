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
     * @ORM\Column(name="texteLong_Fr", type="text", nullable=false)
     */
    private $texteLongFr;
    /**
     * @var string
     *
     * @ORM\Column(name="texteLong_En", type="text", nullable=false)
     */
    private $texteLongEn;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=70, nullable=true)
     */
    private $photo;


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
     * Set texteLongFr
     *
     * @param string $texteLongFr
     * @return Articles
     */
    public function setTexteLongFr($texteLongFr)
    {
        $this->texteLongFr = $texteLongFr;

        return $this;
    }

    /**
     * Get texteLongFr
     *
     * @return string 
     */
    public function getTexteLongFr()
    {
        return $this->texteLongFr;
    }

    /**
     * Set texteLongEn
     *
     * @param string $texteLongEn
     * @return Articles
     */
    public function setTexteLongEn($texteLongEn)
    {
        $this->texteLongEn = $texteLongEn;

        return $this;
    }

    /**
     * Get texteLongEn
     *
     * @return string 
     */
    public function getTexteLongEn()
    {
        return $this->texteLongEn;
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
}
