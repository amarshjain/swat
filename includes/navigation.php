<?php session_start(); ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand lg" href="index.php">
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/b0/Indian_Institute_of_Technology_%28Indian_School_of_Mines%29%2C_Dhanbad_Logo.png/220px-Indian_Institute_of_Technology_%28Indian_School_of_Mines%29%2C_Dhanbad_Logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Indian Institute of Technology (ISM) Dhanbad
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <?php
        if($_SESSION['user_role'] == 'admin') {
      ?>
      <li class="nav-item">
        <a class="nav-link" href="admin"> <i class="fas fa-users-cog"></i> Admin Panel <span class="sr-only">(current)</span></a>
      </li>
      <?php } ?>
      <li class="nav-item">
        <a class="nav-link" href="contact.php"> <i class="fas fa-address-book"></i> Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php"> <i class="fas fa-university"></i> About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-share-alt"></i> Social Media
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="https://www.facebook.com/ismdhanbad/"><i class="fab fa-facebook-f"></i> Facebook</a> <br>
                        <a class="dropdown-item" href="https://twitter.com/IITISM_DHANBAD"><i class="fab fa-twitter"></i> Twitter</a> <br>
                        <a class="dropdown-item" href="https://in.linkedin.com/school/iitism/"><i class="fab fa-linkedin-in"></i> LinkedIn</a> <br>
                        <a class="dropdown-item" href="https://www.instagram.com/iit.ism/?hl=en"><i class="fab fa-instagram"></i> Instagram</a> <br>
        </div>
      </li>

      <?php
        if($_SESSION['username']) {
      ?>
        <li class="nav-item">
          <a class="nav-link" href="./includes/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </li>
      <?php
        } else {
      ?>

      <li class="nav-item">
        <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="registration.php"> <i class="fas fa-user-plus"></i> Sign Up</a>
      </li>

      <?php
        }
      ?>


    </ul>
  </div>
</nav>