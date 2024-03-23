<?php
declare(strict_types=1);
namespace Cl\Context;

interface ContextItemInterface
{
    
    /**
     * Get the context item value
     *
     * @return mixed
     */
    public function get(): mixed;

    /**
     * Set the context item value
     *
     * @param mixed $value 
     * 
     * @return void
     */
    public function set(mixed $value): void;

    /**
     * Check if value is empty
     *
     * @return bool
     */
    public function empty(): bool;

}