<?php
declare(strict_types=1);
namespace Cl\Able\Containerable;

use Psr\Container\ContainerInterface;

interface ContainerableInterface
{
    function setContainer(ContainerInterface $container);
    function getContainer(): ContainerInterface;
}