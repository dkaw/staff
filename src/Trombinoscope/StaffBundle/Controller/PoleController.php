<?php
namespace Trombinoscope\StaffBundle\Controller;
use Trombinoscope\StaffBundle\Entity\Poles;
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
            ->getRepository('TrombinoscopeStaffBundle:Poles')
            ->findAll();

        return $this->render('TrombinoscopeStaffBundle:Poles:index.html.twig', array('ListePole' =>$ListePole));
    }
}