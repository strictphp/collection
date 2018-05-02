<?php
declare(strict_types=1);

namespace Strict\Collection\Vector\Templates;

use Strict\Collection\Vector\VectorIteratorAbstract;
use stdClass;


/**
 * [Class] Vector Iterator for stdClass
 *
 * @author Showsay You <akizuki.c10.l65@gmail.com>
 * @copyright 2018. All Rights Reserved.
 * @package strictphp/collection
 * @since v1.0.0
 *
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