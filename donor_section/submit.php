<?php
try{
    if(!empty($_POST)){
        $dname = htmlentities($_POST["f-name"]);
        $password = password_hash(htmlentities($_POST["l-password"]), PASSWORD_DEFAULT);
        $rpas = htmlentities($_POST["r-password"]);
        $age = htmlentities($_POST["age"]);
        $demail = htmlentities($_POST["email"]);
        $tel = htmlentities($_POST["phone"]);
        $city = htmlentities($_POST["city"]);
        $haddress = htmlentities($_POST["h-address"]);
        $bgroup = htmlentities($_POST["b_group"]);
        $mstatus = htmlentities($_POST["m_status"]);
        $pname = htmlentities($_POST["p-name"]);
        $pnumber= htmlentities($_POST["p-number"]);
        $phaddress = htmlentities($_POST["ph-address"]);

        if($dname!=""){
            $query= $db->prepare("INSERT INTO donor_request (dr_name, dr_pass	,dr_email, dr_number,	dr_city,	dr_home_address,
        	dr_bgroup, dr_marital_status, drg_name, drg_number, drg_address, dr_age) VALUES
             ('$dname','$password', '$demail','$tel', '$city', '$haddress', '$bgroup','$mstatus','$pname', '$pnumber', '$phaddress', '$age')");
            $exe = $query->execute();
        }
            if(!$exe){
                echo ("Submission Failed");
            }else{
                header("location:../index.php");
            }
    }

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo("Error: ".$e->getMessage());
}
?>