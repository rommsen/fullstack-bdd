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

    function it_should_respond_to_list_action_call()
    {
        $response = $this->listAction();
        $response->getStatusCode()->shouldReturn(200);
    }

    function it_should_render_list_of_courses($templating)
    {
        $this->listAction();
        $templating->renderResponse('CorujaBddBundle:Courses:list.html.twig', Argument::cetera())->shouldBeCalled();
    }

    function it_should_pass_courses_from_domain_to_the_view($repository, $templating)
    {
        $repository->findAll()->willReturn(array('item1', 'item2'));
        $this->listAction();
        $templating->renderResponse('CorujaBddBundle:Courses:list.html.twig', array('courses' => array('item1', 'item2')), Argument::cetera())->shouldBeCalled();
    }
}
