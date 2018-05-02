<?php
declare(strict_types=1);

namespace Strict\Collection\Vector\Scalar;

use Strict\Collection\Vector\VectorAbstract;
// use string;


/**
 * [Abstract Class] Base Class of Vector for string
 *
 * @author Showsay You <akizuki.c10.l65@gmail.com>
 * @copyright 2018. All Rights Reserved.
 * @package strictphp/collection
 * @since v1.0.0
 */
abstract class BaseVector_string
    extends VectorAbstract
{
    /**
     * Vector_string constructor.
     *
     * @param string[] ...$initializer
     */
    public function __construct(string ...$initializer)
    {
        parent::__construct($initializer);
    }

    /**
     * @return VectorIterator_string
     *
     * @deprecated
     * @internal
     */
    public function getIterator(): VectorIterator_string
    {
        return new VectorIterator_string(...$this->getVector());
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
     * @return string
     *
     * @deprecated
     * @internal
     */
    public function offsetGet($offset): string
    {
        return $this->argOffsetGet($offset);
    }

    /**
     * @param int|null $offset
     * @param string $value
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
     * @param string $value
     *
     * @internal
     */
    private function strictOffsetSet(?int $offset, string $value): void
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