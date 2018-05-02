<?php

namespace Strict\Collection\Vector\Templates;


/**
 * [Class] Template Directory Teller
 *
 * @author Showsay You <akizuki.c10.l65@gmail.com>
 * @copyright 2018. All Rights Reserved.
 * @package strictphp/collection
 * @since v1.0.0
 */
class TemplateDirectoryTeller
{
    public static function getDirectory(): string
    {
        return __DIR__;
    }
}