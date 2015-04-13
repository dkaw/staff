<?php
namespace Staff\staffBundle\Controller;

use Staff\staffBundle\Entity\Personnes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Created by PhpStorm.
 * User: kawtar
 * Date: 09/04/15
 * Time: 11:30
 */
class PersonnesController extends Controller
{
    public function indexAction()
    {
        $Personnes= $this->getDoctrine()
        ->getManager();
        $ListePersonnes  = $Personnes
            ->getRepository('StaffstaffBundle:Personnes')
            ->findAll();



        return $this->render('StaffstaffBundle:Personnes:index.html.twig', array('ListePersonnes' =>$ListePersonnes));
    }




}