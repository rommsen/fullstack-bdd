<?php

namespace spec\Coruja\BddBundle\Controller;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CoursesControllerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Coruja\BddBundle\Controller\CoursesController');
    }
}
