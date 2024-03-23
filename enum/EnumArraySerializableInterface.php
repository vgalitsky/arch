<?php
namespace Cl\Enum;

/**
 * Enum ArraySerializable Interface
 */
interface EnumArraySerializableInterface extends EnumNamesInterface, EnumValuesInterface
{
    /**
     * Name => value array
     *
     * @return array
     */
    public static function array(): array;
}