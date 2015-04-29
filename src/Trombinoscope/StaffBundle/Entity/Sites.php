<?php
namespace Trombinoscope\StaffBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Sites
 * Created by PhpStorm.
 * User: kawtar
 * Date: 08/04/15
 * Time: 11:34
 * @ORM\Table(name="Sites")
 * @ORM\Entity(repositoryClass="Trombinoscope\StaffBundle\Repository\SitesRepository")
 * @package Trombinoscope\StaffBundle\Entity
 *
 */
class Sites
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
     * @ORM\Column(name="Name", type="text")
     */
    private $name;

    /**
     * @var text
     *
     * @ORM\Column(name="Adresse", type="text")
     */
    private $adresse;

    /**
     * @ORM\ManyToOne(targetEntity="Trombinoscope\StaffBundle\Entity\Personnes", inversedBy="Site", cascade={"persist"})
     * @ORM\JoinColumn(name="IdResponsable", referencedColumnName="Id")
     */
    private $Responsable;

    /**
     * @var String
     *
     * @ORM\Column(name="Pays", type="string", length=32)
     */
    private $pays;

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
     * @param \Trombinoscope\StaffBundle\Entity\text $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return \Trombinoscope\StaffBundle\Entity\text
     */
    public function getAdresse()
    {
        return $this->adresse;
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
     * @param \Trombinoscope\StaffBundle\Entity\text $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return \Trombinoscope\StaffBundle\Entity\text
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


}