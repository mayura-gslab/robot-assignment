<?php
namespace src;
use src\Apartment;
use src\Utility;

class CarpetFloor extends Floor implements Apartment {

  const TIME_BELOW_BATTERY_CAPACITY = 40; // As battery capacity is 60 seconds and intializing it to 100 in battey class.
  private $count = 0;

  public function __construct(int $areaValue) {
    parent::__construct($areaValue);
  }

  /**
   * To initiate the process for cleaning the apartment
   *
   * @return void
   */
  public function cleanTheApartment() {
    echo PHP_EOL. "The robot is cleaning the apartment, which has ". $this->getArea() ." m square carpet floor.". PHP_EOL. "The battery is fully charged now.". PHP_EOL.PHP_EOL;
    Utility::setInterval(function() {
      if ($this->getBatteryPercentage() <= Floor::BATTERY_EXHAUST_VALUE) {
        $this->chargeTheBattery();
      }
      if ($this->getAreaCoveredForCleaning() >= $this->getArea()) {
        echo "The clean up has been done! Ending the process!";
        exit;
      }
      if ($this->getIsBatteryFullCharged()) {
        if (Utility::isEvenNumber($this->count)) {
          $this->incrementAreaCoveredForCleaning();
        }
        echo "The area covered till now is: ". $this->getAreaCoveredForCleaning()." m square. ";
        $this->startBatteryUsage();
      }
      $this->count++;
    }, Floor::INTERVAL_TIME);
  }
}