<?php
declare(strict_types=1);

namespace Strict\Collection\Vector\Templates;

use Strict\Collection\Vector\VectorIteratorAbstract;
use stdClass;


/**
 * @internal
 */
class VectorIterator_stdClass
    extends VectorIteratorAbstract
{
    public function __construct(stdClass ...$initializer)
    {
        parent::__construct($initializer);
    }

    public function current(): stdClass
    {
        return parent::current();
    }
}