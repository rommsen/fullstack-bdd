<?php

namespace Coruja\BddBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoursesController extends Controller
{
    public function listAction()
    {
        return $this->render(
            'CorujaBddBundle:Courses:list.html.twig',
            array()
        );
    }
}