<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require './src/HardFloor.php';

final class HardFloorTest extends TestCase
{
  /**
   * To test if areaCoveredForCleaning is an integer value
   *
   * @return void
   */
  public function testGetAreaCoveredForCleaning(): void
  {
    $floor = new HardFloor(80);
    $this->assertIsInt(
      $floor->getAreaCoveredForCleaning()
    );
  }
}
