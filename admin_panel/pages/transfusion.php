<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "../assets/connection/head.php"; ?>

</head>
<?php include "../assets/connection/sidebar.php";

?>

<body class="g-sidenav-show  bg-gray-200">


  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-right">
              <button id="btn1" onclick="naveto1()" class="nav-link text-body font-weight-bold  btn-danger  rounded px-2">
                <i class="fa fa-plus me-sm-1 text-white"></i>
                <span class="d-sm-inline d-none text-white">Donation Record</span>
              </button>
            </li>
            <li class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
              <button id="btn2"  onclick="naveto2()" class="nav-link text-body font-weight-bold btn-danger  rounded pl-2 pr-2 ml-2">
                <i class="fa fa-minus me-sm-1 text-white"></i>
                <span class="d-sm-inline d-none text-white">Transfered Blood Record</span>
              </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<script>

  $("#btn1").hide();

  function naveto1(){
    $("#donations").fadeIn();
    $("#transfusions").fadeOut();
    $("#btn1").hide();
    $("#btn2").fadeIn();
  
  



  }
  function naveto2(){
    $("#donations").fadeOut();
    $("#btn2").hide();
    $("#btn1").fadeIn();

    $("#transfusions").fadeIn();

    
  }
</script>
    <!-- Nav Section Ends Here -->


    
<div  id="donations">
  <div class="modal-dialog modal-xl">
    <div class="modal-content" width="400rem">
      <div class="modal-header">
        <h4 class="modal-title"><b>Donor Donation Details</b></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>

      </div>
      <div class="modal-body">
        <table class="table table-striped custom-table table-hover">
          <thead class="table-danger">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Blood Group</th>
              <th scope="col">Quantity</th>
              <th scope="col">Date</th>
            </tr>
          </thead>


          <!-- This Section is to Query data -->

          <tbody>
            <?php
            $query_donation = $db->prepare("SELECT Donation.Quantity, Blood_type.Blood_group, Donor.D_name, Donation.Date
            FROM ((Donation
            INNER JOIN Donor ON Donor.D_id = Donation.Donor_id)
            INNER JOIN Blood_type ON Blood_type.BloodId  = Donation.Blood_id)");
            $query_donation->execute();
            foreach ($query_donation->fetchAll(PDO::FETCH_ASSOC) as $key => $value) {

            
              
            ?>
              <tr scope="row">
                <td>
                  <?php
                echo  $value["D_name"];
                  ?>
                </td>
                <td class="pl-0">
                  <div class="d-flex align-items-center">
                    <?php
              echo $value["Blood_group"];
                    ?>
                  </div>
                </td>
                <td class="pl-0">
                  <div class="d-flex align-items-center">
                    <?php
              echo $value["Quantity"];
                    ?>
                  </div>
                </td>
                <td class="pl-0">
                  <div class="d-flex align-items-center">
                    <?php
              echo $value["Date"];
                    ?>
                  </div>
                </td>

              </tr>
            <?php
            }
            ?>


          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>
<script>


</script>
<!-- Blood Donation Modal End -->

<!-- Section For Blood Transfusion Starts -->

<div id="transfusions" style="display: none;">
  <div class="modal-dialog modal-xl">
    <div class="modal-content" width="400rem">
      <div class="modal-header">
        <h4 class="modal-title"><b>Patients Transfusion Details</b></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>

      </div>
      <div class="modal-body">
        <table class="table table-striped custom-table table-hover">
          <thead class="table-danger">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Blood Group</th>
              <th scope="col">Quantity</th>
              <th scope="col">Date</th>
            </tr>
          </thead>


          <!-- This Section is to Query data -->

          <tbody>
            <?php
            $query_donation = $db->prepare("SELECT Transfusion.Quantity, Blood_type.Blood_group, Patient.P_name, Transfusion.Date
            FROM ((Transfusion
            INNER JOIN Patient ON Patient.P_id = Transfusion.Patient_id)
            INNER JOIN Blood_type ON Blood_type.BloodId  = Transfusion.Blood_id)");
            $query_donation->execute();
            foreach ($query_donation->fetchAll(PDO::FETCH_ASSOC) as $key => $value) {

            
              
            ?>
              <tr scope="row">
                <td>
                  <?php
                echo  $value["P_name"];
                  ?>
                </td>
                <td class="pl-0">
                  <div class="d-flex align-items-center">
                    <?php
              echo $value["Blood_group"];
                    ?>
                  </div>
                </td>
                <td class="pl-0">
                  <div class="d-flex align-items-center">
                    <?php
              echo $value["Quantity"];
                    ?>
                  </div>
                </td>
                <td class="pl-0">
                  <div class="d-flex align-items-center">
                    <?php
              echo $value["Date"];
                    ?>
                  </div>
                </td>

              </tr>
            <?php
            }
            ?>


          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>

    <footer class="footer py-4  " style="margin-top: 15rem;">
      <?php include "../assets/connection/footer.php"; ?>

    </footer>
    </div>
  </main>


  <!-- Settings Content goes hear CONTENT WILL BE INSER -->

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script src="./jquery.js"> </script>
  <script src="actionfunction.js"> </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>


<!-- Blood Donation Modal Starts -->

<script>


</script>