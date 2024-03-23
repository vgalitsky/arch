<?php
declare(strict_types=1);
namespace Cl\Able\Disableable;

trait DisableableTrait
{
    /**
     * @var boolean Listener is enabled flag
     */
    protected bool $___enabled = true;

    /**
     * Check if the listener is enabled
     *
     * @return boolean
     */
    public function isEnabled(): bool
    {
        return $this->___enabled;
    }
    /**
     * Enabled the listener
     *
     * @return void
     */
    public function enable(): void
    {
        $this->___enabled = true;
    }

    /**
     * Disable the listener
     *
     * @return void
     */
    public function disable(): void
    {
        $this->___enabled = false;
    }

}