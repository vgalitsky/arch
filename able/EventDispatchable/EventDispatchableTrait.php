<?php
declare(strict_types=1);
namespace Cl\Able\EventDispatchable;

use Psr\EventDispatcher\EventDispatcherInterface;

trait EventDispatchableTrait
{
    public ?EventDispatcherInterface $___eventDispatcher = null;

    /**
     * {@inheritDoc}
     */
    public function setEventDispatcher(EventDispatcherInterface $eventDispatcher)
    {
        $this->___eventDispatcher = $eventDispatcher;
    }

    public function dispatch(object $event)
    {
        if ($this->___eventDispatcher instanceof EventDispatcherInterface) {
            if ($event instanceof )
            $this->___eventDispatcher->dispatch($event);
        } 
    }

}