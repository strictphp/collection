<?php
declare(strict_types=1);

namespace Strict\Collection\Vector;

use ArrayAccess;
use Countable;
use IteratorAggregate;
use OutOfBoundsException;


/**
 * [Abstract Class] Vector Abstract
 *
 * @author Showsay You <akizuki.c10.l65@gmail.com>
 * @copyright 2018. All Rights Reserved.
 * @package strictphp/collection
 * @since v1.0.0
 */
abstract class VectorAbstract
    implements ArrayAccess, Countable, IteratorAggregate
{
    /** @var array */
    private $vector;

    /**
     * VectorAbstract constructor.
     *
     * @param array $initializer
     */
    protected function __construct(array $initializer)
    {
        $this->vector = $initializer;
    }

    /**
     * @return array
     *
     * @internal
     */
    protected function getVector(): array
    {
        return $this->vector;
    }

    /**
     * @param int $offset
     * @return bool
     *
     * @internal
     */
    protected function argOffsetExists(int $offset): bool
    {
        return isset($this->vector[$offset]);
    }

    /**
     * @param int $offset
     * @return mixed
     *
     * @internal
     */
    protected function argOffsetGet(int $offset)
    {
        $this->existsOrFail($offset);
        return $this->vector[$offset];
    }

    /**
     * @param int|null $offset
     * @param mixed $value
     *
     * @internal
     */
    protected function argOffsetSet(?int $offset, $value): void
    {
        if (is_null($offset)) {
            $this->vector[] = $value;
            return;
        }

        $this->existsOrFail($offset);
        $this->vector[$offset] = $value;
    }

    /**
     * @param int $offset
     *
     * @internal
     */
    protected function argOffsetUnset(int $offset): void
    {
        $this->existsOrFail($offset);
        unset($this->vector[$offset]);
        $this->vector = array_values($this->vector);
    }

    /**
     * @param int $offset
     */
    private function existsOrFail(int $offset): void
    {
        if (!isset($this->vector[$offset])) {
            throw new OutOfBoundsException('Invalid key for operator[].');
        }
    }

    /**
     * @return int
     *
     * @deprecated
     * @internal
     */
    public function count(): int
    {
        return $this->size();
    }

    /**
     * @return int
     */
    public function size(): int
    {
        return count($this->vector);
    }

    /**
     * @return bool
     */
    public function empty(): bool
    {
        return empty($this->vector);
    }

    /**
     * Acquire a copy of vector in array form.
     *
     * @return array
     */
    public function getArray(): array
    {
        return $this->getVector();
    }

    /**
     * @return mixed
     *
     * @internal
     */
    protected function rawShift()
    {
        if (count($this) === 0) {
            throw new OutOfBoundsException('Can not shift an empty vector.');
        }
        return array_shift($this->vector);
    }

    /**
     * @return mixed
     *
     * @internal
     */
    protected function rawPop()
    {
        if (count($this) === 0) {
            throw new OutOfBoundsException('Can not pop an empty vector.');
        }
        return array_pop($this->vector);
    }
}