<?php
declare(strict_types=1);
namespace Cl\Able\Generatorable;

trait GeneratorableTrait 
{
    /**
     * @implements GeneratoragbleInterface
     */

    /**
     * Creates a generator based on the provided value.
     *
     * @param mixed $yield The value to include in the generator.
     * 
     * @return \Generator
     */
    public static function yield(mixed $yield): \Generator
    {
        /**
         * If the provided value is a generator, use the 'from' method for optimal generator creation.
         * Otherwise, simply include the provided value in the generator.
         */
        if ($yield instanceof \Generator || is_iterable($yield)) {
            yield from $yield;
        } else {
            yield $yield;
        }
    }
}