<?php
class ConnectDb
{
  static function connect()
  {
    $hostname = "localhost";
    $dbName = "jagomunm_jagomun";
    $conn = null;

    $conn = new mysqli($hostname, "jagomunm_naufal", "Jagomunmunmun887", $dbName);
    if ($conn->connect_error) {
      echo "Connection failed: " . $conn->connect_error;
      return;
    }
    return $conn;
  }

  static function disconnect($conn)
  {
    $conn->close();
  }
}
