<?php
namespace Staff\staffBundle\Controller;

use Staff\staffBundle\Entity\Services;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
}