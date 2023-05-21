<?php
try{
    if(!isset($_POST["submit"])){
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
            $query= $db->prepare("INSERT INTO donor (d_name, d_password	,d_email, d_number,	d_city,	d_home_address,
        	d_blood_group, d_mstatus, guadian_name, guadian_number, guadian_home_address, d_age	) VALUES
             ('$dname','$password', '$demail','$tel', '$city', '$haddress', '$bgroup','$mstatus','$pname', '$pnumber', '$phaddress', '$age')");
            $exe = $query->execute();
        }
            if(!$exe){
                echo ("Submission Failed");
            }
    }

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo("Error: ".$e->getMessage());
}
?>