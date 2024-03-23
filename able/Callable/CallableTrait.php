<?php
declare(strict_types=1);
namespace Cl\Able\Callable;

trait CallableTrait
{
    function isCallable($callable, $trigger_autoload = false)
    {
        if (is_array($callable) && !empty($callable[0]) && is_string($callable[0])) {
            // trigger class autoload
            class_exists($callable[0], $$trigger_autoload);
        }

        return is_callable($callable);
    }
}