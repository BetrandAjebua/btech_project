<!DOCTYPE html>
<html lang="en">
<head>
  
<?php include "../assets/connection/head.php" ;?>
</head>


<body  class="bg-dark">
<?php include "../assets/connection/header.php" ;?>


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Find Donor </li>
        </ol>
    

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
    <div class="container col-lg-7 mt-5 mt-lg-0  text-white">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-4">
                  <label for="b_group">Blood-Gorup</label>
                  <select id="b-select" name="b_group" >
                <option class="bg-danger text-white"value="A">A</option>
                <option  class="bg-danger text-white" value="B">B</option>
                <option class="bg-danger text-white" value="AB">AB</option>
                <option class="bg-danger text-white"  value="O">O</option>
            </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="location">Location</label>
                  <input type="text" class="form-control" name="location" id="location" required>
                </div>
              </div>          
              
              <div class="text-center"><button type="submit">Search</button></div>
            </form>
          </div>
      
    </section>

  </main><!-- End #main -->
  <script>
let lo = document.querySelectorAll('.nav-link');
console.log(lo);
lo.forEach(element => {
  !element.addEventListener("click",()=>{
    window.location.href="../index.php"
  });
});
  </script>

  <!-- ======= Footer ======= -->
  <footer id="footer">

  <?php include "../assets/connection/footer.php" ?>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>