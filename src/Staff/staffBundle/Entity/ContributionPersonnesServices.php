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
     * @ORM\ManyToOne(targetEntity="Staff\staffBundle\Entity\Personnes")
     * @ORM\JoinColumn(nullable=false)
     */

    private $IdPersonne;

    /**
     * @ORM\ManyToOne(targetEntity="Staff\staffBundle\Entity\Services")
     * @ORM\JoinColumn(nullable=false)
     */

    private $IdService;

    /**
     * @var integer
     *
     * @ORM\Column(name="Taux", type="integer")
     */
    private $taux;

    /**
     * @param mixed $IdPersonne
     */
    public function setIdPersonne($IdPersonne)
    {
        $this->IdPersonne = $IdPersonne;
    }

    /**
     * @return mixed
     */
    public function getIdPersonne()
    {
        return $this->IdPersonne;
    }

    /**
     * @param mixed $IdService
     */
    public function setIdService($IdService)
    {
        $this->IdService = $IdService;
    }

    /**
     * @return mixed
     */
    public function getIdService()
    {
        return $this->IdService;
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