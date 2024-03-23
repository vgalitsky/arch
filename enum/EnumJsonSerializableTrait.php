<?php
namespace Cl\Enum;

/**
 * Enum Json Serializable Trait
 */
trait EnumJsonSerializableTrait
{
    use EnumArraySerializableTrait;
    /**
     * JSON serialize
     *
     * @return string
     */
    public static function jsonSerialize(int|null $flags = 0, int|null $depth = 512): string
    {
        return json_encode(static::array(), $flags, $depth);
    }
}