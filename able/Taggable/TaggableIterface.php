<?php
declare(strict_types=1);
namespace Cl\Able\Taggable;

use Doctrine\DBAL\ArrayParameterType;

interface TaggableInterface
{
    /**
     * Add a tag
     *
     * @param string $tag The tag string
     * 
     * @return void
     */
    function addTag(string $tag);

    /**
     * Get a tags
     *
     * @return array<string> An array of tags
     */
    function getTags(): array;

    /**
     * Remove the tag
     *
     * @param string $tag The tag string
     * 
     * @return bool True if removed succcessfully or False otherwise
     */
    function removeTag(string $tag): bool;
}