<!-- navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-light" id="navbar">
  <div class="container">
    <a class="home-link navbar-brand" href="index.php"><img class="logo" src="assets/LOGO MUN 2022 1.png" alt="">
      <img class="line" src="assets/stripsy.png" alt="">
      <p class="identity mr-auto">JAGOMUN</p>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item <?php echo $_SERVER['SCRIPT_NAME'] === "/index.php" ? "active" : "" ?>">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item <?php echo $_SERVER['SCRIPT_NAME'] === "/councils.php" ? "active" : "" ?>">
          <a class="nav-link" href="./councils.php">Councils</a>
        </li>
        <li class="nav-item dropdown <?php echo $_SERVER['SCRIPT_NAME'] === "/register.php" ? "active" : "" ?>">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Register
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../register.php">Single Delegation</a>
            <a class="dropdown-item" href="https://bit.ly/DelegationRegistrationJAGOMUN2022">Delegation</a>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="effect" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#store">Store</a>
        </li>
      </ul>

    </div>
  </div>
</nav>
<!-- akhirnavbar -->