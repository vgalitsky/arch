<?php
declare(strict_types=1);
namespace Cl\Context;
use Cl\Context\Exception\NotFoundException;


class Context implements ContextInterface
{
    protected array $container = [];

    public function attach(string $name, $value): void
    {
        $this->container[$name] = $value;
    }

    public function get(string $name, $throwable = false)
    {
        if ($this->has($name)) {
            return $this->container[$name];
        }
        if ($throwable) {
            throw new NotFoundException(sprintf(_("Context with name %s not found"), $name));
        }
        return null;
    }

    public function getAll($preserve_keys = false): iterable
    {
        foreach ($this->container as $name => $value) {

            if ($preserve_keys) {
                yield $value;
            } else {
                yield $name => $value;
            }
        }
    }

    public function has(string $name): bool
    {
        return !empty($this->container[$name]);
    }
}
