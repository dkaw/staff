<?php
namespace Trombinoscope\StaffBundle\Repository;

use Doctrine\ORM\EntityRepository;
/**
 * Class PersonnesRepository
 *
 * @package Trombinoscope\StaffBundle\Repository
 *
 * @author Kawtar daoudi <kdaoudi@aqualeha.fr>
 * Created by PhpStorm.
 * User: kawtar
 * Date: 07/04/15
 * Time: 16:59
 */

class PersonnesRepository extends EntityRepository
{

    /**
     *
     *
     * @param Service $service
     *
     * @return array
     */
    public function getPersonnes(Service $service = null)
    {
        $qb = $this->createQueryBuilder('p');
        if ($service != null) {
            $qb->innerJoin('p.contributions', 'c', 'with', 'c.service = :service')
                ->setParameter('service', $service);
        }

        return $qb->getQuery()->getResult();
    }
    public function recherche($term){
        $qb = $this->createQueryBuilder('p');

        $qb ->select('p.id, p.name, p.slug')
            ->where('p.name LIKE :term')
            ->setParameter('term', '%'.$term.'%');
        $arrayAss= $qb->getQuery()
            ->getArrayResult();

        return $arrayAss;
        /*$array = array();
        foreach($arrayAss as $data)
        {
            $array[] = $data['Nom'];
        }*/

        return $array;
    }
}