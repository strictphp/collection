<?php
declare(strict_types=1);

namespace Strict\Collection\Vector\Scalar;

use Strict\Collection\Vector\VectorAbstract;
// use iterable;


/**
 * [Abstract Class] Base Class of Vector for iterable
 *
 * @author Showsay You <akizuki.c10.l65@gmail.com>
 * @copyright 2018. All Rights Reserved.
 * @package strictphp/collection
 * @since v1.0.0
 */
abstract class BaseVector_iterable
    extends VectorAbstract
{
    /**
     * Vector_iterable constructor.
     *
     * @param iterable[] ...$initializer
     */
    public function __construct(iterable ...$initializer)
    {
        parent::__construct($initializer);
    }

    /**
     * @return VectorIterator_iterable
     *
     * @deprecated
     * @internal
     */
    public function getIterator(): VectorIterator_iterable
    {
        return new VectorIterator_iterable(...$this->getVector());
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
     * @return iterable
     *
     * @deprecated
     * @internal
     */
    public function offsetGet($offset): iterable
    {
        return $this->argOffsetGet($offset);
    }

    /**
     * @param int|null $offset
     * @param iterable $value
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
     * @param iterable $value
     *
     * @internal
     */
    private function strictOffsetSet(?int $offset, iterable $value): void
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