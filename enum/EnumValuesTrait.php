<?php
namespace Cl\Enum;

use UnitEnum;

/**
 * Enum values trait
 */
trait EnumValuesTrait
{
    /**
     * Enum values array
     *
     * @return array
     */
    public static function values(): array
    {
        return array_map(fn($enum) => property_exists($enum, 'value') ? $enum->value : $enum->name, static::cases());
    }
}