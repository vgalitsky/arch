<?php
namespace Cl\Enum;

/**
 * Enum values trait
 */
trait EnumFromNameTrait
{
    /**
     * Enum value from name
     *
     * @return mixed
     */
    public static function fromName(string $name): mixed
    {
        
        return constant("self::$name");
    }
}