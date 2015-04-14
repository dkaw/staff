<?php
namespace Staff\staffBundle\Controller;

use Staff\staffBundle\Entity\Services;
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
    public function indexAction()
    {
        $Services=$this->getDoctrine()->getManager();
        $ListeServices =$Services->getRepository('StaffstaffBundle:Services')->findAll();

        return $this->render('StaffstaffBundle:Services:index.html.twig', array('ListeServices'=>$ListeServices));
    }

    public function membresAction(Request $request, Services $service)
    {
        return $this->render('StaffstaffBundle:Services:membres.html.twig', array(
            'service' => $service
        ));
    }
}