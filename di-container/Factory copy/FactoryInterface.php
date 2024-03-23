<?php
namespace Ctl\Container\Factory;

interface FactoryInterface
{
    
    /**
     * Create the instance
     *
     * @param string $serviceId The service Id
     * @param mixed  ...$args   The service arguments
     * 
     * @return object
     */
    function new(string $serviceId, ...$args);

    /**
     * Returns the callable factory
     *
     * @param string $serviceId The service identifier (or class name)
     * @param mixed  ...$args   The service arguments
     * 
     * @return \Closure
     */
    function getFactory(string $serviceId, ...$args);
}