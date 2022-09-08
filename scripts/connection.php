<?php
class ConnectDb
{
  static function connect()
  {
    $hostname = "localhost";
    $dbName = "jagomun";
    $conn = null;

    $conn = new mysqli($hostname, "root", "", $dbName);
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
