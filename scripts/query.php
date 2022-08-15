<?php



function getData()
{
  $conn = ConnectDb::connect();
  $sqlCommand = "SELECT * FROM peserta";
  $result = $conn->query($sqlCommand);
  $result = $result->fetch_assoc();
  ConnectDb::disconnect($conn);
  return $result;
}

function checkUNSCisSet()
{
  $field = ["firstCouncil", "secondCouncil"];
  foreach ($field as $value) {
    if ($_POST[$value] === "UNSC (United Nations Security Council)") {
      return true;
    }
    return false;
  }
}

function insertData()
{
  $conn = ConnectDb::connect();
  $optionalField = ["nameCoDelegate", "dateOfBirthCoDelegate", "genderCoDelegate", "emailCoDelegate"];
  $unscIsSet = checkUNSCisSet();


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
      name_co_delegate,
      date_of_birth_co_delegate,
      gender_co_delegate,
      email_co_delegate,
      first_council,
      first_country,
      first_reason,
      second_council,
      second_country,
      second_reason,
      experience,
      health_condition
    ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

    $count = 0;
    $values = [];

    foreach ($_POST as $key => $value) {

      if (in_array($key, $optionalField)) {
        // if UNSC is chosen, and the optional field is empty
        if (empty($_POST[$key]) && $unscIsSet === true) {
          return array("status" => "error", "message" => "Yo've chosen UNSC. Please fill the data for Co-delegate!");
        } elseif (!empty($_POST[$key]) && $unscIsSet === false) {
          return array("status" => "error", "message" => "You're not choosing UNSC. you don't need to fill out the co-delegate data");
        }
      } elseif (empty($_POST[$key])) {
        return array("status" => "error", "message" => "Please fill out the form!");
        // make sure optional field is set when council option is UNSC
      }

      $data = trim($value);
      $data = htmlspecialchars($data);

      array_push($values, $data);
      $count += 1;
    }
    $count = 0;
    //
    // use exec() because no results are returned
    $statement->bind_param("sssssssssssssssssssss", ...$values);
    $statement->execute();
    $statement->close();
    return array("status" => "success");
  } catch (mysqli_sql_exception $e) {
    return array("status" => "error", "message" => $e->getMessage());
  }
  ConnectDb::disconnect($conn);
}
