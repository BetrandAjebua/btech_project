<?php    

require "../assets/connection/connect.php";

if(!empty($_POST["del_id"])){
    // Condition for Registered Patient
    $query1 =  $db->prepare("DELETE FROM patient WHERE p_id = $_POST[del_id]");
    $query1->execute();
}else if(!empty($_POST["delreq_id"])){
    $query1 =  $db->prepare("DELETE FROM patient_request WHERE pr_id = $_POST[delreq_id]");
    $query1->execute();
}else{
    echo "Data for patient  not found";
}


?>