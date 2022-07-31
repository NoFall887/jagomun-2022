<?php
require "./scripts/query.php";
require "./scripts/connection.php";
function createUsersData()
{
  $users = getData();
  $data = "";
  // add header
  foreach ($users[0] as $key => $value) {
    $data .= ($key . ",");
  }
  $data .= "\n";

  // add the datas
  foreach ($users as $user) {
    foreach ($user as $key => $value) {
      $data .= ($value . ",");
    }
    $data .= "\n";
  }

  return $data;
}

function createDownloadUsersFile()
{
  // create file
  $fileName = "users.csv";
  $usersFile = fopen($fileName, "w") or die("Unable to open file!");
  fwrite($usersFile, createUsersData());
  fclose($usersFile);

  // create response header and send file
  header('Content-Description: File Transfer');
  header('Content-Disposition: attachment; filename=' . basename($fileName));
  header('Expires: 0');
  header('Cache-Control: must-revalidate');
  header('Pragma: public');
  header('Content-Length: ' . filesize($fileName));
  header("Content-Type: text/plain");
  readfile($fileName);
};

createDownloadUsersFile();
