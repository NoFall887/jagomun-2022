<?php

$formNames = [
  "name",
  "dateOfBirth",
  "email",
  "institution",
  "nationality",
  "gender",
  "countryCode",
  "phone",
  "address",
  "firstCouncil",
  "firstCountry",
  "firstReason",
  "secondCouncil",
  "secondCountry",
  "secondReason",
  "thirdCouncil",
  "thirdCountry",
  "thirdReason",
  "experience",
  "healthCondition",
];

function getData()
{
  $conn = ConnectDb::connect();
  $sqlCommand = "SELECT * FROM peserta";
  $result = $conn->query($sqlCommand)->fetchAll(PDO::FETCH_ASSOC);
  ConnectDb::disconnect($conn);
  return $result;
}

function insertData()
{
  $conn = ConnectDb::connect();

  try {
    $sqlCommand = $conn->prepare("INSERT INTO peserta  VALUES (
      :name, 
      :dateOfBirth,
      :email,
      :institution,
      :nationality,
      :gender,
      :countryCode,
      :phone,
      :address,
      :firstCouncil,
      :firstCountry,
      :firstReason,
      :secondCouncil,
      :secondCountry,
      :secondReason,
      :thirdCouncil,
      :thirdCountry,
      :thirdReason,
      :experience,
      :healthCondition, 
      DEFAULT)");
    $count = 0;

    foreach ($_POST as $key => $value) {
      $colName = $GLOBALS["formNames"][$count];

      if (!empty($_POST[$colName])) {
        $col = (":" . $colName);
        $sqlCommand->bindParam($col, $value);
      } else {
        var_dump("not set");
      }
      $count += 1;
    }
    $count = 0;
    // use exec() because no results are returned
    $sqlCommand->execute();

    echo "Registration Success";
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
  ConnectDb::disconnect($conn);
}
