<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "../assets/connection/head.php"; ?>

</head>
<?php include "../assets/connection/sidebar.php";


// Querying Usefull TAbles


$query_donor = $db->prepare("SELECT * FROM donor");
$query_donor->execute();
$query_donor_total = $query_donor->rowCount();

$query_donor_request = $db->prepare("SELECT * FROM donor_request");
$query_donor_request->execute();
$query_donor_request_total = $query_donor_request->rowCount();

$query_patient_request = $db->prepare("SELECT * FROM patient_request");
$query_patient_request->execute();
$query_patient_request_total = $query_patient_request->rowCount();

$query_patient = $db->prepare("SELECT * FROM patient");
$query_patient->execute();
$query_patient_total = $query_patient->rowCount();
$query_contact_us = $db->prepare("SELECT * FROM contact_us");
$query_contact_us->execute();
$query_contact_us_total = $query_contact_us->rowCount();
$query_admins = $db->prepare("SELECT * FROM admin");
$query_admins->execute();
$query_admins_total = $query_admins->rowCount();
?>

<body class="g-sidenav-show  bg-gray-200">


  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">Users</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h4 class="text-center mb-4">All Users Blood Bank Users</h4>
            <div class="table-wrap ">
              <table class="table table-bordered">
                <thead class=" text-left table-danger">
                  <tr class="text-bolder">
                    <th>User Category</th>
                    <th>Role</th>
                    <th>Total</th>
                    <th>Request</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  <td>Administrators</td>
                  <td>CRUD operations and cliant Queries Response</td>
                  <td><?php
                      echo $query_admins_total;
                      ?></td>
                  <td>-</td>
                  <td><button data-target="#admins" data-toggle="modal" class="btn btn-danger">View</button></td>
                  </tr>
                  <tr>

                    <td>Donors</td>
                    <td>Donate Blood to patients</td>
                    <td><?php
                        echo $query_donor_total;
                        ?></td>
                    <td><?php
                        echo $query_donor_request_total;
                        ?></td>
                    <td><button data-target="#donors" data-toggle="modal" class="btn btn-danger">View</button></td>
                  </tr>
                  <tr>

                    <td>Patients</td>
                    <td>Recieve Medical Assistance from blood donors</td>
                    <td><?php
                        echo $query_patient_total;
                        ?></td>
                    <td><?php
                        echo $query_patient_request_total;
                        ?></td>
                    <td><button data-target="#patients" data-toggle="modal" class="btn btn-danger">View</button></td>
                  </tr>
                  <tr>

                    <td>Visitors</td>
                    <td>General Queries on functionality</td>
                    <td><?php
                        echo $query_contact_us_total;
                        ?></td>
                    <td>-</td>
                    <td><button data-target="#visitors" data-toggle="modal" class="btn btn-danger">More </button></td>
                  </tr>
                  <tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

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
<?php
include "./messageUser.php";
?>

</html>






<!-- donors Modal -->


<div class="modal fade" id="donors">
  <div class="modal-dialog modal-xl">
    <div class="modal-content" width="400rem">
      <div class="modal-header">
        <h4 class="modal-title"><b>Donors</b></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>

      </div>
      <div class="modal-body">
        <table class="table table-striped custom-table table-hover">
          <thead class="table-danger">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">City</th>
              <th scope="col">Blood Type</th>
              <th scope="col">Age</th>
              <th scope="col">Guadian Number</th>


              <th scope="col">Mute</th>
            </tr>
          </thead>


          <!-- This Section is to Query -->

          <tbody>
            <?php
            foreach ($query_donor->fetchAll(PDO::FETCH_ASSOC) as $key => $value) {
  

            ?>
              <tr scope="row">
                <td>
                  <?php
                  echo $value['d_name']
                  ?>
                </td>
                <td class="pl-0">
                  <div class="d-flex align-items-center">
                    <?php
                    echo $value['d_email']
                    ?>
                  </div>
                </td>
                <td>
                  <?php
                  echo $value['d_city']
                  ?>
                  <small class="d-block"> <?php
                                          echo $value['d_home_address']
                                          ?></small>
                </td>
                <td> <?php
                      echo $value['d_blood_group']
                      ?></td>
                <td> <?php
                      echo $value['d_age']
                      ?></td>
                <td><a href="#" class="more"> <?php
                                              echo $value['guadian_number']
                                              ?></a></td>
                <td><label for="check"><i class="fa fa-view">m</i><input name="check" value="true" type="checkbox"></label></td>

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




<!-- Admin Modal Section -->



<div class="modal fade" id="admins">
  <div class="modal-dialog modal-xl">
    <div class="modal-content" width="400rem">
      <div class="modal-header">
        <h4 class="modal-title"><b>Admin Details</b></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>

      </div>
      <div class="modal-body">
        <table class="table table-striped custom-table table-hover">
          <thead class="table-danger">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">DOB</th>
              <th scope="col">Address</th>
            </tr>
          </thead>


          <!-- This Section is to Query data -->

          <tbody>
            <?php
            foreach ($query_admins->fetchAll(PDO::FETCH_ASSOC) as $key => $value) {
              # code...
              // `admin_id`, `a_name`, `email`, `a_password`, `dob`, `address``


            ?>
              <tr scope="row">
                <td>
                  <?php
                  echo $value['a_name']
                  ?>
                </td>
                <td class="pl-0">
                  <div class="d-flex align-items-center">
                    <?php
                    echo $value['email']
                    ?>
                  </div>
                </td>
                <td>
                  <?php
                  echo $value['dob']
                  ?>

                </td>
                <td>
                  <small class="d-block"> <?php
                                          echo $value['address']
                                          ?></small>
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





<!-- Visitors Modal Section -->



<div class="modal fade" id="visitors">
  <div class="modal-dialog modal-xl">
    <div class="modal-content" width="400rem">
      <div class="modal-header">
        <h4 class="modal-title"><b>Visitors details</b></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>

      </div>
      <div class="modal-body">
        <table class="table table-striped custom-table table-hover">
          <thead class="table-danger">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Subject</th>
              <th scope="col">Message</th>
              <th scope="col">Submitted Time</th>
            </tr>
          </thead>


          <!-- This Section is to Query data -->

          <tbody>
            <?php
            foreach ($query_contact_us->fetchAll(PDO::FETCH_ASSOC) as $key => $value) {
              # code...
              // `user_id`, `user_name`, `user_email`, `user_subject`, `user_message`, `submit_time`


            ?>
              <tr scope="row">
                <td>
                  <?php
                  echo $value['user_name']
                  ?>
                </td>
                <td class="pl-0">
                  <div class="d-flex align-items-center">
                    <?php
                    echo $value['user_email']
                    ?>
                  </div>
                </td>
                <td class="pl-0">
                  <div class="d-flex align-items-center">
                    <?php
                    echo $value['user_subject']
                    ?>
                  </div>
                </td>
                <td class="pl-0">
                  <div class="d-flex align-items-center">
                    <?php
                    echo $value['user_message']
                    ?>
                  </div>
                </td>
                <td>
                  <?php
                  echo $value['submit_time']
                  ?>

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




<!-- Patients Modal -->


<div class="modal fade" id="patients">
  <div class="modal-dialog modal-xl">
    <div class="modal-content" width="400rem">
      <div class="modal-header">
        <h4 class="modal-title"><b>Patients Details</b></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>

      </div>
      <div class="modal-body">
        <table class="table table-striped custom-table table-hover">
          <thead class="table-danger">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Ilness</th>
              <th scope="col">Gender</th>
              <th scope="col">Age</th>
              <th scope="col">Request Time</th>
            </tr>
          </thead>


          <!-- This Section is to Query data -->

          <tbody>
            <?php
            foreach ($query_patient->fetchAll(PDO::FETCH_ASSOC) as $key => $value) {
              # code...
              // `p_id`, `p_name`, `p_password`, `p_age`,
              //  `p_phone`, `p_disease`, `p_blood_group`, `p_gender`, `email`, `req_time`


            ?>
              <tr scope="row">
                <td>
                  <?php
                  echo $value['p_name']
                  ?>
                </td>
                <td class="pl-0">
                  <div class="d-flex align-items-center">
                    <?php
                    echo $value['email']
                    ?>
                  </div>
                </td>
                <td class="pl-0">
                  <div class="d-flex align-items-center">
                    <?php
                    echo $value['p_disease']
                    ?>
                  </div>
                </td>
                <td class="pl-0">
                  <div class="d-flex align-items-center">
                    <?php
                    echo $value['p_gender']
                    ?>
                  </div>
                </td>
                <td>
                  <?php
                  echo $value['p_age'];
                  ?>

                </td>
                <td>
                  <?php
                  echo $value['req_time'];
                  ?>

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