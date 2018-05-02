<?php
declare(strict_types=1);

namespace Strict\Collection\Vector\Scalar;

use Strict\Collection\Vector\VectorAbstract;
// use int;


/**
 * [Abstract Class] Base Class of Vector for int
 *
 * @author Showsay You <akizuki.c10.l65@gmail.com>
 * @copyright 2018. All Rights Reserved.
 * @package strictphp/collection
 * @since v1.0.0
 */
abstract class BaseVector_int
    extends VectorAbstract
{
    /**
     * Vector_int constructor.
     *
     * @param int[] ...$initializer
     */
    public function __construct(int ...$initializer)
    {
        parent::__construct($initializer);
    }

    /**
     * @return VectorIterator_int
     *
     * @deprecated
     * @internal
     */
    public function getIterator(): VectorIterator_int
    {
        return new VectorIterator_int(...$this->getVector());
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
     * @return int
     *
     * @deprecated
     * @internal
     */
    public function offsetGet($offset): int
    {
        return $this->argOffsetGet($offset);
    }

    /**
     * @param int|null $offset
     * @param int $value
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
     * @param int $value
     *
     * @internal
     */
    private function strictOffsetSet(?int $offset, int $value): void
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