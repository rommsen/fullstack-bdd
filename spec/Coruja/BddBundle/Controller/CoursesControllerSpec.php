<?php

namespace spec\Coruja\BddBundle\Controller;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use spec\ControllerSpecification;

class CoursesControllerSpec extends ControllerSpecification
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Coruja\BddBundle\Controller\CoursesController');
    }
}
