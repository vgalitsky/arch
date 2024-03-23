<?php
declare(strict_types=1);
namespace Cl\Context;

use Cl\Context\Exception\NotFoundException;

interface ContextInterface
{

    /**
     * Attach te value to a context
     *
     * @param string $name 
     * @param mixed  $value 
     * 
     * @return void
     */
    function attach(string $name, $value): void;

    /**
     * Check if context has the named value
     *
     * @param string $name 
     * 
     * @return mixed
     */
    function has(string $name): mixed;

    /**
     * Gets the named value
     *
     * @param string $name 
     * 
     * @return mixed
     * @throws NotFoundException
     */
    function get(string $name): mixed;

    /**
     * Gets the all values
     *
     * @return iterable
     */
    function getAll(): iterable;

}