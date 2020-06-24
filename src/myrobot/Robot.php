<?php
  namespace MyRobot;
  use MyRobot\Floors\CarpetFloor;
  use MyRobot\Floors\HardFloor;
  use MyRobot\Helper\Utility;

  class Robot {
    public function clean($floor, $area) {
      // To check if the required arguments are passed
      if (Utility::areRequiredArgumentsPassed($floor, $area)) {
      
        // To validate given values for te arguments
        if (!Utility::validateArguments($floor, $area)) {
          throw new \Exception('Please provide valid values for the arguments!');
        }

        // To get the value of an argument variable - area
        $areaValue = Utility::getTheValueOfArea($area);

        // To check which floor type is selected
        if (Utility::isHardFloorSelected($floor)) {
          $apartment = new HardFloor($areaValue);
        } else {
          $apartment = new CarpetFloor($areaValue);
        }

        // To start the clean up process based on the floor type.
        $apartment->cleanTheApartment();
      } else {
        throw new \Exception('Please provide the required argumments!');
      } 
    }
  }
?>