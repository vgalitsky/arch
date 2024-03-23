<?php
declare(strict_types=1);
namespace Cl\Able\Taggable;

trait TaggableTrait
{
    /**
     * A tags container
     *
     * @var array<string>
     */
    public array $___tags = [];

    /**
     * {@inheritDoc}
     */
    function addTag(string $tag)
    {
        $this->___tags[] = $tag;
    }

    /**
     * {@inheritDoc}
     */
    function getTags(): array
    {
        return $this->___tags;
    }

    /**
     * {@inheritDoc}
     */
    function removeTag(string $tag): bool
    {
        $key = array_search($tag, $this->___tags);

        if ($key !== false) {
            unset($this->___tags[$key]);
            return true;
        }

        return $key;
    }
}