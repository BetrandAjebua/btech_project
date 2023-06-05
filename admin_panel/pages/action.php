<?php    

require "../assets/connection/connect.php";


// This Section Describe The Delete Methods of both the  donor and the patients

if(!empty($_POST["del_id"])){

    $query1 =  $db->prepare("DELETE FROM patient WHERE p_id = $_POST[del_id]");
    $query1->execute();
}else if(!empty($_POST["delreq_id"])){
    $query1 =  $db->prepare("DELETE FROM patient_request WHERE pr_id = $_POST[delreq_id]");
    $query1->execute();
}else if(!empty($_POST["deld_id"])){
    $query1 =  $db->prepare("DELETE FROM donor WHERE d_id = $_POST[deld_id]");
    $query1->execute();
}else if(!empty($_POST["deldr_id"])){
    $query1 =  $db->prepare("DELETE FROM donor_request WHERE dr_id = $_POST[deldr_id]");
    $query1->execute();
}


// // This Section is for confirmation of  a request to  registration method


// DONOR CONFIRMATION
 if(!empty($_POST["confdr_id"])){
   $query2 = $db->prepare("INSERT INTO donor 
   (d_name, d_password, d_email, d_number, d_city, d_home_address, 
   d_blood_group, d_mstatus, guadian_name, guadian_number,
    guadian_home_address, d_age, reg_time)
   SELECT dr_name, dr_pass,dr_email, dr_number,	dr_city,	
   dr_home_address,	dr_bgroup, dr_marital_status, drg_name,
    drg_number, drg_address, dr_age,dr_time
   FROM donor_request WHERE dr_id = $_POST[confdr_id]" ); 

$query2->execute();
if(!empty($_POST["del_confdr_id"])){
    $query1 =  $db->prepare("DELETE FROM donor_request WHERE dr_id = $_POST[del_confdr_id]");
    $query1->execute();
}

 }
 // DONOR CONFIRMATION
   if(!empty($_POST["confpr_id"])){
    $query3 = $db->prepare("INSERT INTO patient
    (p_name, p_password, p_age, p_phone, p_disease, p_blood_group, p_gender, email, reg_time)
    SELECT pr_name, pr_password, pr_age, pr_phone, pr_disease, pr_blood_group, pr_gender, pr_email, pr_time	
    FROM patient_request WHERE pr_id = $_POST[confpr_id]" ); 
 
 $query3->execute();
 if(!empty($_POST["del_confpr_id"])){
     $query1 =  $db->prepare("DELETE FROM patient_request WHERE pr_id = $_POST[del_confpr_id]");
     $query1->execute();
 }
 
  }


?> 