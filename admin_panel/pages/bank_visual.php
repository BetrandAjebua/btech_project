<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "../assets/connection/head.php"; ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Data Bank</li>
          </ol>
          <h6 class="font-weight-bolder mb-0"></h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label ">Type Donor location here...</label>
              <input type="text" class="form-control">
              <input class="rounded-2 text-white bg-gradient-danger" type="button" value="search">
            </div>
          </div>

          </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php include "../assets/connection/nav.php"; ?>
    <!-- End Navbar -->
    <div class="row">

      <canvas id="myChart1" style="width:100%;max-width:600px" class="col-3"></canvas>
      <canvas id="myChart2" style="width:100%;max-width:600px" class="col-3"></canvas>

    </div>
    <div class="container-fluid py-4 row-6">
 
    </div>
<?php
$qselect_data = $db->prepare("SELECT * FROM data1");
$qselect_data->execute();
$qselect_data1 = $db->prepare("SELECT * FROM data1 WHERE checkDonation	='1'");
$qselect_data1->execute();

?>
      <script>
          var data = {
    datasets: [
        {
            label: 'Monetrary Contribution against Frequency in 2020',
            data: [
              <?php
      foreach ($qselect_data->fetchAll(PDO::FETCH_ASSOC) as $key => $value) {
       if($key==="0"){
        $key=$key+1;
       }
      echo "{x: $value[frequency], y: $value[monetary]},";
      }
      ?>
            ],
            backgroundColor: '#9b0000',
            borderColor: '#9b0000',
            borderWidth: 1
        }
    ]
};

var options = {
    scales: {
        xAxes: [{
            type: 'linear',
            position: 'bottom'
        }]
    }
};

var ctx = document.getElementById('myChart2').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'scatter',
    data: data,
    options: options
});



// This is for the second chart


var data2 = {
    datasets: [
        {
            label: 'Blood Contribution against Frequency in 2020',
            data: [
              <?php
      foreach ($qselect_data1->fetchAll(PDO::FETCH_ASSOC) as $key => $value) {
      echo "{x: $value[frequency], y: $value[time]},";
      }
      ?>
            ],
            backgroundColor: '#9b0000',
            borderColor: '#9b0000',
            borderWidth: 1
        }
    ]
};

var options2 = {
    scales: {
        xAxes: [{
            type: 'linear',
            position: 'bottom'
        }]
    }
};

var ctx2 = document.getElementById('myChart1').getContext('2d');
var myChart2 = new Chart(ctx2, {
    type: 'scatter',
    data: data2,
    options: options2
});

      </script>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="./jquery.js"> </script>
    <script src="actionfunction.js"></script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '1'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>


    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>
<?php
include "./messageUser.php"
?>