<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require './src/CarpetFloor.php';

final class CarpetFloorTest extends TestCase
{
  /**
   * To test if areaCoveredForCleaning is an integer value
   *
   * @return void
   */
  public function testGetAreaCoveredForCleaning(): void
  {
    $floor = new CarpetFloor(80);
    $this->assertIsInt(
      $floor->getAreaCoveredForCleaning()
    );
  }
}
