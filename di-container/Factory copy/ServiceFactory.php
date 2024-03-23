<?php
namespace Ctl\Container\Factory;

use Psr\Container\ContainerInterface;
use Ctl\Container\ContainerInterface as CtlContainerInterface;

class ServiceFactory implements ServiceFactoryInterface
{

    /**
     * @var FactoryInterface|null The factory
     */
    protected ?FactoryInterface $factory = null;

    /**
     * @var string|null The service identifier
     */
    protected ?string $serviceId = null;

    /**
     * @var array|null The service constructor parameters
     */
    protected ?array $args = [];

    /**
     * The constructor
     *
     * @param FactoryInterface $factory   The factory
     * @param string           $serviceId The service identifier
     * @param array            ...$args   The service constructor parameters
     */
    public function __construct(FactoryInterface $factory, string $serviceId, ...$args)
    {
        $this->factory = $factory;
        $this->serviceId = $serviceId;
        $this->args = $args;
    }

    /**
     * {@inheritDoc}
     */
    public function new(...$args)
    {
        return $this->factory
            ->new($this->serviceId, ...(!empty($args) ?? $this->args));
    }

    /**
     * {@inheritDoc}
     */
    public function ___invoke(...$args)
    {
        return $this->new(...($args));
    }

    /**
     * {@inheritDoc}
     */
    public function getFactory(...$args): \Closure
    {
        return \Closure::bind(
            function () use ($args) {
                return $this->new(...$args);
            },
            $this
        );
    }
}