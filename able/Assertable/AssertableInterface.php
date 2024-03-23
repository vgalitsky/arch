<?php
namespace Cl\Able\Assertable;

interface AssertableInterface
{
    /**
     * Assert class or instance state
     *
     * @throws \Throwable
    */
    function assert();
}