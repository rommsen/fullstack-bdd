<?php

namespace Coruja\BddBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CorujaBddBundle:Default:index.html.twig', array('name' => $name));
    }
}
