<?php require_once "../assets/connection/connect.php"; ?>
<?php
try {
    $test = "no";
    if (!empty($_POST)) {
        $dname = htmlentities($_POST["f-name"]);
        $password1 = htmlentities($_POST["password"]);

        $query = $db->prepare("SELECT * FROM donor WHERE d_name='$dname'");
        $query->execute();
        $test = $password1;
        if ($query->rowCount() > 0) {
            foreach ($query->fetchAll(PDO::FETCH_OBJ) as $key => $value) {
               if(password_verify($password1 , $value->d_password)){
header("Location: ../index.php");
               }
            }
        }
    }

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo ("Error: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="head.css">
    <link rel="stylesheet" href="../bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../jquery-ui-1.13.2.custom/jquery-ui-1.13.2.custom/jquery-ui.structure.css">
    <link rel="stylesheet" href="../jquery-ui-1.13.2.custom/jquery-ui-1.13.2.custom/jquery-ui.theme.css">
    <link rel="stylesheet" href="../jquery-ui-1.13.2.custom/jquery-ui-1.13.2.custom/jquery-ui.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../assets/connection/head.php" ?>
    <title>BBMS-login</title>
</head>
<?php include "../assets/connection/header.php" ?>

<body class="container-fluid bg-dark">
    <!--LOGIN FORM FOR THE DONOR-->
    <div class="form-con text-danger col-9 bg-white">
        <form action="<?php $_SELF ?>" method="post" role="form">
            <h1 class="text-center mb-5">Donor Login</h1>

            <!--NAME SECTION-->

            <div class="container-alignment">
                <div class="f-name">
                    <label for="f-name" class="l-input">Full Names</label>
                    <input type="text" name="f-name" id="f-name" class="I-input" required>
                </div>
                <br>
                <div class="password">
                    <label for="l-name" class="l-input">Password</label>
                    <input type="password" name="password" id="l-name" class="I-input" required>
                </div>
                <br>
                <input type="submit" value="Submit" class="bg-danger text-white h6 p-1">
                <a href="register.html" class="text-danger reg-log">Register?</a>
                <br>
            </div>

        </form>
    </div>
    <script src="jquery.js"></script>
    </script>
    <script src="jquery-ui-1.13.2.custom/jquery-ui-1.13.2.custom/jquery-ui.js"></script>
    <script src="register.js"></script>
    <?php include "../assets/connection/redirectedjs.php" ?>
</body>

</html>