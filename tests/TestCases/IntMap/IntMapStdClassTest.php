<?php

namespace Strict\Collection\Tests\TestCases\IntMap;

use PHPUnit\Framework\TestCase;
use Strict\Collection\IntMap\Templates\IntMap_stdClass;
use TypeError;


class IntMapStdClassTest
    extends TestCase
{
    public function testCreate()
    {
        $map = new IntMap_stdClass;
        $this->assertEquals(0, count($map));

        $map[33 - 4] = (object)[];
        $this->assertEquals(1, count($map));

        $map[33 - 5] = (object)[];
        $this->assertEquals(2, count($map));

        $this->expectException(TypeError::class);
        $map[33 - 4] = 33.4;
    }

    public function testRead()
    {
        $map = new IntMap_stdClass;

        $map[33 - 4] = (object)['gg' => 3];
        $this->assertEquals(3, $map[33 - 4]->gg);
    }

    public function testUpdate()
    {
        $map = new IntMap_stdClass;

        $map[33 - 4] = (object)['gg' => 3];
        $this->assertEquals(3, $map[33 - 4]->gg);

        $map[33 - 4] = (object)['gg' => 4];
        $this->assertEquals(4, $map[33 - 4]->gg);
    }

    public function testDelete()
    {
        $map = new IntMap_stdClass;

        $map[3] = (object)['id' => 3];
        $map[4] = (object)['id' => 4];
        $map[5] = (object)['id' => 5];
        $this->assertEquals(3, count($map));

        unset($map[4]);
        $this->assertEquals(2, count($map));
        $this->assertEquals(3, $map[3]->id);
        $this->assertEquals(5, $map[5]->id);
    }

    public function testInvalidCreate()
    {
        $map = new IntMap_stdClass;

        $this->expectException(TypeError::class);
        $map[] = (object)[];
    }

    public function testTypeErrorRead()
    {
        $map = new IntMap_stdClass;

        $this->expectException(TypeError::class);
        $map['33.4'];
    }

    public function testTypeErrorUpdate()
    {
        $map = new IntMap_stdClass;

        $this->expectException(TypeError::class);
        $map[33.4] = (object)[];
    }

    public function testTypeErrorDelete()
    {
        $map = new IntMap_stdClass;

        $this->expectException(TypeError::class);
        unset($map[[]]);
    }

    public function testIteration()
    {
        $src = [
            33 => (object)['id' => 33],
            35 => (object)['id' => 35],
        ];

        $map = new IntMap_stdClass;

        foreach ($src as $id => $value) {
            $map[$id] = $value;
        }

        $b = 33;
        foreach ($map as $key => $value) {
            $this->assertEquals($b, $key);
            $this->assertEquals($b, $value->id);
            $b += 2;
        }
    }
}