<?php
declare(strict_types=1);

namespace Strict\Collection\Vector\Scalar;

use Strict\Collection\Vector\VectorIteratorAbstract;
// use int;


/**
 * @internal
 */
class VectorIterator_int
    extends VectorIteratorAbstract
{
    public function __construct(int ...$initializer)
    {
        parent::__construct($initializer);
    }

    public function current(): int
    {
        return parent::current();
    }
}