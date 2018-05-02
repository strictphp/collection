<?php
declare(strict_types=1);

namespace Strict\Collection\Vector\Scalar;

use Strict\Collection\Vector\VectorIteratorAbstract;
// use float;


/**
 * [Class] Vector Iterator for float
 *
 * @author Showsay You <akizuki.c10.l65@gmail.com>
 * @copyright 2018. All Rights Reserved.
 * @package strictphp/collection
 * @since v1.0.0
 *
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