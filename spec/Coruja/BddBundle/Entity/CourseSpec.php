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

    function it_should_have_a_primary_key_which_is_null() {
        $this->getId()->shouldReturn(null);
    }
}
