<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use src\Battery;

final class BatteryTest extends TestCase
{
    public $battery;

    /**
     * Instantiate the object for all the tests
     *
     * @return void
     */
    public function setUp(): void {
      $this->battery = new Battery;
    }

    /**
     * To test if default battery percentage is returned as 100
     *
     * @return void
     */
    public function testGetBatteryPercentage(): void
    {
      $this->assertEquals(
        100,
        $this->battery->getBatteryPercentage()
      );
      $this->assertIsInt(
        $this->battery->getBatteryPercentage()
      );
    }

    /**
     * To test that after started cleaning the apartment battery is reduced by 1
     *
     * @return void
     */
    public function testStartBatteryUsage(): void
    {
      $this->battery->startBatteryUsage();
      $this->assertEquals(
        98,
        $this->battery->getBatteryPercentage()
      );
    }
}
