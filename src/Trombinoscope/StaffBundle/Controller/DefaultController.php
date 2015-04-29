<?php

namespace Trombinoscope\StaffBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TrombinoscopeStaffBundle:Default:index.html.twig', array());
    }
    public function aproposAction()
    {
        return $this->render('TrombinoscopeStaffBundle:Default:apropos.html.twig', array());
    }
}
