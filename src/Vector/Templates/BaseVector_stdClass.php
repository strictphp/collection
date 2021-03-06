<?php
declare(strict_types=1);

namespace Strict\Collection\Vector\Templates;

use Strict\Collection\Vector\VectorAbstract;
use stdClass;


/**
 * [Abstract Class] Base Class of Vector for stdClass
 *
 * @author Showsay You <akizuki.c10.l65@gmail.com>
 * @copyright 2018. All Rights Reserved.
 * @package strictphp/collection
 * @since v1.0.0
 */
abstract class BaseVector_stdClass
    extends VectorAbstract
{
    /**
     * Vector_stdClass constructor.
     *
     * @param stdClass ...$initializer
     */
    public function __construct(stdClass ...$initializer)
    {
        parent::__construct($initializer);
    }

    /**
     * @return VectorIterator_stdClass
     *
     * @deprecated
     * @internal
     */
    public function getIterator(): VectorIterator_stdClass
    {
        return new VectorIterator_stdClass(...$this->getVector());
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
     * @return stdClass
     *
     * @deprecated
     * @internal
     */
    public function offsetGet($offset): stdClass
    {
        return $this->argOffsetGet($offset);
    }

    /**
     * @param int|null $offset
     * @param stdClass $value
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
     * @param stdClass $value
     *
     * @internal
     */
    private function strictOffsetSet(?int $offset, stdClass $value): void
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

    /**
     * @return stdClass
     */
    public function shift(): stdClass
    {
        return $this->rawShift();
    }

    /**
     * @return stdClass
     */
    public function pop(): stdClass
    {
        return $this->rawPop();
    }
}