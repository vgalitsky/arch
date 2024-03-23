<?php
declare(strict_types=1);
namespace Cl\Context;

class ContextItem implements ContextItemInterface
{
    /**
     * The value to store
     *
     * @var mixed
     */
    protected mixed $value = null;

    /**
     * {@inheritDoc}
     */
    public function get(): mixed
    {
        return $this->value;
    }

    /**
     * {@inheritDoc}
     */
    public function set(mixed $value): void
    {
        $this->value = $value;
    }

    /**
     * {@inheritDoc}
     */
    public function empty(): bool
    {
        return empty($this->value);
    }
}