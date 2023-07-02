<?php include "connect.php"?>
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="index.php">K-BBMS</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo me-auto"><img src="assets/img/apple-touch-icon.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Donation</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Donor</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="/donor_section/register.php">Register</a></li>
                  <li><a href="/donor_section/login.php">login</a></li>

                </ul>
              </li>
              <li><a href="/donor_section/findDonor.php">Find Donor</a></li>
              <li><a href="#">Donation details</a></li>
              <li><a href="#">Donate</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Patient</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
           
              <li><a href="/request_section/login.php">Login</a></li>
              <li><a class="scrollto" href="/request_section/request.php">Request Registration</a></li>

            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Admin</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/admin_panel/pages/sign-in.php">Login</a></li>
              <li><a class="scrollto nav-link" href="#contact">Contact Admin</a></li>

            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->