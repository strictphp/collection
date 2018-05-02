<?php
declare(strict_types=1);

namespace Strict\Collection\Vector\Scalar;

use Strict\Collection\Vector\VectorAbstract;
// use callable;


/**
 * [Abstract Class] Base Class of Vector for callable
 *
 * @author Showsay You <akizuki.c10.l65@gmail.com>
 * @copyright 2018. All Rights Reserved.
 * @package strictphp/collection
 * @since v1.0.0
 */
abstract class BaseVector_callable
    extends VectorAbstract
{
    /**
     * Vector_callable constructor.
     *
     * @param callable[] ...$initializer
     */
    public function __construct(callable ...$initializer)
    {
        parent::__construct($initializer);
    }

    /**
     * @return VectorIterator_callable
     *
     * @deprecated
     * @internal
     */
    public function getIterator(): VectorIterator_callable
    {
        return new VectorIterator_callable(...$this->getVector());
    }

    /**
     * @param int $offset
     * @return bool
     *
     * @deprecated
     * @internal
     */
    public function offsetExists($offset): bool
    {
        return $this->argOffsetExists($offset);
    }

    /**
     * @param int $offset
     * @return callable
     *
     * @deprecated
     * @internal
     */
    public function offsetGet($offset): callable
    {
        return $this->argOffsetGet($offset);
    }

    /**
     * @param int|null $offset
     * @param callable $value
     *
     * @deprecated
     * @internal
     */
    public function offsetSet($offset, $value): void
    {
        $this->strictOffsetSet($offset, $value);
    }

    /**
     * Add language-based type validation for offsetSet().
     *
     * @param int|null $offset
     * @param callable $value
     *
     * @internal
     */
    private function strictOffsetSet(?int $offset, callable $value): void
    {
        $this->argOffsetSet($offset, $value);
    }

    /**
     * @param int $offset
     *
     * @deprecated
     * @internal
     */
    public function offsetUnset($offset): void
    {
        $this->argOffsetUnset($offset);
    }
}