<?php
namespace Trombinoscope\StaffBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * class Poles
 *
 * @ORM\Table(name="Poles")
 * @ORM\Entity(repositoryClass="Trombinoscope\StaffBundle\Repository\PolesRepository")
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
      * @ORM\OneToMany(targetEntity="Trombinoscope\StaffBundle\Entity\Personnes", mappedBy="Poles")
      * @ORM\column(name="Responsable", type="integer", nullable=true)
     *
      */
    private $Responsable;

    /**
     * @ORM\OneToMany(targetEntity="Trombinoscope\StaffBundle\Entity\Services", mappedBy="Poles")
     * @ORM\column(name="Service", type="text")
     */

    private $Service;

    /**
     * @Gedmo\Slug(fields={"nom"})
     * @ORM\column(length=255, unique=true)
     *
     */
    protected $slug;

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
     * @param \Trombinoscope\StaffBundle\Entity\text $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return \Trombinoscope\StaffBundle\Entity\text
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
     * @param \Trombinoscope\StaffBundle\Entity\text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return \Trombinoscope\StaffBundle\Entity\text
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

    /**
     * @param mixed $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }



}