<?php
declare(strict_types=1);
namespace Cl\Context\Able;

use Cl\Context\ContextInterface;

trait ContextableTrait
{
 
    /**
     * The context 
     */
    protected ContextInterface $___context = null;

    /**
     * Get the context
     * 
     * @param ContextInterface $context 
     */
    public function setContext(ContextInterface $context): void
    {
        $this->___context = $context;
    }

    /**
     * Get the context
     * 
     * @return ContextInterface
     */
    public function getContext(): ContextInterface
    {
        return $this->___context;
    }

}