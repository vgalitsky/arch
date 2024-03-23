<?php
namespace Cl\Able\Attachable;

use Psr\EventDispatcher\ListenerProviderInterface;

interface AttachableInterface
{    
    /**
     * Do Attach
     *
     * @param mixed $attachment 
     * 
     * @return void
     */
    function attach(mixed $attachment): void;
}