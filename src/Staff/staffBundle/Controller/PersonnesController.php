<?php
namespace Staff\staffBundle\Controller;

use Staff\staffBundle\Entity\Personnes;
use Staff\staffBundle\Entity\Services;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Created by PhpStorm.
 * User: kawtar
 * Date: 09/04/15
 * Time: 11:30
 */
class PersonnesController extends Controller
{
    public function indexAction(Request $request, Services $service)
    {
        $Personnes= $this->getDoctrine()
        ->getManager();

        $qb  = $Personnes
            ->getRepository('StaffstaffBundle:Personnes')
            ->createQueryBuilder('p');
        if ($service != null) {
           $qb->innerJoin('p.contributions', 'c', 'with', 'c.service = :service')
               ->setParameter('service', $service);
        }
        $ListePersonnes = $qb->getQuery()->getResult();

        return $this->render('StaffstaffBundle:Personnes:index.html.twig', array('ListePersonnes' =>$ListePersonnes));
    }

    public function serviceAction(Request $request, Personnes $personnes, ServicePrincipal $servicePrincipal=null)
    {
        return $this->render('StaffstaffBundle:Personnes:service.html.twig', array('Personnes' =>$personnes));
    }
}