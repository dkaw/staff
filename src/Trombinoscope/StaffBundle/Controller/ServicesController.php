<?php
namespace Trombinoscope\StaffBundle\Controller;

use Trombinoscope\StaffBundle\Entity\Poles;
use Trombinoscope\StaffBundle\Entity\Services;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Created by PhpStorm.
 * User: kawtar
 * Date: 13/04/15
 * Time: 13:56
 */
class ServicesController extends Controller
{
    public function indexAction(Request $request, Poles $pole = null)
    {
        $Services=$this->getDoctrine()->getManager();
        $qb = $Services->getRepository('TrombinoscopeStaffBundle:Services')->createQueryBuilder('s');
        if ($pole != null) {
            $qb->where('s.Pole = :pole')
                ->setParameter('pole', $pole);
        }

        $ListeServices = $qb->getQuery()->getResult();

        return $this->render('TrombinoscopeStaffBundle:Services:index.html.twig', array(
            'pole' => $pole,
            'ListeServices' => $ListeServices
        ));
    }

    public function membresAction(Request $request, Services $service)
    {
        return $this->render('TrombinoscopeStaffBundle:Services:membres.html.twig', array(
            'service' => $service

        ));
    }



}