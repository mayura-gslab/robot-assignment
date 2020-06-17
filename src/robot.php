<?php
  require_once("HardFloor.php");
  require_once("CarpetFloor.php");

  // To check if the required arguments are passed
  if (Utility::areRequiredArgumentsPassed($argv)) {
  
    // To get the value of an argument variable - area
    $areaValue = Utility::getTheValueOfArea($argv);

    // To check which floor type is selected
    if (Utility::isHardFloorSelected($argv)) {
      $apartment = new HardFloor($areaValue);
    } else {
      $apartment = new CarpetFloor($areaValue);
    }

    // To start the clean up process based on the floor type.
    $apartment->cleanTheApartment();
  } else {
    throw new Exception('Please provide the required argumments!');
  }
?>