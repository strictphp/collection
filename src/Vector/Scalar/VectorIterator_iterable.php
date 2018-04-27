<?php
declare(strict_types=1);

namespace Strict\Collection\Vector\Scalar;

use Strict\Collection\Vector\VectorIteratorAbstract;
// use iterable;


/**
 * @internal
 */
class VectorIterator_iterable
    extends VectorIteratorAbstract
{
    public function __construct(iterable ...$initializer)
    {
        parent::__construct($initializer);
    }

    public function current(): iterable
    {
        return parent::current();
    }
}