<?php
declare(strict_types=1);

namespace Strict\Collection\Vector\Scalar;

use Strict\Collection\Vector\VectorIteratorAbstract;
// use callable;


/**
 * @internal
 */
class VectorIterator_callable
    extends VectorIteratorAbstract
{
    public function __construct(callable ...$initializer)
    {
        parent::__construct($initializer);
    }

    public function current(): callable
    {
        return parent::current();
    }
}