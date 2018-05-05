<?php
declare(strict_types=1);

namespace Strict\Collection\IntMap;

use ArrayAccess;
use Countable;
use IteratorAggregate;
use OutOfBoundsException;


/**
 * [Abstract Class] Integer Map Abstract
 *
 * @author Showsay You <akizuki.c10.l65@gmail.com>
 * @copyright 2018. All Rights Reserved.
 * @package strictphp/collection
 * @since v1.2.0
 */
abstract class IntMapAbstract
    implements ArrayAccess, Countable, IteratorAggregate
{
    /** @var array */
    private $map = [];

    /**
     * @return array
     *
     * @internal
     */
    protected function getMap(): array
    {
        return $this->map;
    }

    /**
     * @param int $offset
     * @return bool
     *
     * @internal
     */
    protected function argOffsetExists(int $offset): bool
    {
        return isset($this->map[$offset]);
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
        return $this->map[$offset];
    }

    /**
     * @param int $offset
     * @param mixed $value
     *
     * @internal
     */
    protected function argOffsetSet(int $offset, $value): void
    {
        $this->map[$offset] = $value;
    }

    /**
     * @param mixed $offset
     *
     * @deprecated
     * @internal
     */
    public function offsetUnset($offset): void
    {
        $this->argOffsetUnset($offset);
    }

    /**
     * @param int $offset
     *
     * @internal
     */
    protected function argOffsetUnset(int $offset): void
    {
        $this->existsOrFail($offset);
        unset($this->map[$offset]);
    }

    /**
     * @param int $offset
     */
    private function existsOrFail(int $offset): void
    {
        if (!$this->argOffsetExists($offset)) {
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
        return count($this->map);
    }

    /**
     * @return bool
     */
    public function empty(): bool
    {
        return empty($this->map);
    }

    /**
     * Acquire a copy of vector in array form.
     *
     * @return array
     */
    public function getArray(): array
    {
        return $this->getMap();
    }
}