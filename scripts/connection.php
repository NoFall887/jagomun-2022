<?php
class ConnectDb
{
  static function connect()
  {
    $hostname = "127.0.0.1:3306";
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
