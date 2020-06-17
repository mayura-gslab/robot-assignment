<?php
require_once("Apartment.php");
require_once("Battery.php");

class CarpetFloor extends Apartment {

  const TIME_BELOW_BATTERY_CAPACITY = 40; // As battery capacity is 60 seconds and intializing it to 100 in battey class.
  const INTERVAL_TIME = 1000; // To set the time interval of 1000 ms i.e 1 sec for tracking the clean up process
  public $area = 0; // The area argument passed by the user
  public $count = 0;

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
    echo "The robot is cleaning the apartment...". PHP_EOL;
    Utility::setInterval(function() {
      if ($this->battery->getBatteryPercentage() <= CarpetFloor::TIME_BELOW_BATTERY_CAPACITY) {
        $this->chargeTheBattery();
      }
      if ($this->getAreaCoveredForCleaning() >= $this->area) {
        echo "The clean up has been done! Ending the process!";
        exit;
      }
      if ($this->battery->isBatteryFullCharged) {
        if (Utility::isEvenNumber($this->count)) {
          $this->setAreaCoveredForCleaning($this->areaCoveredForCleaning++);
        }
        echo "The area covered till now is: ". $this->getAreaCoveredForCleaning()." m square. ";
        $this->battery->startCleaningTheApartment();
      }
      $this->count++;
    }, CarpetFloor::INTERVAL_TIME);
  }
}