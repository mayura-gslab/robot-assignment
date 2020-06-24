<?php
  require "../vendor/autoload.php";
  use MyRobot\Robot;
  /**
   * To call the required method.
   * $argv - To get the command line arguments
   */
  $robot = new Robot();
  call_user_func_array(array($robot, $argv[1]), array($argv[2], $argv[3]));
?>