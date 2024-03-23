<?php
declare(strict_types=1);
namespace Cl\reflection;

use Psr\SimpleCache\CacheInterface;
use \ReflectionClass;

class ReflectionCache
{
    /**
     * ReflectionClass instance container
     *
     * @var ReflectionClass[]
     */
    private $containerReflectionClass = [];
   
}