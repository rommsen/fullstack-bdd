<?php

namespace spec;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityRepository;
use Prophecy\Argument;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;

use PhpSpec\ObjectBehavior;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

abstract class ControllerSpecification extends ObjectBehavior
{
    function let(ContainerInterface $container, Registry $doctrine, ObjectManager $manager, EngineInterface $templating, EntityRepository $repository)
    {
        if (!$this->getWrappedObject() instanceof ContainerAwareInterface) {
            throw new \RuntimeException('Controller must implement ContainerAwareInterface.');
        }

        $container->get('doctrine')->willReturn($doctrine);
        $container->get('templating')->willReturn($templating);

        $doctrine->getManager()->willReturn($manager);
        $manager->getRepository(Argument::cetera())->willReturn($repository);
        $repository->findAll()->willReturn(array());
        $templating->renderResponse(Argument::cetera())->willReturn(new Response());
        $this->object->setContainer($container);
    }
}