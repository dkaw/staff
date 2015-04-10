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
     * @ORM\Column(name="ID",length=11, type="integer", nullable=false)
     * @ORM\ID
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
      */

    private $Responsable;

    /**
     * @ORM\OneToMany(targetEntity="Staff\staffBundle\Entity\Services", mappedBy="Poles")
     */

    private $Service;

    /**
     * @param mixed $IdResponsable
     */
    public function setResponsable($Responsable)
    {
        $this->IdResponsable = $Responsable;
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
     * @param mixed $IdService
     */
    public function setService($IdService)
    {
        $this->IdService = $Service;
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->Service;
    }



}