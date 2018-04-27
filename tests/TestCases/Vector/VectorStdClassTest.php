<?php

namespace Strict\Collection\Tests\TestCases\Vector;

use OutOfBoundsException;
use PHPUnit\Framework\TestCase;
use Strict\Collection\Vector\Templates\Vector_stdClass;
use TypeError;


class VectorStdClassTest
    extends TestCase
{
    public function testCreate()
    {
        $vector = new Vector_stdClass((object)['gg' => 2]);
        $this->assertEquals(1, count($vector));

        $vector[] = (object)['gg' => 3];
        $this->assertEquals(2, count($vector));

        $this->expectException(TypeError::class);
        $vector[] = 3;
    }

    public function testRead()
    {
        $vector = new Vector_stdClass((object)['gg' => 2]);
        $this->assertEquals(2, $vector[0]->gg);
    }

    public function testUpdate()
    {
        $vector    = new Vector_stdClass((object)['gg' => 2]);
        $vector[0] = (object)['gg' => 3];
        $this->assertEquals(3, $vector[0]->gg);

        $this->expectException(TypeError::class);
        $vector[0] = 3;
    }

    public function testDelete()
    {
        $vector = new Vector_stdClass((object)['id' => 1], (object)['id' => 2], (object)['id' => 3]);
        $this->assertEquals(3, count($vector));

        unset($vector[1]);

        $this->assertEquals(1, $vector[0]->id);
        $this->assertEquals(3, $vector[1]->id);
    }

    public function testInvalidRead()
    {
        $vector = new Vector_stdClass((object)['gg' => 2]);

        $this->expectException(OutOfBoundsException::class);
        $vector[3];
    }

    public function testInvalidUpdate()
    {
        $vector = new Vector_stdClass((object)['gg' => 2]);

        $this->expectException(OutOfBoundsException::class);
        $vector[3] = (object)['gg' => 3];
    }

    public function testInvalidDelete()
    {
        $vector = new Vector_stdClass((object)['gg' => 2]);

        $this->expectException(OutOfBoundsException::class);
        unset($vector[3]);
    }

    public function testTypeErrorRead()
    {
        $vector = new Vector_stdClass((object)['gg' => 2]);

        $this->expectException(TypeError::class);
        $vector['aa'];
    }

    public function testTypeErrorUpdate()
    {
        $vector = new Vector_stdClass((object)['gg' => 2]);

        $this->expectException(TypeError::class);
        $vector[[]] = (object)[];
    }

    public function testTypeErrorDelete()
    {
        $vector = new Vector_stdClass((object)['gg' => 2]);

        $this->expectException(TypeError::class);
        unset($vector[33.4]);
    }

    public function testCount()
    {
        $vector = new Vector_stdClass;
        $this->assertTrue($vector->empty());
        $this->assertEquals(0, $vector->size());
        $this->assertEquals(0, count($vector));

        $vector[] = (object)[];
        $this->assertFalse($vector->empty());
        $this->assertEquals(1, $vector->size());
        $this->assertEquals(1, count($vector));
    }

    public function testIteration()
    {
        $vector = new Vector_stdClass(
            (object)['id' => 1],
            (object)['id' => 2],
            (object)['id' => 3]
        );

        $i = 0;
        foreach ($vector as $key => $value) {
            $this->assertEquals($i, $key);
            $this->assertEquals(++$i, $value->id);
        }
    }
}