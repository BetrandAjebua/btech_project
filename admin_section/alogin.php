<?php require "../assets/connection/connect.php"?>
<?php include "submit.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="reg.css">
    <link rel="stylesheet" href="../bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../jquery-ui-1.13.2.custom/jquery-ui-1.13.2.custom/jquery-ui.structure.css">
    <link rel="stylesheet" href="../jquery-ui-1.13.2.custom/jquery-ui-1.13.2.custom/jquery-ui.theme.css">
    <link rel="stylesheet" href="../jquery-ui-1.13.2.custom/jquery-ui-1.13.2.custom/jquery-ui.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "../assets/connection/head.php"?>
    <title>admin-login</title>
</head>

<body class="container-fluid bg-dark">
<?php require "../assets/connection/header.php"?>

    <!--LOGIN FORM FOR THE DONOR-->
    <div class="form-con text-danger col-9 bg-white">
        <form action="<?php $_SELF?>" method="post" role="form" >
            <p><i>system will be locked if you enter Wrong password more than 5 times</i></p>
            <h1 class="text-center mb-5">Admin Login</h1>

            <!--NAME SECTION-->

            <div class="container-alignment">
                <div class="f-name">
                    <input type="text" name="f-name" id="f-name"  placeholder="Username" class="I-input" required>
                </div>
                <br>
                <br>
                <div class="password">

                    <input type="password" name="password" placeholder="Enter Password" id="l-name" class="I-input" required>
                </div>
                <br>
                <button type="submit" class="bg-white text-danger rounded-3 h6 p-1" >Submit</button>
                <br>
            </div>

        </form>

        <script src="jquery.js"></script></script>
        <script src="jquery-ui-1.13.2.custom/jquery-ui-1.13.2.custom/jquery-ui.js"></script>
        <script src="register.js"></script>
        <?php include "../assets/connection/redirectedjs.php" ?>
</body>

</html>
