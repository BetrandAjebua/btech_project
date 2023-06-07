<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "../assets/connection/head.php"; ?>

</head>

<body class="g-sidenav-show  bg-gray-200">



  <!-- sECTION FOR THE ASSIDE BAR -->

  <?php include "../assets/connection/sidebar.php" ?>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Page</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Update Patient</li>
          </ol>
          <h6 class="font-weight-bolder mb-0"></h6>
        </nav>

        </li>
        </ul>
      </div>
      </div>
    </nav>
    <!-- End Navbar -->




    <style>
      .page-header {
        background-color: white;
        width: 40vw;
        position: relative;
        margin: 20vw;
        margin-top: 5vw;
        margin-left: 20vw;
        padding: 10px;

      }
    </style>



    <?php





    if (!empty($_GET['id'])) {
      // echo $_GET['id'];
      $donor_id =  $_GET['id'];
      // geting record of the selected user

      $query_get_data = $db->prepare("SELECT * FROM donor WHERE d_id = '$donor_id'");
      $query_get_data->execute();
      if ($query_get_data) {
        foreach ($query_get_data->fetchAll(PDO::FETCH_OBJ) as $key => $value) {
          // var_dump($value);
         }
      }

    ?>

     
        <div class="card">
          <div class=" page-header min-vh-60 text-center rounded-3">
            <div class="col-xl-10 col-lg-8 col-md-8 d-flex flex-column ms-auto me-auto ms-lg-auto ">
              <div class=" card-content card card-plain">
                <div class=" card-header bg-gradient-danger text-white">
                  <h4 class="card-title font-weight-bolder text-white">Update Data</h4>
                </div>
                <div class="card-body">
                  <form id="myForm" role="form" method="post" action="<?php $_SELF  ?>">

                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-sm">Name</label>
                      <input type="text" class="form-control" name="p_name" value="<?php echo $value->d_name  ?>">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-sm">email</label>
                      <input type="email" class="form-control" name="p_age" value="<?php echo $value->d_email  ?>">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-sm">Phone Number</label>
                      <input type="text" class="form-control" name="p_number" value="<?php echo $value->d_number  ?>">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-sm">City</label>
                      <input type="text" class="form-control" name="p_disease" value="<?php echo $value->d_city ?>">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-sm">Home Address</label>
                      <input type="text" class="form-control" name="p_bgroup" value="<?php echo $value->d_home_address ?>">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-sm">Blood-Type</label>
                      <input type="text" class="form-control" name="p_gender" value="<?php echo $value->d_blood_group  ?>">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-sm">Guadian Name</label>
                      <input type="email" class="form-control" name="p_email" value="<?php echo $value->guadian_name ?>">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-sm">Guadian Name</label>
                      <input type="email" class="form-control" name="p_email" value="<?php echo $value->guadian_name ?>">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-sm">Guadian Number</label>
                      <input type="email" class="form-control" name="p_email" value="<?php echo $value->guadian_number ?>">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-sm">Guardian Address</label>
                      <input type="email" class="form-control" name="p_email" value="<?php echo $value->guadian_home_address ?>">
                    </div>
                    <?php  }; ?>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg bg-gradient-danger btn-lg w-100 mt-4 mb-0" >Save</button>
                    </div >
                         <!-- DataFetch End-->
 
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>

   


    <?php

    // This Section runs after Submit Button is clicked'
    if (!empty($_POST)) {
      $p_name = htmlspecialchars($_POST["p_name"]);
      $p_age = htmlspecialchars($_POST["p_age"]);

      $p_number = htmlspecialchars($_POST["p_number"]);

      $p_disease = htmlspecialchars($_POST["p_disease"]);

      $p_bgroup = htmlspecialchars($_POST["p_bgroup"]);

      $p_gender = htmlspecialchars($_POST["p_gender"]);

      $p_email = htmlspecialchars($_POST["p_email"]);



      $queryUpdate =  $db->prepare(" UPDATE donor SET d_name='$p_name', d_age='$p_age', d_phone='$p_number', 
 p_disease='$p_disease', d_blood_group='$p_bgroup', d_gender='$p_gender', email='$p_email' WHERE p_id=$value->p_id");
      $queryUpdate->execute();
      if ($queryUpdate) {
        echo "Query Executed";

        ?>
<script>
  window.location=("./patient.php")
</script>
        <?php
      }
    }



    ?>


    <footer class="footer py-4  ">
      <?php include "../assets/connection/footer.php" ?>
    </footer>
    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="actionfunction.js"> </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>