
<!DOCTYPE html>
<html lang="en">

<head>
<?php include "../assets/connection/head.php";?>
  
</head>
<?php include "../assets/connection/sidebar.php";?>

<body class="g-sidenav-show  bg-gray-200">
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->

    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="card mt-4">
            <div class="card-header p-3">
              <h5 class="mb-0">Messages</h5>
            </div>

            <div class="card-body p-3 pb-0">

<!-- Getting Notification data From the Data Base -->
            <?php 
            $query = $db->prepare("SELECT * FROM contact_us");
            $query->execute();
            $length=$query->fetchAll(PDO::FETCH_ASSOC);
            $count1=0;

// PHP LOOP STARTS
           foreach ($length as $key => $value) {
           
                    
            ?>

              <div class=" alert alert-dark alert-dismissible text-white pl-2 text-sm " role="alert">
                <span  style="margin-right:8vw"><p  class="text-left text-bolder" class="text-left" ><?php echo "@".($value['submit_time'])." <hr>" ?></p> <a href="javascript:;" class="alert-link text-white text-center d-flex" type="email"><?php echo $value['user_email'] ?></a><p><?php echo $value['user_message'] ?></p></span>
                <input type="button" name= "<?php echo ($value['user_name']) ?>" class="btn-right text-sm bg-dark rounded-3 text-white" onclick="notification_del(<?php echo $value['user_id'] ?>)" value="Delete">
            
                <input type="button" class="btn-right bg-gradient-danger text-sm  rounded-3 text-white " value="Respond">
                
              </div>
              <!-- PHP Loop Ends Here -->
              <?php   }?>  
          </div>
            
 
      <footer class="footer py-4  ">
<?php include "../assets/connection/footer.php";?>
        
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