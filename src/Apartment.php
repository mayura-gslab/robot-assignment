<?php
  abstract class Apartment {

    public $areaCoveredForCleaning = 0; //To track how much area has been cleaned
    public $battery; //To maintain instance of a battery class

    abstract function cleanTheApartment();

    /**
     * To charge the battery
     *
     * @return void
     */
    public function chargeTheBattery() {
      return $this->battery->chargeTheBattery();
    }
  }