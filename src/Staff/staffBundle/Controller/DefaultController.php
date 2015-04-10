<?php

namespace Staff\staffBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('StaffstaffBundle:Default:index.html.twig', array());
    }
}
