<?php
namespace Staff\staffBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * class Poles
 *
 * @ORM\Table(name="Poles")
 * @ORM\Entity(repositoryClass="Staff\staffBundle\Repository\PolesRepository")
 * Created by PhpStorm.
 * User: kawtar
 * Date: 07/04/15
 * Time: 16:54
 */
class Poles
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

    private $nom;

    /**
     * @var text

     * @ORM\Column(name="Description", type="text")
     */

    private $description;

    /**
      * @ORM\OneToMany(targetEntity="Staff\staffBundle\Entity\Personnes", mappedBy="Poles")
      * @ORM\column(name="Responsable", type="integer", nullable=true)
     *
      */
    private $Responsable;

    /**
     * @ORM\OneToMany(targetEntity="Staff\staffBundle\Entity\Services", mappedBy="Poles")
     * @ORM\column(name="Service", type="text")
     */

    private $Service;

    /**
     * @param mixed $Responsable
     */
    public function setResponsable($Responsable)
    {
        $this->Responsable = $Responsable;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getResponsable()
    {
        return $this->Responsable;
    }

    /**
     * @param \Staff\staffBundle\Entity\text $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return \Staff\staffBundle\Entity\text
     */
    public function getNom()
    {
        return $this->nom;
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
     * @param mixed $Service
     */
    public function setService($Service)
    {
        $this->Service = $Service;
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->Service;
    }



}