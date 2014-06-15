<?php

namespace Projet\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rubriques
 *
 * @ORM\Table(name="rubriques", indexes={@ORM\Index(name="fk_Rubriques_Site_idx", columns={"site_id"})})
 * @ORM\Entity
 */
class Rubriques
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
     * @var integer
     *
     * @ORM\Column(name="rubrique_id", type="string", nullable=false)
     */
    private $rubriqueId;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_fr", type="string", length=45, nullable=false)
     */
    private $titreFr;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_en", type="string", length=45, nullable=true)
     */
    private $titreEn;

    /**
     * @var \Site
     *
     * @ORM\ManyToOne(targetEntity="Site")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="site_id", referencedColumnName="id")
     * })
     */
    private $siteId;
    /**
     * @var string
     *
     * @ORM\Column(name="site_slug", type="string", length=50, nullable=false)
     */
    private $siteslug;


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
     * Set rubriqueId
     *
     * @param integer $rubriqueId
     * @return Rubriques
     */
    public function setRubriqueId($rubriqueId)
    {
        $this->rubriqueId = $rubriqueId;

        return $this;
    }

    /**
     * Get rubriqueId
     *
     * @return integer
     */
    public function getRubriqueId()
    {
        return $this->rubriqueId;
    }

    /**
     * Set titreFr
     *
     * @param string $titreFr
     * @return Rubriques
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
     * @return Rubriques
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
     * Set site
     *
     * @param \Projet\BaseBundle\Entity\Site $site
     * @return Rubriques
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
     * Set siteId
     *
     * @param \Projet\BaseBundle\Entity\Site $siteId
     * @return Rubriques
     */
    public function setSiteId(\Projet\BaseBundle\Entity\Site $siteId = null)
    {
        $this->siteId = $siteId;

        return $this;
    }

    /**
     * Get siteId
     *
     * @return \Projet\BaseBundle\Entity\Site 
     */
    public function getSiteId()
    {
        return $this->siteId;
    }

    /**
     * Set siteslug
     *
     * @param string $siteslug
     * @return Rubriques
     */
    public function setSiteslug($siteslug)
    {
        $this->siteslug = $siteslug;

        return $this;
    }

    /**
     * Get siteslug
     *
     * @return string 
     */
    public function getSiteslug()
    {
        return $this->siteslug;
    }
}
