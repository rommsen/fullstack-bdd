<?php

namespace spec\Coruja\BddBundle\Entity;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CourseSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Coruja\BddBundle\Entity\Course');
    }
}
