<?php
declare(strict_types=1);
namespace Cl\Coroutine;

interface TaskInterface
{
    const STATUS_PENDING = 0;
    const STATUS_PROCESSING = 1;
    const STATUS_FINISHED = 2;

    /**
     * Run the task, either initiating it or resuming its execution.
     *
     * @return mixed The result of the coroutine's execution.
     */
    function run();

    /**
     * Get the coroutine associated with the task.
     *
     * @return \Generator The coroutine generator.
     */
    function getCoroutine(): \Generator;

    /**
     * Get the task ID.
     *
     * @return int The task ID.
     */
    function getTaskId(): int;

    /**
     * Get the current status of the task.
     *
     * @return int The task status.
     */
    function getStatus(): int;
    
    /**
     * Check if the task has finished processing.
     *
     * @return bool True if the task has finished, false otherwise.
     */
    function isFinished(): bool;

    /**
     * Get the value to be sent to the coroutine on the next resume.
     *
     * @return mixed|null The send value.
     */
    function getSendValue(): mixed;

}