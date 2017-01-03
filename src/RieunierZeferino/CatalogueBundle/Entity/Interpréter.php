<?php

namespace RieunierZeferino\CatalogueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Interpréter
 */
class Interpréter
{
    /**
     * @var integer
     */
    private $codeInterpréter;

    /**
     * @var \RieunierZeferino\CatalogueBundle\Entity\Musicien
     */
    private $codeMusicien;

    /**
     * @var \RieunierZeferino\CatalogueBundle\Entity\Enregistrement
     */
    private $codeMorceau;

    /**
     * @var \RieunierZeferino\CatalogueBundle\Entity\Instrument
     */
    private $codeInstrument;


    /**
     * Get codeInterpréter
     *
     * @return integer 
     */
    public function getCodeInterpréter()
    {
        return $this->codeInterpréter;
    }

    /**
     * Set codeMusicien
     *
     * @param \RieunierZeferino\CatalogueBundle\Entity\Musicien $codeMusicien
     * @return Interpréter
     */
    public function setCodeMusicien(\RieunierZeferino\CatalogueBundle\Entity\Musicien $codeMusicien = null)
    {
        $this->codeMusicien = $codeMusicien;

        return $this;
    }

    /**
     * Get codeMusicien
     *
     * @return \RieunierZeferino\CatalogueBundle\Entity\Musicien 
     */
    public function getCodeMusicien()
    {
        return $this->codeMusicien;
    }

    /**
     * Set codeMorceau
     *
     * @param \RieunierZeferino\CatalogueBundle\Entity\Enregistrement $codeMorceau
     * @return Interpréter
     */
    public function setCodeMorceau(\RieunierZeferino\CatalogueBundle\Entity\Enregistrement $codeMorceau = null)
    {
        $this->codeMorceau = $codeMorceau;

        return $this;
    }

    /**
     * Get codeMorceau
     *
     * @return \RieunierZeferino\CatalogueBundle\Entity\Enregistrement 
     */
    public function getCodeMorceau()
    {
        return $this->codeMorceau;
    }

    /**
     * Set codeInstrument
     *
     * @param \RieunierZeferino\CatalogueBundle\Entity\Instrument $codeInstrument
     * @return Interpréter
     */
    public function setCodeInstrument(\RieunierZeferino\CatalogueBundle\Entity\Instrument $codeInstrument = null)
    {
        $this->codeInstrument = $codeInstrument;

        return $this;
    }

    /**
     * Get codeInstrument
     *
     * @return \RieunierZeferino\CatalogueBundle\Entity\Instrument 
     */
    public function getCodeInstrument()
    {
        return $this->codeInstrument;
    }
}
