<?php
declare(strict_types=1);

namespace Strict\Collection\Vector\Scalar;

use Strict\Collection\Vector\VectorAbstract;
// use float;


abstract class BaseVector_float
    extends VectorAbstract
{
    /**
     * Vector_float constructor.
     *
     * @param float[] ...$initializer
     */
    public function __construct(float ...$initializer)
    {
        parent::__construct($initializer);
    }

    /**
     * @return VectorIterator_float
     *
     * @deprecated
     * @internal
     */
    public function getIterator(): VectorIterator_float
    {
        return new VectorIterator_float(...$this->getVector());
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
     * @return float
     *
     * @deprecated
     * @internal
     */
    public function offsetGet($offset): float
    {
        return $this->argOffsetGet($offset);
    }

    /**
     * @param int|null $offset
     * @param float $value
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
     * @param float $value
     *
     * @internal
     */
    private function strictOffsetSet(?int $offset, float $value): void
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