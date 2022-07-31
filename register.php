<?php
require "./scripts/query.php";
require "./scripts/connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  insertData();
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->

  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="./css/style.css" rel="stylesheet" type="text/css" charset="utf-8" />


  <title>Register - Jagomun 2022</title>
</head>

<body class="container text-center">
  <?php require "./components/navbar.php" ?>
  <h1 class="mt-4 mb-5">Delegate Aplication Form</h1>
  <form class="text-start" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST" id="registration-form">
    <fieldset>
      <legend class="mb-3">Delegate Information</legend>
      <div class="form-floating mb-4">
        <input type="text" class="form-control" id="name" name="name" placeholder="full name" required>
        <label for="name">Full name</label>
      </div>
      <div class="form-floating mb-4">
        <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" placeholder="date of birth" required>
        <label for="dateOfBirth">Date of Birth</label>
      </div>
      <div class="form-floating mb-4">
        <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" required>
        <label for="email">Email</label>
      </div>
      <div class="form-floating mb-4">
        <input type="text" class="form-control" id="institution" name="institution" placeholder="institution" required>
        <label for="address">Institution</label>
      </div>
      <div class="form-floating mb-4">
        <input type="text" class="form-control" id="nationality" name="nationality" placeholder="nationality" required>
        <label for="address">Nationality</label>
      </div>
      <div class="form-floating mb-4">
        <select class="form-select" aria-label="Gender" id="gender" name="gender" required>
          <option value="" selected disabled>Select gender</option>
          <option value="male">male</option>
          <option value="female">female</option>
          <option value="prefer not to tell">prefer not to tell</option>
        </select>
        <label for="address">Gender</label>
      </div>
      <!-- countrycode and phone number -->
      <div class="row">
        <div class="col-md-3">
          <div class="form-floating mb-4">
            <select class="form-select" aria-label="Country Code" id="countryCode" name="countryCode" required>
              <?php require "./components/countryCodeOptions.php" ?>
            </select>

            <label for="countryCode">Country Code</label>
          </div>
        </div>
        <div class="col-md-9">
          <div class="form-floating mb-4 flex-grow-1">
            <input type="number" class="form-control" id="phone" name="phone" placeholder="812345678" required>
            <label for="phone">Phone Number (WhatsApp)</label>
          </div>
        </div>

      </div>
      <div class="form-floating mb-4">
        <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
        <label for="address">Address</label>
      </div>
    </fieldset>

    <fieldset>
      <legend class="mb-1">Council and Country Preference</legend>
      <p class="disclaimer">*Disclaimer: UNEP and EU as the council preference will be held by online. UNSC and WHO as the council preference will be held by offline</p>

      <div class="form-floating mb-4">
        <select class="form-select" aria-label="First Council Preference" id="firstCouncil" name="firstCouncil" required>
          <option value="" selected disabled>Select first council preference</option>
          <option value="UNEP (United Nations Environment Programme)">UNEP (United Nations Environment Programme)</option>
          <option value="WHO (World Health Organization)">WHO (World Health Organization)</option>
          <option value="EU (European Union)">EU (European Union)</option>
          <option value="UNSC (United Nations Security Council)">UNSC (United Nations Security Council)</option>
        </select>
        <label for="firstCouncil">First Council Preference</label>
      </div>
      <div class="form-floating mb-4">
        <input type="text" class="form-control" id="firstCountry" name="firstCountry" placeholder="first country" required>
        <label for="firstCountry">First Country Preference</label>
      </div>
      <div class="form-floating mb-5">
        <textarea class="form-control" placeholder="Reason for choosing" id="firstReason" name="firstReason" required></textarea>
        <label for="firstReason">State your reason why you choose your first council preference</label>
      </div>

      <div class="form-floating mb-4">
        <select class="form-select" aria-label="Second Council Preference" id="secondCouncil" name="secondCouncil" required>
          <option value="" selected disabled>Select second council preference</option>
          <option value="UNEP (United Nations Environment Programme)">UNEP (United Nations Environment Programme)</option>
          <option value="WHO (World Health Organization)">WHO (World Health Organization)</option>
          <option value="EU (European Union)">EU (European Union)</option>
          <option value="UNSC (United Nations Security Council)">UNSC (United Nations Security Council)</option>
        </select>
        <label for="secondCouncil">Second Council Preference</label>
      </div>
      <div class="form-floating mb-4">
        <input type="text" class="form-control" id="secondCountry" name="secondCountry" placeholder="Second country" required>
        <label for="secondCountry">Second Country Preference</label>
      </div>
      <div class="form-floating mb-5">
        <textarea class="form-control" placeholder="Reason for choosing" id="secondReason" name="secondReason" required></textarea>
        <label for="secondReason">State your reason why you choose your second council preference</label>
      </div>

      <div class="form-floating mb-4">
        <select class="form-select" aria-label="Third Council Preference" id="thirdCouncil" name="thirdCouncil" required>
          <option value="" selected disabled>Select third council preference</option>
          <option value="UNEP (United Nations Environment Programme)">UNEP (United Nations Environment Programme)</option>
          <option value="WHO (World Health Organization)">WHO (World Health Organization)</option>
          <option value="EU (European Union)">EU (European Union)</option>
          <option value="UNSC (United Nations Security Council)">UNSC (United Nations Security Council)</option>
        </select>
        <label for="thirdCouncil">Third Council Preference</label>
      </div>
      <div class="form-floating mb-4">
        <input type="text" class="form-control" id="thirdCountry" name="thirdCountry" placeholder="Third country" required>
        <label for="thirdCountry">Third Country Preference</label>
      </div>
      <div class="form-floating mb-5">
        <textarea class="form-control" placeholder="Reason for choosing" id="thirdReason" name="thirdReason" required></textarea>
        <label for="thirdReason">State your reason why you choose your first council preference</label>
      </div>
    </fieldset>

    <fieldset>
      <legend class="mb-3">Previous MUN Experience (if any)</legend>
      <div class="form-floating mb-5">
        <textarea class="form-control" placeholder="Previous MUN Experience" id="experience" name="experience"></textarea>
        <label for="experience">The format: (Name of MUN) - (Year) - (Council) - (Chair/Delegate) - (Award (if any))</label>
      </div>
    </fieldset>

    <fieldset>
      <legend>
        Delegation's Health Condition and Dietary Restriction
      </legend>
      <p class="disclaimer">(Disclaimer: Only for those who choose to attend JAGOMUN 2022 by offline)
        1. Please give a brief description of any medical or mental health concerns, physical impairments, serious illnesses or allergies that the delegate may have had:
        2. Please list any special dietary requirements that the delegate may have for medical, religious or ethical reasons:
      </p>
      <textarea class="form-control" placeholder="Delegation's Health Condition and Dietary Restriction" id="healthCondition" name="healthCondition" required></textarea>
      <label for="healthCondition">Delegation's Health Condition and Dietary Restriction</label>
    </fieldset>
    <div class="text-center mb-4">
      <button type="submit" class="main-button">Register</button>
    </div>

  </form>

  <?php require "./components/script.php" ?>
</body>

</html>