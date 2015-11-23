<?php

namespace BlueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BlueBundle:Default:index.html.twig', array('name' => $name));
    }
}
