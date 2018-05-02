<?php
declare(strict_types=1);

namespace Strict\Collection\Vector;

use ArrayIterator;
use Iterator;


/**
 * [Abstract Class] Vector Abstract
 *
 * @author Showsay You <akizuki.c10.l65@gmail.com>
 * @copyright 2018. All Rights Reserved.
 * @package strictphp/collection
 * @since v1.0.0
 *
 * @internal
 */
abstract class VectorIteratorAbstract
    implements Iterator
{
    private $iterator;

    protected function __construct(array $initializer)
    {
        $this->iterator = new ArrayIterator($initializer);
    }

    public function current()
    {
        return $this->iterator->current();
    }

    public function next(): void
    {
        $this->iterator->next();
    }

    public function key(): int
    {
        return $this->iterator->key();
    }

    public function valid(): bool
    {
        return $this->iterator->valid();
    }

    public function rewind(): void
    {
        $this->iterator->rewind();
    }
}