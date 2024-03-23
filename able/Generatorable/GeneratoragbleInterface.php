<?php
declare(strict_types=1);
namespace Cl\Able\Generatorable;

interface GeneratoragbleInterface
{
    function yield($yield): \Generator;
}