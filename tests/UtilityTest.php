<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class UtilityTest extends TestCase
{
    public $args = [];

    public function setUp() : void
    {
      $this->args = ["php robot.php", "clean", "--floor=hard", "--area=80"];
    }

    /**
     * To test the isEvenNumber method
     *
     * @return void
     */
    public function testIsEvenNumber(): void {
      $this->assertTrue(Utility::isEvenNumber(2));
    }

    /**
     * To test if the required arguments are passed
     *
     * @return void
     */
    public function testAreRequiredArgumentsPassed(): void {
      $this->assertTrue(Utility::areRequiredArgumentsPassed($this->args));
    }

    /**
     * To test if it return the floor type selected - boolean value
     *
     * @return void
     */
    public function testIsHardFloorSelected(): void {
      $this->assertTrue(Utility::isHardFloorSelected($this->args));
    }

    /**
     * To test if it returns the correct value of the argument area
     *
     * @return void
     */
    public function testGetTheValueOfArea(): void {
      $this->assertEquals(80, Utility::getTheValueOfArea($this->args));
    }
}
