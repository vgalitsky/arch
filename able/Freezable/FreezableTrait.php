<?php
namespace Cl\Able\Freezable;


/**
 * Freezable aware trait implementation
 */
trait FreezableTrait
{

    /**
     * Frozen flag
     *
     * @var bool
     */
    protected $___frozen = false;
    
    /**
     * {@inheritDoc}
     */
    function freeze(): void
    {
        $this->___frozen = true;
    }

    /**
     * {@inheritDoc}
     */
    function unfreeze(): void
    {
        $this->___frozen = false;
    }

    /**
     * {@inheritDoc}
     */
    function isFrozen(): bool
    {
        return $this->___frozen;
    }
}