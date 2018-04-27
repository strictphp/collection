<?php
declare(strict_types=1);

namespace Strict\Collection\Vector\Scalar;

use Strict\Collection\Vector\VectorIteratorAbstract;
// use string;


/**
 * @internal
 */
class VectorIterator_string
    extends VectorIteratorAbstract
{
    public function __construct(string ...$initializer)
    {
        parent::__construct($initializer);
    }

    public function current(): string
    {
        return parent::current();
    }
}