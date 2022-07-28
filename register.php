<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet" type="text/css" charset="utf-8" />


  <title>Register - Jagomun 2022</title>
</head>

<body class="container text-center">
  <?php require "./components/navbar.php" ?>
  <h1 class="mt-4 mb-5">Delegate Aplication Form</h1>
  <form class="text-start" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST">
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="name" name="name" placeholder="name@example.com">
      <label for="name">Full name</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <?php require "./components/script.php" ?>
</body>

</html>