<?php
namespace Cl\Able\Proxiable;
use Cl\Able\Traitable\TraitableInterface;

/**
 * Proxiable interface
 */
interface ProxiableInterface extends TraitableInterface
{
    

    /**
     * Proxify self
     *
     * @param mixed ...$parameters 
     * 
     * @return ProxyInterface
     */
    public static function proxify(mixed ...$parameters): ProxyInterface;
}