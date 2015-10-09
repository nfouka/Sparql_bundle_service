<?php

namespace mi2s\serviceSparqlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('mi2sserviceSparqlBundle:Default:index.html.twig', array('name' => $name));
    }
}
