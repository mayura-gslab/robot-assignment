<?php
namespace MyRobot\Floors;
use MyRobot\Battery;

class Floor {
  const BATTERY_EXHAUST_VALUE = 0;
  const INTERVAL_TIME = 1000; // To set the time interval of 1000 ms i.e 1 sec for tracking the clean up process
  private $areaCoveredForCleaning = 0; //To track how much area has been cleaned
  private $battery; // To maintain instance of a battery class
  private $area = 0; // The area argument passed by the user
  
  public function __construct($areaValue) {
    $this->battery = new Battery;
    $this->area = $areaValue; // The area argument passed by the user
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
   * To get the area arg value pased by the user
   *
   * @return integer
   */
  public function getArea() : int {
    return $this->area;
  }

  /**
   * To increment the value for areaCoveredForCleaning variable
   *
   * @return void
   */
  public function incrementAreaCoveredForCleaning() : void {
    $this->areaCoveredForCleaning++;
  }

  /**
   * To charge the battery
   *
   * @return void
   */
  public function chargeTheBattery() {
    return $this->battery->chargeTheBattery();
  }

  /**
   * To get the batter percentage
   *
   * @return integer
   */
  public function getBatteryPercentage() : int {
    return $this->battery->getBatteryPercentage();
  }

  /**
   * To get the value of variable isBatteryFullCharged
   *
   * @return boolean
   */
  public function getIsBatteryFullCharged() : bool {
    return $this->battery->getIsBatteryFullCharged();
  }

  /**
   * To indicaate class battery to start the battery usage
   *
   * @return void
   */
  public function startBatteryUsage() : void {
    $this->battery->startBatteryUsage();
  }
}