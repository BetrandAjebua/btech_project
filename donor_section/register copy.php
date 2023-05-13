<?php require "../connect.php"?>



<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="../bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="../jquery-ui-1.13.2.custom/jquery-ui-1.13.2.custom/jquery-ui.structure.css">
    <link rel="stylesheet" href="../jquery-ui-1.13.2.custom/jquery-ui-1.13.2.custom/jquery-ui.theme.css">
    <link rel="stylesheet" href="../jquery-ui-1.13.2.custom/jquery-ui-1.13.2.custom/jquery-ui.css"> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBMS-login</title>
</head>

<body class="container-fluid bg-dark">
    
    <p class="opa bg-dark" style="display:none;"></p>
    <!--LOGIN FORM FOR THE DONOR-->
    <div class="form-con text-danger col-8 bg-white">
        <form action="<?php $_SELF?>"  method="post" role="form">
            <h1 class="text-center ">Donor Registration</h1>

            <!--NAME SECTION-->

    <div>
        
            <div class="f-name">
                <label for="f-name" class="l-input">First Name</label>
                <input type="text" name="f-name" id="f-name" class="I-input" required>
            </div>
            
<!--Password Section-->

<div class="l-password">
    <label for="l-password" class="l-input">Password</label>
    <input type="password" name="l-password" id="l-password" class="I-input" required>
</div>

<!--Repeat Password Section-->

<div class="r-password">
    <label for="r-password" class="l-input">Password</label>
    <input type="password" name="r-password" id="r-password" class="I-input" required>
</div>


            <!--AGE SECTION-->
            <div class="age">
                <label for="age" class="l-input">Age</label>
                <input type="number" name="age" id="age" class="I-input" required>
            </div>

            <!--Address and Contact Section-->

            <div class="email">
                <label for="email" class="email">Email</label>
                <input type="email" name="email" id="email" class="I-input" required>
            </div>
            
            <div class="phone">
                <label for="phone" class="l-input">Tel</label>
                <input type="phone" name="phone" id="phone" class="I-input" required>
            </div>
           
            
            <div class="city">
                <label for="city" class="l-input">City</label>
                <input type="text" name="city" id="city" class="I-input" required>
            </div>
            

            <div class="h-address">
                <label for="h-address" class="l-input">Home Address</label>
                <input type="text" name="h-address" id="h-address" class="I-input" required>
            </div>

            <!--BLOOD GROUP-->
            
            <div class="b-group">
                <label for="b-group" class="l-input">Blood Group</label>
            <select id="b-select" name="b_group" >
                <option class="bg-danger text-white"value="A">A</option>
                <option  class="bg-danger text-white" value="B">B</option>
                <option class="bg-danger text-white" value="AB">AB</option>
                <option class="bg-danger text-white"  value="O">O</option>
            </select>
            </div>
  <!--Marital Satus-->
  
  <div class="m-status">
      <label for="b-group" class="l-input">Marital Status</label>
  <select id="b-select" name="m_status">
      <option class="bg-danger text-white" value="Maried">Married</option>
      <option class="bg-danger text-white" value="Single">Single</option>
  </select>
  </div>


<!--LOGIN INSTEAD-->
<div class="login-inst">
    <a class="text-danger h6" href="login.html">Login instead?</a>
</div>
<!--END OF LOGIN INSTEAD-->

    </div>

<hr>
<!--Parents-->
<h3>Parent or Guardian Info <p id="r-status"></p></h3>

<div class="p-name">
    <label for="p-name" class="l-input">Name</label>
    <input type="text" name="p-name" id="p-name" placeholder="Parent or guardian" class="I-input" required>
</div>

<div class="p-number">
    <label for="p-number" class="l-input">Phone Number</label>
    <input type="text" name="p-number" id="p-number"  class="I-input" required>
</div>

<div class="ph-address">
    <label for="ph-address" class="l-input">Home Address</label>
    <input type="text" name="ph-address" id="ph-address"  class="I-input" required>
</div>

<!--SUBMISSION SECTION-->
<input type="button" value="submit Request" id="click">
    
<!--Alert Box-->
<div class="hidden-submit text-center" style="display: none; position: absolute bg-danger text-white; top: 23em;">
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
</html>