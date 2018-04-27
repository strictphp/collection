<?php
declare(strict_types=1);

namespace Strict\Collection\Vector\Scalar;

use Strict\Collection\Vector\VectorAbstract;
// use bool;


abstract class BaseVector_bool
    extends VectorAbstract
{
    /**
     * Vector_bool constructor.
     *
     * @param bool[] ...$initializer
     */
    public function __construct(bool ...$initializer)
    {
        parent::__construct($initializer);
    }

    /**
     * @return VectorIterator_bool
     *
     * @deprecated
     * @internal
     */
    public function getIterator(): VectorIterator_bool
    {
        return new VectorIterator_bool(...$this->getVector());
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
     * @return bool
     *
     * @deprecated
     * @internal
     */
    public function offsetGet($offset): bool
    {
        return $this->argOffsetGet($offset);
    }

    /**
     * @param int|null $offset
     * @param bool $value
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
     * @param bool $value
     *
     * @internal
     */
    private function strictOffsetSet(?int $offset, bool $value): void
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