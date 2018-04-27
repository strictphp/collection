<?php
declare(strict_types=1);

namespace Strict\Collection\Vector\Scalar;

use Strict\Collection\Vector\VectorIteratorAbstract;
// use bool;


/**
 * @internal
 */
class VectorIterator_bool
    extends VectorIteratorAbstract
{
    public function __construct(bool ...$initializer)
    {
        parent::__construct($initializer);
    }

    public function current(): bool
    {
        return parent::current();
    }
}