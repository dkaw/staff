<?php
namespace Staff\staffBundle\Controller;
use Staff\staffBundle\Entity\Poles;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Created by PhpStorm.
 * User: kawtar
 * Date: 14/04/15
 * Time: 09:59
 */
class PoleController extends Controller
{
    public function indexAction()
    {
        $Pole= $this->getDoctrine()
            ->getManager();
        $ListePole  = $Pole
            ->getRepository('StaffstaffBundle:Poles')
            ->findAll();

        return $this->render('StaffstaffBundle:Poles:index.html.twig', array('ListePole' =>$ListePole));
    }
}