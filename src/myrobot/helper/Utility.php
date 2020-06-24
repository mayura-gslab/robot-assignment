<?php
namespace MyRobot\Helper;
class Utility {
  /**
   * The SetInterval method
   *
   * @param [type] $f
   * @param integer $milliseconds
   * @return void
   */
  public static function setInterval($f, int $milliseconds) {
    $seconds=(int)$milliseconds/1000;
    while(true)
    {
        $f();
        sleep($seconds);
    }
  }

  /**
   * To check if the given number is even
   *
   * @param integer $number
   * @return boolean
   */
  public static function isEvenNumber(int $number) {
    return $number%2 == 0;
  }

  /**
   * To check if require arguments are passed
   *
   * @param string $floor
   * @param string $area
   * @return void
   */
  public static function areRequiredArgumentsPassed(string $floor, string $area) {
    
    if (isset($floor) && strpos(strtok($floor, '='), 'floor') !== false &&
    isset($area) && strpos(strtok($area, '='), 'area') !== false
    ) {
      return true;
    }
    return false;
  }

  /**
   * To validate the given values for arguments
   *
   * @param string $floor
   * @param string $area
   * @return void
   */
  public static function validateArguments(string $floor, string $area) {
    $validFloorValues = ['hard', 'carpet'];
    return in_array(substr($floor, strpos($floor, "=") + 1), $validFloorValues) &&
    is_int((int)($area));
  }

  /**
   * To check if hard floor is selected
   *
   * @param string $argv
   * @return boolean
   */
  public static function isHardFloorSelected(string $floor) {
    return substr($floor, strpos($floor, "=") + 1) == 'hard';
  }
  
  /**
   * To get the value of area argument
   *
   * @param string $argv
   * @return boolean
   */
  public static function getTheValueOfArea(string $area) {
    return substr($area, strpos($area, "=") + 1);
  }
}