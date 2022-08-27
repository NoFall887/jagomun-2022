<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Jember Annual Global Model United Nations (JAGOMUN) is an event carried out by UKM UNEJ MUN CLUB. This is an international event which aims to serve as a forum for all young people as future world leadership candidates in training their views and thoughts on issues that occur in the international world from various perspectives of countries in the world.">

  <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <title>Jagomun 2022-Councils</title>
</head>

<body>
  <?php include "./components/navbar.php" ?>
  <div class="councils-container">
    <h1 class="mb-3 h1-orange">
      OUR COUNCIL
    </h1>
    <p>
      Check Out Our Council Below to Choose Which One Best Fits you
    </p>

    <div class="councils-cards px-5">
      <div class="councils-card">
        <button class="councils-card-content" value="eu">
          <img src="./assets/councils/EUROPEAN UNION-min.png" alt="european union">
          <p>EU</p>
        </button>
      </div>
      <div class="councils-card">
        <button class="councils-card-content" value="who">
          <img src="./assets/councils/WHO-min.png" alt="WHO">
          <p>WHO</p>
        </button>
      </div>
      <div class="councils-card">
        <button class="councils-card-content" value="unep">
          <img src="./assets/councils/UNEP-min.png" alt="UNEP">
          <p>UNEP</p>
        </button>
      </div>
      <div class="councils-card">
        <button class="councils-card-content" value="unsc">
          <img src="./assets/councils/UNSC-min.png" alt="UNSC">
          <p>UNSC</p>
        </button>
      </div>
    </div>
    <a href="./register.php" role="button" class="btn d-flex mx-auto main-button">
      Register Now
    </a>
    <div class="council-detail py-5 px-5 mx-4">
      <div class="text-end">
        <button type="button" class="btn-close ms-auto council-close" aria-label="Close"></button>
      </div>

      <h2 class="council-name text-center h1-orange mb-3">

      </h2>
      <div class="text-center mb-5">
        <img src="./assets/councils/EUROPEAN UNION-min.png" class="council-img m-auto">
      </div>

      <h3>
        COUNCIL INTRODUCTION
      </h3>
      <p class="council-description mb-5">

      </p>
      <h3>
        TOPIC
      </h3>
      <p class="council-topic mb-5">

      </p>
      <h3>
        TOPIC DESCRIPTION
      </h3>
      <P class="council-topic-description mb-5">

      </P>

    </div>

  </div>
  <?php include "./components/footer.php";
  include "./components/script.php" ?>
  <script src="./js/councils.js"></script>
</body>

</html>