<?php
namespace Staff\staffBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Class Personnes
 *
 * @ORM\Table(name="Personnes")
 * @ORM\Entity(repositoryClass="Staff\staffBundle\Repository\PersonnesRepository")
 *
 *
 * Created by PhpStorm.
 * User: kawtar
 * Date: 07/04/15
 * Time: 11:56
 */
class Personnes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id",length=11, type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var text
     *
     * @ORM\Column(name="Nom", type="text")
     */
    private $name;
    /**
     * @var text

     * @ORM\Column(name="Prenom", type="text")
     */
    private $prenom;

    /**
     * @var string
     * @ORM\Column(name="Username", type="text", length=32)
     */
    private $username;

    /**
     * @var text
     * @ORM\Column(name="Photo", type="text")
     */
    private $photo;
    /**
     * @var text
     * @ORM\Column(name="observation", type="text")
     */
    private $observation;

    /**
     * @var date
     * @ORM\Column(name="date_arrivee", type="date")
     */
    private $DateArrivee;

    /**
     * @ORM\OneToOne(targetEntity="Staff\staffBundle\Entity\Personnes", cascade={"persist"})
     * @ORM\JoinColumn(name="Hierarchie_id", referencedColumnName="Id")
     */
    private $Hierarchie;

    /**
     * @ORM\ManyToOne(targetEntity="Staff\staffBundle\Entity\Services", inversedBy="personnes", cascade={"persist"})
     * @ORM\JoinColumn(name="ServicePrincipal", referencedColumnName="Id")
     */
    private $ServicePrincipal;

    /**
     * @var integer
     * @ORM\Column(name="ServicePrincipal", type="integer", length=11)
     */
    private $DateFinContrat;

    /**
     * @ORM\ManyToOne(targetEntity="Staff\staffBundle\Entity\Sites", inversedBy="lines", cascade={"persist"})
     * @ORM\JoinColumn(name="site", referencedColumnName="Id")
     */
    private $Site;

    /**
     * @param \Staff\staffBundle\Entity\date $DateArrivee
     */
    public function setDateArrivee($DateArrivee)
    {
        $this->DateArrivee = $DateArrivee;
    }

    /**
     * @return \Staff\staffBundle\Entity\date
     */
    public function getDateArrivee()
    {
        return $this->DateArrivee;
    }

    /**
     * @param int $DateFinContrat
     */
    public function setDateFinContrat($DateFinContrat)
    {
        $this->DateFinContrat = $DateFinContrat;
    }

    /**
     * @return int
     */
    public function getDateFinContrat()
    {
        return $this->DateFinContrat;
    }

    /**
     * @param mixed $IdHierarchie
     */
    public function setIdHierarchie($IdHierarchie)
    {
        $this->IdHierarchie = $IdHierarchie;
    }

    /**
     * @return mixed
     */
    public function getIdHierarchie()
    {
        return $this->Hierarchie;
    }

    /**
     * @param mixed $ServicePrincipal
     */
    public function setServicePrincipal($ServicePrincipal)
    {
        $this->ServicePrincipal = $ServicePrincipal;
    }

    /**
     * @return mixed
     */
    public function getServicePrincipal()
    {
        return $this->ServicePrincipal;
    }

    /**
     * @param mixed $Idsite
     */
    public function setsite($Idsite)
    {
        $this->Idsite = $Idsite;
    }

    /**
     * @return mixed
     */
    public function getIdsite()
    {
        return $this->Site;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param \Staff\staffBundle\Entity\text $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return \Staff\staffBundle\Entity\text
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param \Staff\staffBundle\Entity\text $observation
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;
    }

    /**
     * @return \Staff\staffBundle\Entity\text
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * @param \Staff\staffBundle\Entity\text $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return \Staff\staffBundle\Entity\text
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param \Staff\staffBundle\Entity\text $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return \Staff\staffBundle\Entity\text
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }








}