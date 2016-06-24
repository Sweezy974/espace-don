<?php

namespace Donation\DonationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dons
 *
 * @ORM\Table(name="dons")
 * @ORM\Entity(repositoryClass="Donation\DonationBundle\Repository\DonsRepository")
 */
class Dons
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;
    
/**
  * @ORM\ManyToOne(targetEntity="Utilisateurs", inversedBy="don")
  * @ORM\JoinColumn(name="utilisateurs_id", referencedColumnName="id")
  */
  private $utilisateur;
  
/**
  * demandes des associations sur ce don
  * @ORM\ManyToMany(targetEntity="Utilisateurs", inversedBy="donDemandeAssociation")
  */
  private $donAssociation;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Dons
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Dons
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return Dons
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->donAssociation = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set utilisateur
     *
     * @param \Donation\DonationBundle\Entity\Utilisateurs $utilisateur
     *
     * @return Dons
     */
    public function setUtilisateur(\Donation\DonationBundle\Entity\Utilisateurs $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Donation\DonationBundle\Entity\Utilisateurs
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Add donAssociation
     *
     * @param \Donation\DonationBundle\Entity\Utilisateurs $donAssociation
     *
     * @return Dons
     */
    public function addDonAssociation(\Donation\DonationBundle\Entity\Utilisateurs $donAssociation)
    {
        $this->donAssociation[] = $donAssociation;

        return $this;
    }

    /**
     * Remove donAssociation
     *
     * @param \Donation\DonationBundle\Entity\Utilisateurs $donAssociation
     */
    public function removeDonAssociation(\Donation\DonationBundle\Entity\Utilisateurs $donAssociation)
    {
        $this->donAssociation->removeElement($donAssociation);
    }

    /**
     * Get donAssociation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDonAssociation()
    {
        return $this->donAssociation;
    }
}
