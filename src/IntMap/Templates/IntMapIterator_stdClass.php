<?php
declare(strict_types=1);

namespace Strict\Collection\IntMap\Templates;

use Strict\Collection\IntMap\IntMapIteratorAbstract;
use stdClass;


/**
 * [Class] Integer Map Iterator for stdClass
 *
 * @author Showsay You <akizuki.c10.l65@gmail.com>
 * @copyright 2018. All Rights Reserved.
 * @package strictphp/collection
 * @since v1.2.0
 *
 * @internal
 */
class IntMapIterator_stdClass
    extends IntMapIteratorAbstract
{
    public function current(): stdClass
    {
        return parent::current();
    }
}