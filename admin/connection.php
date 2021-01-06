<?php
class DB
{
  private static $instance = NULl;
  public static function getInstance()
  {
    if (!isset(self::$instance)) {
      self::$instance = mysqli_connect("localhost", "root", "", "shopthucung");
    }
    return self::$instance;
  }
}
