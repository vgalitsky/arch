<?php
namespace Cl\Enum;

/**
 * Enum Json Serializable Interface
 */
interface EnumJsonSerializableInterface extends EnumArraySerializableInterface
{
    /**
     * JSON serialize
     *
     * @return string
     */
    public static function jsonSerialize(): string;
}