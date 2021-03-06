<?php
// src/AppBundle/Entity/Utilisateurs.php

namespace Donation\DonationBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Utilisateurs")
 */
class Utilisateurs extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $firstname;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lastname;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $associationname;
    
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $adress;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $phone;
    
/**
  * @ORM\OneToMany(targetEntity="Dons", mappedBy="utilisateur")
  * @ORM\JoinColumn(name="dons_id", referencedColumnName="id")
  */
  private $don;

  
/**
  * dons demandés par l'association.
  * @ORM\ManyToMany(targetEntity="Dons", mappedBy="donAssociation")
  */
  protected $donDemandeAssociation;
    

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Utilisateurs
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Utilisateurs
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set associationname
     *
     * @param string $associationname
     *
     * @return Utilisateurs
     */
    public function setAssociationname($associationname)
    {
        $this->associationname = $associationname;

        return $this;
    }

    /**
     * Get associationname
     *
     * @return string
     */
    public function getAssociationname()
    {
        return $this->associationname;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return Utilisateurs
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
     * Set phone
     *
     * @param string $phone
     *
     * @return Utilisateurs
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Add don
     *
     * @param \Donation\DonationBundle\Entity\Dons $don
     *
     * @return Utilisateurs
     */
    public function addDon(\Donation\DonationBundle\Entity\Dons $don)
    {
        $this->don[] = $don;

        return $this;
    }

    /**
     * Remove don
     *
     * @param \Donation\DonationBundle\Entity\Dons $don
     */
    public function removeDon(\Donation\DonationBundle\Entity\Dons $don)
    {
        $this->don->removeElement($don);
    }

    /**
     * Get don
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDon()
    {
        return $this->don;
    }

    /**
     * Add donDemandeAssociation
     *
     * @param \Donation\DonationBundle\Entity\Dons $donDemandeAssociation
     *
     * @return Utilisateurs
     */
    public function addDonDemandeAssociation(\Donation\DonationBundle\Entity\Dons $donDemandeAssociation)
    {
        $this->donDemandeAssociation[] = $donDemandeAssociation;

        return $this;
    }

    /**
     * Remove donDemandeAssociation
     *
     * @param \Donation\DonationBundle\Entity\Dons $donDemandeAssociation
     */
    public function removeDonDemandeAssociation(\Donation\DonationBundle\Entity\Dons $donDemandeAssociation)
    {
        $this->donDemandeAssociation->removeElement($donDemandeAssociation);
    }

    /**
     * Get donDemandeAssociation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDonDemandeAssociation()
    {
        return $this->donDemandeAssociation;
    }
}
