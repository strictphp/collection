<?php

namespace Strict\Collection\Tests\TestCases\Vector;

use OutOfBoundsException;
use PHPUnit\Framework\TestCase;
use Strict\Collection\Vector\Scalar\Vector_int;
use TypeError;


class VectorIntTest
    extends TestCase
{
    public function testCreate()
    {
        $vector = new Vector_int(3);
        $this->assertEquals(1, count($vector));

        $vector[] = 4;
        $this->assertEquals(2, count($vector));

        $this->expectException(TypeError::class);
        $vector[] = 2.25;
    }

    public function testRead()
    {
        $vector = new Vector_int(3);
        $this->assertEquals(3, $vector[0]);
    }

    public function testUpdate()
    {
        $vector    = new Vector_int(2);
        $vector[0] = 3;
        $this->assertEquals(3, $vector[0]);

        $this->expectException(TypeError::class);
        $vector[0] = '0';
    }

    public function testDelete()
    {
        $vector = new Vector_int(1, 2, 3);
        $this->assertEquals(3, count($vector));

        unset($vector[1]);

        $this->assertEquals(1, $vector[0]);
        $this->assertEquals(3, $vector[1]);
    }

    public function testInvalidRead()
    {
        $vector = new Vector_int(3);

        $this->expectException(OutOfBoundsException::class);
        $vector[3];
    }

    public function testInvalidUpdate()
    {
        $vector = new Vector_int(3);

        $this->expectException(OutOfBoundsException::class);
        $vector[3] = 4;
    }

    public function testInvalidDelete()
    {
        $vector = new Vector_int(3);

        $this->expectException(OutOfBoundsException::class);
        unset($vector[3]);
    }

    public function testTypeErrorRead()
    {
        $vector = new Vector_int(3);

        $this->expectException(TypeError::class);
        $vector['aa'];
    }

    public function testTypeErrorUpdate()
    {
        $vector = new Vector_int(3);

        $this->expectException(TypeError::class);
        $vector[[]] = 4;
    }

    public function testTypeErrorDelete()
    {
        $vector = new Vector_int(3);

        $this->expectException(TypeError::class);
        unset($vector[33.4]);
    }

    public function testCount()
    {
        $vector = new Vector_int;
        $this->assertTrue($vector->empty());
        $this->assertEquals(0, $vector->size());
        $this->assertEquals(0, count($vector));

        $vector[] = 3;
        $this->assertFalse($vector->empty());
        $this->assertEquals(1, $vector->size());
        $this->assertEquals(1, count($vector));
    }

    public function testIteration()
    {
        $vector = new Vector_int(
            1,
            2,
            3
        );

        $i = 0;
        foreach ($vector as $key => $value) {
            $this->assertEquals($i, $key);
            $this->assertEquals(++$i, $value);
        }
    }
}