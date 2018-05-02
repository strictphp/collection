<?php
declare(strict_types=1);

namespace Strict\Collection\Vector\Scalar;

use Strict\Collection\Vector\VectorIteratorAbstract;
// use iterable;


/**
 * [Class] Vector Iterator for iterable
 *
 * @author Showsay You <akizuki.c10.l65@gmail.com>
 * @copyright 2018. All Rights Reserved.
 * @package strictphp/collection
 * @since v1.0.0
 *
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