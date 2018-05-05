<?php
declare(strict_types=1);

namespace Strict\Collection\IntMap;

use Strict\Collection\Vector\VectorIteratorAbstract;


/**
 * [Abstract Class] Integer Map Abstract
 *
 * @author Showsay You <akizuki.c10.l65@gmail.com>
 * @copyright 2018. All Rights Reserved.
 * @package strictphp/collection
 * @since v1.2.0
 *
 * @internal
 */
abstract class IntMapIteratorAbstract
    extends VectorIteratorAbstract
{
    public function __construct(array $initializer)
    {
        parent::__construct($initializer);
    }
}