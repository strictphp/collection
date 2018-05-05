<?php
declare(strict_types=1);

namespace Strict\Collection\IntMap\Templates;

use stdClass;
use Strict\Collection\IntMap\IntMapAbstract;


/**
 * [Abstract Class] Base Class of Integer Map for stdClass
 *
 * @author Showsay You <akizuki.c10.l65@gmail.com>
 * @copyright 2018. All Rights Reserved.
 * @package strictphp/collection
 * @since v1.2.0
 */
abstract class BaseIntMap_stdClass
    extends IntMapAbstract
{
    /**
     * @return IntMapIterator_stdClass
     *
     * @deprecated
     * @internal
     */
    public function getIterator(): IntMapIterator_stdClass
    {
        return new IntMapIterator_stdClass($this->getMap());
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
     * @param int $offset
     * @param stdClass $value
     *
     * @deprecated
     * @internal
     */
    public function offsetSet($offset, $value)
    {
        $this->strictOffsetSet($offset, $value);
    }

    /**
     * @param int $offset
     * @param stdClass $value
     *
     */
    private function strictOffsetSet(int $offset, stdClass $value): void
    {
        $this->argOffsetSet($offset, $value);
    }
}