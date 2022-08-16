<?php
require "./scripts/query.php";
require "./scripts/connection.php";

$db_con = ConnectDb::connect();
$result = $db_con->query('SELECT * FROM peserta');
if (!$result) die('Couldn\'t fetch records');
$num_fields = mysqli_num_fields($result);
$headers = array();
while ($fieldinfo = mysqli_fetch_field($result)) {
  $headers[] = $fieldinfo->name;
}
$fp = fopen('php://output', 'w');
if ($fp && $result) {
  header('Content-Type: text/csv');
  header('Content-Disposition: attachment; filename="peserta.csv"');
  header('Pragma: no-cache');
  header('Expires: 0');
  fputcsv($fp, $headers);
  while ($row = $result->fetch_array(MYSQLI_NUM)) {
    fputcsv($fp, array_values($row));
  }
  die;
}
