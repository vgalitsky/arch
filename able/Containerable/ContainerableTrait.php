<?php
declare(strict_types=1);
namespace Cl\Able\Containerable;

use Psr\Container\ContainerInterface;

trait ContainerableTrait
{
    protected ContainerInterface $container;
    function setContainer(ContainerInterface $container): void
    {
        $this->container = $container;
    }
    function getContainer(): ContainerInterface
    {
        return $this->container;
    }
}