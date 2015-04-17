<?php
namespace Staff\staffBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class ContributionPersonnesServices
 * @ORM\Table(name="ContributionPersonnesServices")
 * @ORM\Entity(repositoryClass="Staff\staffBundle\Repository\ContributionPersonnesServiesRepository")
 * Created by PhpStorm.
 * User: kawtar
 * Date: 08/04/15
 * Time: 16:25
 */
class ContributionPersonnesServices
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer",length=11, options={"comment"="Identifiant"})
     * @ORM\ID
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Staff\staffBundle\Entity\Personnes", inversedBy="contributions")
     * @ORM\JoinColumn(name="Personne", referencedColumnName="Id", nullable=false)
     */
    private $personne;

    /**
     * @ORM\ManyToOne(targetEntity="Staff\staffBundle\Entity\Services")
     * @ORM\JoinColumn(nullable=false)
     * @ORM\column(name="Service", type="integer")
     */

    private $service;

    /**
     * @var integer
     *
     * @ORM\Column(name="Taux", type="integer")
     */
    private $taux;

    /**
     * @param mixed $Personne
     */
    public function setPersonne($personne)
    {
        $this->personne = $personne;
    }

    /**
     * @return mixed
     */
    public function getPersonne()
    {
        return $this->personne;
    }

    /**
     * @param mixed $Service
     */
    public function setService($service)
    {
        $this->service = $service;
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
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
     * @param int $taux
     */
    public function setTaux($taux)
    {
        $this->taux = $taux;
    }

    /**
     * @return int
     */
    public function getTaux()
    {
        return $this->taux;
    }


}