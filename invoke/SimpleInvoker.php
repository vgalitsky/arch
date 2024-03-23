<?php
namespace Cl\Invoke;

use Cl\Able\Invokeable\InvokeableInterface;
use Cl\Invoke\InvokerStaticInterface;

class SimpleInvoker implements  InvokerStaticInterface, InvokeableInterface
{

    public function __invoke(...$args): mixed
    {
        return static::invoke(...$args);
    }

    /**
     * {@inheritDoc}
     */
    public static function invoke(callable $callable, array $arguments): mixed
    {
        return (static function () use ($callable, $arguments) { 
            return call_user_func_array($callable, $arguments); 
        })();
    }

}