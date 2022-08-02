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
  $result = $conn->query($sqlCommand)->fetch_assoc();
  ConnectDb::disconnect($conn);
  return $result;
}

function insertData()
{
  $conn = ConnectDb::connect();

  try {
    $statement = $conn->prepare("INSERT INTO peserta (
      name, 
      date_of_birth,
      email,
      institution,
      nationality,
      gender,
      country_code,
      phone,
      address,
      first_council,
      first_country,
      first_reason,
      second_council,
      second_country,
      second_reason,
      third_council,
      third_country,
      third_reason,
      experience,
      health_condition
    ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

    $count = 0;
    $values = [];
    // check form and get values
    foreach ($_POST as $key => $value) {
      $colName = $GLOBALS["formNames"][$count];
      if (empty($_POST[$colName])) {
        throw new Exception("Missing form field: " . $colName);
      } else {
        array_push($values, $value);
      }
      $count += 1;
    }
    $count = 0;
    //
    // use exec() because no results are returned
    $statement->bind_param("ssssssssssssssssssss", ...$values);
    $statement->execute();
    $statement->close();
    echo "Registration Success";
  } catch (mysqli_sql_exception $e) {
    echo $e->getMessage();
  }
  ConnectDb::disconnect($conn);
}
