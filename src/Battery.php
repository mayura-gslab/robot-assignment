<?php
namespace src;
class Battery {

  const TIME_TO_CHARGE_THE_BATTERY = 30; // (30 seconds) The time required for charging the battery to 100%
  const BATTERY_USAGE_PER_SEC = 1.6; // (1.6 %)As per given information, The robot has a battery big enough to clean for 60 seconds in one charge.
  const FULL_BATTERY_VALUE = 100;
  const EMPTY_BATTERY_VALUE = 0;
  private $batteryPercentage = 100; // Initializing the battery to full.
  private $isBatteryFullCharged = true;

  public function getBatteryPercentage() : int {
    return $this->batteryPercentage;
  }

  public function getIsBatteryFullCharged() : bool {
    return $this->isBatteryFullCharged;
  }

  public function startBatteryUsage() {
    $this->batteryPercentage = $this->batteryPercentage - Battery::BATTERY_USAGE_PER_SEC;
    echo "The Battery level is: ".  (int)$this->batteryPercentage. "%". PHP_EOL;
  }

  /**
   * To Charge the battery funtionality
   *
   * @return void
   */
  public function chargeTheBattery() {
    echo PHP_EOL. "The battery has been used for 60 seconds.". PHP_EOL;
    echo "The time to charge the battery... It will take 30 seconds!". PHP_EOL;
    $this->batteryPercentage = Battery::EMPTY_BATTERY_VALUE;
    $this->isBatteryFullCharged = false;
    sleep(Battery::TIME_TO_CHARGE_THE_BATTERY); // As battery takes 30 seconds to charge fully
    $this->isBatteryFullCharged = true;
    $this->batteryPercentage = Battery::FULL_BATTERY_VALUE;
    echo "The battery is fully charged now...". PHP_EOL . PHP_EOL;
  }
}