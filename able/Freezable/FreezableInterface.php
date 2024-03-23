<?php
namespace Cl\Able\Freezable;

interface FreezableInterface
{
    /**
     * Freeze
     *
     * @return void
     */
    function freeze(): void;

    /**
     * Unfreeze
     *
     * @return void
     */
    function unfreeze(): void;

    /**
     * Check is frozen
     *
     * @return boolean
     */
    function isFrozen(): bool;
}