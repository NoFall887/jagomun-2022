<?php
class ConnectDb
{
  static function connect()
  {
    $hostname = "127.0.0.1:3306";
    $dbName = "jagomun";
    $conn = null;
    try {
      $conn = new PDO("mysql:host=$hostname;dbname=$dbName", "root", "");
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }

  static function disconnect($conn)
  {
    $conn = null;
  }
}
