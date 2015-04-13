<?php
namespace Staff\staffBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *  Class Services
 *
 * @ORM\Table(name="Services")
 * @ORM\Entity(repositoryClass="Staff\staffBundle\Repository\ServicesRepository")
 * @package Staff\staffBundle\Entity
 *
 * @author Kawtar Daoudi <kdaoudi@aqualeha.fr>
 * Created by PhpStorm.
 * User: kawtar
 * Date: 07/04/15
 * Time: 16:40
 */
class Services
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer",length=11, options={"comment"="Identifiant"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var text
     *
     * @ORM\Column(name="Name", type="text")
     */

    private $name;

    /**
     * @var text
     *
     * @ORM\Column(name="Description", type="text")
     */

    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="Actif", columnDefinition="ENUM('actif','inactif')", options={"default" ="actif", "comment"="actif"})
     */
    private $actif;

    /**
     * @ORM\OneToMany(targetEntity="Staff\staffBundle\Entity\Personnes", mappedBy="Services")
     * @ORM\column(name="Responsable", type="integer")
     */

    private $Responsable;

    /**
     * @ORM\ManyToOne(targetEntity="Staff\staffBundle\Entity\Poles", inversedBy="lines", cascade={"persist"})
     * @ORM\JoinColumn(name="IdPole", referencedColumnName="Id")
     * @ORM\column(name="Pole", type="integer", length=11)
     */
    private $Pole;
   /**
     * @ORM\OneToMany(targetEntity="Staff\staffBundle\Entity\Personnes", mappedBy="Services")
     * @ORM\column(name="Personnes", type="integer")
     */
    private $personnes;
    /**
     * @var String
     *
     * @ORM\Column(name="Pays", type="text", length=32)
     */

    private $pays;

    /**
     * @param mixed $IdPole
     */
    public function setIdPole($Pole)
    {
        $this->Pole = $Pole;
    }

    /**
     * @return mixed
     */
    public function getPole()
    {
        return $this->Pole;
    }

    /**
     * @param mixed $IdResponsable
     */
    public function setResponsable($Responsable)
    {
        $this->Responsable = $Responsable;
    }

    /**
     * @return mixed
     */
    public function getResponsable()
    {
        return $this->Responsable;
    }

    /**
     * @param \Staff\staffBundle\Entity\enum $actif
     */
    public function setActif($actif)
    {
        $this->actif = $actif;
    }

    /**
     * @return \Staff\staffBundle\Entity\enum
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * @param \Staff\staffBundle\Entity\text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return \Staff\staffBundle\Entity\text
     */
    public function getDescription()
    {
        return $this->description;
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
     * @param String $pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    }

    /**
     * @return String
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @param mixed $personnes
     */
    public function setPersonnes($personnes)
    {
        $this->personnes = $personnes;
    }

    /**
     * @return mixed
     */
    public function getPersonnes()
    {
        return $this->personnes;
    }




}