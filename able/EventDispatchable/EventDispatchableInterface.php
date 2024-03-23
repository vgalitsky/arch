<?php
declare(strict_types=1);
namespace Cl\Able\EventDispatchable;

use Psr\EventDispatcher\EventDispatcherInterface;

interface EventDispatchable
{

    /**
     * Set the event dispatcher
     *
     * @param EventDispatcherInterface $dispatcher 
     * 
     * @return void
     */
    public function setEventDispatcher(EventDispatcherInterface $dispatcher);

    /**
     * {@inheritDoc}
     */
    public function dispatch($event);
}