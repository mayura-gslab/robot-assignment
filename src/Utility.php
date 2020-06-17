<?php
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
   * @param [type] $argv
   * @return void
   */
  public static function areRequiredArgumentsPassed($argv) {
    if (isset($argv[2]) && strpos(strtok($argv[2], '='), 'floor') !== false && isset($argv[3]) && strpos(strtok($argv[3], '='), 'area') !== false) {
      return true;
    }
    return false;
  }

  /**
   * To check if hard floor is selected
   *
   * @param [type] $argv
   * @return boolean
   */
  public static function isHardFloorSelected($argv) {
    return substr($argv[2], strpos($argv[2], "=") + 1) == 'hard';
  }
  
  /**
   * To get the value of area argument
   *
   * @param [type] $argv
   * @return boolean
   */
  public static function getTheValueOfArea($argv) {
    return substr($argv[3], strpos($argv[3], "=") + 1);
  }
}