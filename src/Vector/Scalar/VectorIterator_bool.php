<?php
declare(strict_types=1);

namespace Strict\Collection\Vector\Scalar;

use Strict\Collection\Vector\VectorIteratorAbstract;
// use bool;


/**
 * [Class] Vector Iterator for bool
 *
 * @author Showsay You <akizuki.c10.l65@gmail.com>
 * @copyright 2018. All Rights Reserved.
 * @package strictphp/collection
 * @since v1.0.0
 *
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