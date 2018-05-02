<?php
declare(strict_types=1);

namespace Strict\Collection\Vector\Scalar;

use Strict\Collection\Vector\VectorIteratorAbstract;
// use string;


/**
 * [Class] Vector Iterator for string
 *
 * @author Showsay You <akizuki.c10.l65@gmail.com>
 * @copyright 2018. All Rights Reserved.
 * @package strictphp/collection
 * @since v1.0.0
 *
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