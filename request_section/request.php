<?php require "../assets/connection/connect.php"?>
<?php include "submit.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="login.css">
   <link rel="stylesheet" href="reg.css">
    <link rel="stylesheet" href="../bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="../jquery-ui-1.13.2.custom/jquery-ui-1.13.2.custom/jquery-ui.structure.css">
    <link rel="stylesheet" href="../jquery-ui-1.13.2.custom/jquery-ui-1.13.2.custom/jquery-ui.theme.css">
    <link rel="stylesheet" href="../jquery-ui-1.13.2.custom/jquery-ui-1.13.2.custom/jquery-ui.css">
    <meta charset="UTF-8"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../assets/connection/head.php" ?>
    <title>BBMS-login</title>
</head>

<body class="container-fluid bg-dark">
<?php include "../assets/connection/header.php" ?> 
    <p class="opa bg-dark" style="display:none;"></p>
    <!--LOGIN FORM FOR THE DONOR-->
    <div class="form-con text-danger col-8 bg-white">
        <form action="<?php $_SELF ?>" method="post" role="form">
            <h1 class="text-center ">Patient Registration</h1>

            <!--NAME SECTION-->

    <div>
        
            <div class="f-name">
                <label for="f-name" class="l-input">Patient Name</label>
                <input type="text" name="f-name" id="f-name" class="I-input" required>
            </div>
            
<!--Password Section-->
<!--Email Section-->
<div class="email">
    <label for="email" class="l-input">Email</label>
    <input type="email" name="email" id="f-name" class="I-input" required>
</div>

<div class="l-password">
    <label for="l-password" class="l-input">Password</label>
    <input type="password" name="l-password" id="l-password" class="I-input" required>
</div>

<!--Repeat Password Section-->

<div class="r-password">
    <label for="r-password" class="l-input">Repeat Password</label>
    <input type="password" name="r-password" id="r-password" class="I-input" required>
</div>


            <!--AGE SECTION-->
            <div class="age">
                <label for="age" class="l-input">Age</label>
                <input type="number" name="age" id="age" class="I-input" required>
            </div>

            <!--Address and Contact Section-->
            
            <div class="phone">
                <label for="phone" class="l-input">Tel</label>
                <input type="phone" name="phone" id="phone" class="I-input" required>
            </div>     
            <!--PATIENT DISEASE-->          

            <div class="p-disease">
                <label for="p-disease" class="l-input">Patient Disease</label>
                <input type="text" name="p-disease" id="p-disease" class="I-input" required>
            </div>

            <!--BLOOD GROUP-->
            
            <div class="b-group">
                <label for="b-group" class="l-input">Blood Group</label>
            <select id="b-select" name="p-bg"  >
                <option class="bg-gradient-danger text-white"value="A">A</option>
                <option  class="bg-gradient-danger text-white" value="B">B</option>
                <option class="bg-gradient-danger text-white" value="AB">AB</option>
                <option class="bg-gradient-danger text-white"  value="O">O</option>
            </select>
            </div>
  <!--Gender-->
  
  <div class="m-status">
      <label for="p_gender" class="l-input">Gender</label>
  <select id="b-select" name="p-gender">
      <option class="bg-gradient-danger text-white" value="Male">male</option>
      <option class="bg-gradient-danger text-white" value="Female">female</option>
  </select>
  </div>




    </div>

<!--SUBMISSION SECTION-->
<input type="button" value="Submit Request" class= "mt-2 ml-3 rounded border-danger bg-gradient-danger p-1 text-white h6" class="click" id="click">
    <!--LOGIN INSTEAD-->
<div class="login-inst">
    <a class="text-white h6" href="login.php">Login instead?</a>
</div>
<!--END OF LOGIN INSTEAD-->


<!--Alert Box-->
<div class="hidden-submit text-center" style="display: none; top: 12em;">
    <h6>Do you Want to submit?</h6>
    <button type="submit" id="submit-yes">Yes</button>
    <button type="button" id="submit-no">No</button>

</div>
        </form>
    </div>
    
    
   </body>
   
<script src="../jquery-ui-1.13.2.custom/jquery-ui-1.13.2.custom/external/jquery/jquery.js"></script></script>
<script src="../jquery-ui-1.13.2.custom/jquery-ui-1.13.2.custom/jquery-ui.js"></script>
<script src="register.js"></script>
<?php include "../assets/connection/redirectedjs.php" ?>
</html>
<?php 

?>