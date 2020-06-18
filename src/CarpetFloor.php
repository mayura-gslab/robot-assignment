<?php
namespace src;
use src\Apartment;
use src\Battery;
use src\Utility;

class CarpetFloor implements Apartment {

  const TIME_BELOW_BATTERY_CAPACITY = 40; // As battery capacity is 60 seconds and intializing it to 100 in battey class.
  const INTERVAL_TIME = 1000; // To set the time interval of 1000 ms i.e 1 sec for tracking the clean up process
  private $areaCoveredForCleaning = 0; //To track how much area has been cleaned
  private $battery; //To maintain instance of a battery class
  private $area = 0; // The area argument passed by the user
  private $count = 0;

  public function __construct(int $areaValue) {
    $this->battery = new Battery;
    $this->area = $areaValue;
  }

  /**
   * Setter method for areaCoveredForCleaning
   *
   * @param integer $areaCoveredForCleaning
   * @return void
   */
  public function setAreaCoveredForCleaning(int $areaCoveredForCleaning) {
    $this->$areaCoveredForCleaning = $areaCoveredForCleaning;
  }

  /**
   * The getter method for areaCoveredForCleaning
   *
   * @return integer
   */
  public function getAreaCoveredForCleaning() : int {
    return $this->areaCoveredForCleaning;
  }

  /**
   * To initiate the process for cleaning the apartment
   *
   * @return void
   */
  public function cleanTheApartment() {
    echo PHP_EOL. "The robot is cleaning the apartment...". PHP_EOL. "The battery is fully charged now.". PHP_EOL.PHP_EOL;
    Utility::setInterval(function() {
      if ($this->battery->getBatteryPercentage() <= CarpetFloor::TIME_BELOW_BATTERY_CAPACITY) {
        $this->chargeTheBattery();
      }
      if ($this->getAreaCoveredForCleaning() >= $this->area) {
        echo "The clean up has been done! Ending the process!";
        exit;
      }
      if ($this->battery->getIsBatteryFullCharged()) {
        if (Utility::isEvenNumber($this->count)) {
          $this->setAreaCoveredForCleaning($this->areaCoveredForCleaning++);
        }
        echo "The area covered till now is: ". $this->getAreaCoveredForCleaning()." m square. ";
        $this->battery->startBatteryUsage();
      }
      $this->count++;
    }, CarpetFloor::INTERVAL_TIME);
  }

  /**
   * To charge the battery
   *
   * @return void
   */
  public function chargeTheBattery() {
    return $this->battery->chargeTheBattery();
  }
}