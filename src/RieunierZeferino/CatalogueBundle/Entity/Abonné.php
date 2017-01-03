<?php

namespace RieunierZeferino\CatalogueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonné
 */
class Abonné
{
    /**
     * @var integer
     */
    private $codeAbonné;

    /**
     * @var string
     */
    private $nomAbonné;

    /**
     * @var string
     */
    private $prénomAbonné;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var string
     */
    private $codePostal;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $userid;

    /**
     * @var integer
     */
    private $credit;

    /**
     * @var \RieunierZeferino\CatalogueBundle\Entity\Pays
     */
    private $codePays;


    /**
     * Get codeAbonné
     *
     * @return integer 
     */
    public function getCodeAbonné()
    {
        return $this->codeAbonné;
    }

    /**
     * Set nomAbonné
     *
     * @param string $nomAbonné
     * @return Abonné
     */
    public function setNomAbonné($nomAbonné)
    {
        $this->nomAbonné = $nomAbonné;

        return $this;
    }

    /**
     * Get nomAbonné
     *
     * @return string 
     */
    public function getNomAbonné()
    {
        return $this->nomAbonné;
    }

    /**
     * Set prénomAbonné
     *
     * @param string $prénomAbonné
     * @return Abonné
     */
    public function setPrénomAbonné($prénomAbonné)
    {
        $this->prénomAbonné = $prénomAbonné;

        return $this;
    }

    /**
     * Get prénomAbonné
     *
     * @return string 
     */
    public function getPrénomAbonné()
    {
        return $this->prénomAbonné;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Abonné
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
     * Set password
     *
     * @param string $password
     * @return Abonné
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Abonné
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Abonné
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
     * Set codePostal
     *
     * @param string $codePostal
     * @return Abonné
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string 
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Abonné
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
     * Set userid
     *
     * @param string $userid
     * @return Abonné
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return string 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set credit
     *
     * @param integer $credit
     * @return Abonné
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Get credit
     *
     * @return integer 
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Set codePays
     *
     * @param \RieunierZeferino\CatalogueBundle\Entity\Pays $codePays
     * @return Abonné
     */
    public function setCodePays(\RieunierZeferino\CatalogueBundle\Entity\Pays $codePays = null)
    {
        $this->codePays = $codePays;

        return $this;
    }

    /**
     * Get codePays
     *
     * @return \RieunierZeferino\CatalogueBundle\Entity\Pays 
     */
    public function getCodePays()
    {
        return $this->codePays;
    }
}
