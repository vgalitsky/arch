<?php
namespace Cl\Enum;

/**
 * Enum values trait
 */
interface EnumFromNameInterface
{
    /**
     * Enum value from name
     *
     * @return mixed
     */
    public static function fromName(string $name): mixed;
}