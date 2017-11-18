<?php

namespace Box\Spout\Reader\Common\Entity;

class CellTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @return void
     */
    public function testValidInstance()
    {
        $this->assertInstanceOf(Cell::class, new Cell('cell'));
    }

    /**
     * @return void
     */
    public function testCellTypeNumeric()
    {
        $this->assertTrue((new Cell(0))->isNumeric());
        $this->assertTrue((new Cell(1))->isNumeric());
    }

    /**
     * @return void
     */
    public function testCellTypeString()
    {
        $this->assertTrue((new Cell('String!'))->isString());
    }

    /**
     * @return void
     */
    public function testCellTypeEmptyString()
    {
        $this->assertTrue((new Cell(''))->isEmpty());
    }

    /**
     * @return void
     */
    public function testCellTypeEmptyNull()
    {
        $this->assertTrue((new Cell(null))->isEmpty());
    }

    /**
     * @return void
     */
    public function testCellTypeBool()
    {
        $this->assertTrue((new Cell(true))->isBoolean());
        $this->assertTrue((new Cell(false))->isBoolean());
    }

    /**
     * @return void
     */
    public function testCellTypeError()
    {
        $this->assertTrue((new Cell([]))->isError());
    }
}
