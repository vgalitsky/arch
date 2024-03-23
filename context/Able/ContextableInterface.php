<?php
declare(strict_types=1);
namespace Cl\Context\Able;

use Cl\Context\ContextInterface;

interface ContextableInterface
{
    /**
     * Set the context
     *
     * @return void
     */
    function setContext(ContextInterface $context);

    /**
     * Get the context
     *
     * @return ContextInterface
     */
    function getContext(): ContextInterface;
}