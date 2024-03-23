<?php
declare(strict_types=1);
namespace Cl\Coroutine;

use Cl\Coroutine\Exception\TaskAlreadyFinishedException;

trait TaskTrait
{
    /**
     *{@inheritDoc}
     */
    public function run()
    {
        $result = null;

        if ($this->isFinished()) {
            throw new TaskAlreadyFinishedException(sprintf('The task ID:%s was already finished', $this->getTaskId()));
        }

        if (static::STATUS_PENDING === $this->getStatus()) {
            $result = $this->getCoroutine()->current();
            $this->setStatus(static::STATUS_PROCESSING);
        } else {
            $result = $this->getCoroutine()->send($this->getSendValue());
            $this->setSendValue(null);
        }
        
        if ($this->isFinished()) {
            $this->setStatus(self::STATUS_FINISHED);
        };
        return $result;
    }

    /**
     * {@inheritDoc}
     */
    public function getCoroutine(): \Generator
    {
        return $this->coroutine;
    }

    /**
     * {@inheritDoc}
     */
    public function getTaskId(): int
    {
        return $this->taskId;
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * {@inheritDoc}
     */
    public function isFinished(): bool
    {
        $this->getCoroutine()->valid();
        return !$this->getCoroutine()->valid();
    }

    /**
     * {@inheritDoc}
     */
    public function getSendValue(): mixed
    {
        return $this->sendValue;
    }
}