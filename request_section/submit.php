<?php require "../connect.php"?>

<?php
try{
    if(!isset($_POST["submit"])){
        $dname = htmlentities($_POST["f-name"]);
        $password = htmlentities($_POST["l-password"]);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $rpas = htmlentities($_POST["r-password"]);
        $age = htmlentities($_POST["age"]);
        $pemail = htmlentities($_POST["email"]);
        $tel = htmlentities($_POST["phone"]);
        $pgender =htmlentities($_POST['p-gender']);
        $pdisease = htmlentities($_POST["p-disease"]);
        $pbg = htmlentities($_POST["p-bg"]);


        $query= $db->prepare("INSERT INTO patient (p_name,	p_password,	p_age,	p_phone,	p_disease,	p_blood_group,	p_gender,	email) VALUES
             ('$dname','$password', '$age','$tel', '$pdisease', '$pbg ','$pgender', '$pemail')");
            $exe = $query->execute();
            if(!$exe){
                echo ("Submission Failed");
            }else{
                header("location: request.php");
            }
    }

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo("Error: ".$e->getMessage());
}
?>