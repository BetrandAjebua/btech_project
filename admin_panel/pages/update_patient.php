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
        margin-left: 38vw;
        padding: 10px;

      }
    </style>



<?php  
if(!empty($_GET)){
  echo "YES";
  
  // 

  if(empty($_GET['id'])){
   $patient_id =  $_GET['id'];
    // geting record of the selected user

    $query_get_data = $db->prepare("SELECT * FROM patient WHERE p_id = '$patient_id'");
    $query_get_data->execute();
    if($query_get_data){
      var_dump($query_get_data->fetchAll(PDO::FETCH_OBJ));
    }
  }
foreach ($query_get_data->fetchAll(PDO::FETCH_OBJ) as $key => $value) {
 
}






?>

<div class="">
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
                  <input type="text" class="form-control" name="p_name" value="<?php echo $value->p_name  ?>">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label text-sm">Age</label>
                  <input type="number" class="form-control" name="p_age" value="<?php echo $value->p_age  ?>">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label text-sm">Phone Number</label>
                  <input type="text" class="form-control" name="p_number" value="<?php echo $value->p_phone  ?>">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label text-sm">Disease</label>
                  <input type="text" class="form-control" name="p_disease" value="<?php echo $value->p_disease  ?>">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label text-sm">Blood Group</label>
                  <input type="text" class="form-control" name="p_bgroup" value="<?php echo $value->p_blood_group  ?>">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label text-sm">Gender</label>
                  <input type="text" class="form-control" name="p_gender" value="<?php echo $value->p_gender  ?>">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label text-sm">Email</label>
                  <input type="email" class="form-control" name="p_email" value="<?php echo $value->email  ?>">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-lg bg-gradient-danger btn-lg w-100 mt-4 mb-0" onclick="updatePatient()">Save</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>

<!-- DataFetch End-->
    <?php }   ?>
  

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



      $queryUpdate =  $db->prepare(" UPDATE patient SET p_name='$p_name', p_age='$p_age', p_phone='$p_number', 
 p_disease='$p_disease', p_blood_group='$p_bgroup', p_gender='$p_gender', email='$p_email' WHERE p_id=$value->p_id");
      $queryUpdate->execute();
      if($queryUpdate){
        echo "Query Executed";
      }else{
        echo "Submit Failed";
      }
    }



    ?>


    <footer class="footer py-4  ">
      <?php include "../assets/connection/footer.php" ?>
    </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-danger active" data-color="danger" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn btn-outline-dark w-100" href="">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thanks for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
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