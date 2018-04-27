<?php
declare(strict_types=1);

namespace Strict\Collection\Vector\Scalar;

use Strict\Collection\Vector\VectorIteratorAbstract;
// use float;


/**
 * @internal
 */
class VectorIterator_float
    extends VectorIteratorAbstract
{
    public function __construct(float ...$initializer)
    {
        parent::__construct($initializer);
    }

    public function current(): float
    {
        return parent::current();
    }
}