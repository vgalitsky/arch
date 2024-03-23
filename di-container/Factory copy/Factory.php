<?php
namespace Ctl\Container\Factory;

use Psr\Container\ContainerInterface;
use Ctl\Container\ContainerInterface as CtlContainerInterface;

class Factory implements FactoryInterface
{

    protected ?CtlContainerInterface $container = null;

    /**
     * The constructor
     *
     * @param ContainerInterface $container The Container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * {@inheritDoc}
     */
    function new(string $serviceId, ...$args): object
    {
        return $this->getContainer()->new($serviceId, ...$args);
    }

    public function create(string $serviceId, ...$args): object
    {
        return $this->new($serviceId, ...$args);
    }

    /**
     * {@inheritDoc}
     */
    public function __invoke(string $serviceId, ...$args)
    {
        return $this->new($serviceId, ...$args);
    }

    /**
     * Lazy
     *
     * @param string $serviceId The service identifier
     * @param mixed  ...$args   The service arguments
     * 
     * @return \Closure The callable service factory
     */
    function getFactory(string $serviceId, ...$args)
    {
        return \Closure::bind(
            function () use ($serviceId, $args) {
                return $this->new($serviceId, ...$args);
            },
            $this
        );
    }

    /**
     * Get the container
     *
     * @return CtlContainerInterface The container instance
     */
    protected function getContainer(): CtlContainerInterface
    {
        return $this->container;
    }
}