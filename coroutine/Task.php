<?php
declare(strict_types=1);
namespace Cl\Coroutine;

use Cl\Able\Initable\InitableInterface;
use Cl\Able\Resettable\ResettableInterface;
use Cl\Coroutine\Exception\InvalidTaskStatusException;
use Cl\Coroutine\Exception\TaskCoroutineTypeError;
use Cl\Generator\Generator;
use Cl\Invoke\InvokerGenerator;


/**
 * Class Task
 *
 * Represents a task in the cooperative multitasking system.
 */
class Task implements TaskInterface, ResettableInterface
{
    use TaskTrait;

    private int $status = self::STATUS_PENDING;
    //private $coroutine; 
    /**
     * Task constructor.
     *
     * @param int                 $taskId    The unique identifier for the task.
     * @param callable|\Generator $coroutine The coroutine function to execute.
     * @param array               $arguments Additional arguments to pass to the coroutine.
     */
    public function __construct(private $taskId, private mixed $coroutine, private ?array $arguments = [], private mixed $sendValue= null)
    {
        $this->setStatus(static::STATUS_PENDING);
        $this->generatifyCoroutine();
    }

    /**
     * Convert the task coroutine into a generator if needed.
     *
     * @throws TaskCoroutineTypeError If the coroutine is not a \Generator or callable.
     */
    public function generatifyCoroutine(): void
    {
        if (!$this->coroutine instanceof \Generator && !is_callable($this->coroutine)) {
            throw new TaskCoroutineTypeError(
                sprintf('Task coroutine must be type of \Generator, Callable or \Closure, %s was given', get_debug_type($this->coroutine))
            );
        }
        // Invoke the InvokerGenerator to ensure the coroutine is a generator
        $this->coroutine = InvokerGenerator::invoke(callable: $this->coroutine, arguments: $this->arguments);
    }

    /**
     * Set the status of the task.
     *
     * @param int $status The new status to set.
     * 
     * @throws \Exception If an invalid status is provided.
     */
    public function setStatus($status): void
    {
        if (!in_array($status, [static::STATUS_PENDING, static::STATUS_PROCESSING, static::STATUS_FINISHED])) {
            throw new InvalidTaskStatusException(sprintf('Invalid status: %s', (string)$status));
        }
        $this->status = $status;
    }

    /**
     * Set the value to be sent to the coroutine on the next resume.
     *
     * @param mixed $sendValue The value to send.
     * 
     * @return void
     */
    public function setSendValue($sendValue): void
    {
        $this->sendValue = $sendValue;
    }

    /**
     * Reset the task
     *
     * @return void
     */
    public function reset(): void
    {
        $this->getCoroutine()->rewind();
    }


}