<?php
namespace Ctl\Container\Factory;

interface ServiceFactoryInterface
{
   
    /**
     * Create the instance
     * 
     * @param mixed ...$args Optional constructor parameters
     * 
     * @return object The service instance
     */
    function new(...$args);

    /**
     * The alias for new()
     *
     * @return object The service instance
     */
    function ___invoke();

    /**
     * Get the service factory
     * 
     * @param mixed ...$args Optional constructor parameters
     * 
     * @return \Closure The service factory callable
     */
    function getFactory(...$args): \Closure;
}