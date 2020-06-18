<?php
namespace src;
class Battery {

  private $batteryPercentage = 100; // Initializing the battery to full.
  private $isBatteryFullCharged = true;
  const TIME_TO_CHARGE_THE_BATTERY = 30; // The time required for charging the battery to 100%

  public function getBatteryPercentage() : int {
    return $this->batteryPercentage;
  }

  public function getIsBatteryFullCharged() : bool {
    return $this->isBatteryFullCharged;
  }

  /**
   * To get the total time spent while using the battery for cleaning
   *
   * @return integer
   */
  public function getTotalTimeSpent() : int {
    return 100 - $this->batteryPercentage;
  }

  public function startBatteryUsage() {
      $this->batteryPercentage--;
      echo "The elapsed time: ".  $this->getTotalTimeSpent(). " second/s.". PHP_EOL;
  }

  /**
   * To Charge the battery funtionality
   *
   * @return void
   */
  public function chargeTheBattery() {
    echo PHP_EOL. "The battery has been used for 60 seconds.". PHP_EOL;
    echo "The time to charge the battery... It will take 30 seconds!". PHP_EOL;
    $this->batteryPercentage = 0;
    $this->isBatteryFullCharged = false;
    sleep(Battery::TIME_TO_CHARGE_THE_BATTERY); // As battery takes 30 seconds to charge fully
    $this->isBatteryFullCharged = true;
    $this->batteryPercentage = 100;
    echo "The battery is fully charged now...". PHP_EOL . PHP_EOL;
  }
}