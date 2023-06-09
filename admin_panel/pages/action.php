<?php

require "../assets/connection/connect.php";


// This Section Describe The Delete Methods of both the  donor and the patients

if (!empty($_POST["del_id"])) {

    $query1 =  $db->prepare("DELETE FROM patient WHERE p_id = $_POST[del_id]");
    $query1->execute();
} else if (!empty($_POST["delreq_id"])) {
    $query1 =  $db->prepare("DELETE FROM patient_request WHERE pr_id = $_POST[delreq_id]");
    $query1->execute();
} else if (!empty($_POST["deld_id"])) {
    $query1 =  $db->prepare("DELETE FROM donor WHERE d_id = $_POST[deld_id]");
    $query1->execute();
} else if (!empty($_POST["deldr_id"])) {
    $query1 =  $db->prepare("DELETE FROM donor_request WHERE dr_id = $_POST[deldr_id]");
    $query1->execute();
}


// // This Section is for confirmation of  a request to  registration method


// DONOR CONFIRMATION
if (!empty($_POST["confdr_id"])) {
    $query2 = $db->prepare("INSERT INTO donor 
   (d_name, d_password, d_email, d_number, d_city, d_home_address, 
   d_blood_group, d_mstatus, guadian_name, guadian_number,
    guadian_home_address, d_age, reg_time)
   SELECT dr_name, dr_pass, dr_email, dr_number,	dr_city,	
   dr_home_address,	dr_bgroup, dr_marital_status, drg_name,
    drg_number, drg_address, dr_age,dr_time
   FROM donor_request WHERE dr_id = $_POST[confdr_id]");

    $query2->execute();
    if (!empty($_POST["del_confdr_id"])) {
        $query1 =  $db->prepare("DELETE FROM donor_request WHERE dr_id = $_POST[del_confdr_id]");
        $query1->execute();
    }
}
// DONOR CONFIRMATION
if (!empty($_POST["confpr_id"])) {
    $query3 = $db->prepare("INSERT INTO patient
    (p_name, p_password, p_age, p_phone, p_disease, p_blood_group, p_gender, email, reg_time)
    SELECT pr_name, pr_password, pr_age, pr_phone, pr_disease, pr_blood_group, pr_gender, pr_email, pr_time	
    FROM patient_request WHERE pr_id = $_POST[confpr_id]");

    $query3->execute();
    if (!empty($_POST["del_confpr_id"])) {
        $query1 =  $db->prepare("DELETE FROM patient_request WHERE pr_id = $_POST[del_confpr_id]");
        $query1->execute();
    }
}

// Notification Deletion Section
if (!empty($_POST["notification_id"])) {

    $query1 =  $db->prepare("DELETE FROM contact_us WHERE user_id = $_POST[notification_id]");
    $query1->execute();
}


//Sending Email Section 
use PHPMailer\PHPMailer\PHPMailer;

require "./PHPMailer-master/src/Exception.php";
require "./PHPMailer-master/src/PHPMailer.php";
require "./PHPMailer-master/src/SMTP.php";


$mail =  new PHPMailer(true);

if (!empty($_POST["semail"])) {

    $smail = $_POST["semail"];
    $remail = $_POST['remail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $receiver_id = $_POST['receiver_id'];



    try {





        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = "kingsbloodbank@gmail.com";
        $mail->Password = 'lwxzfxrtydjwbxal';



        $mail->SMTPSecure = "tls";
        $mail->Port = '587';

        $mail->setFrom($remail);
        $mail->addAddress($remail);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;

        $check = $mail->send();
        if ($check) {
            $saveMessage = $db->prepare("INSERT INTO sentemail ( receiver, `subject`, `message`,  receiver_id) 
            VALUES ('$remail', '$subject', '$message',  '$receiver_id')")->execute();

            echo '<div class="alert-success"><span>Message Sent</span> </div>';
            header("location: donor.php");
        }
    } catch (Exception $e) {
        echo  '<div class="alert-error"><span>' . $e->getMessage() . '</span> </div>';
    }
}
// Section Ends


// Notification Messages Response


if (!empty($_POST["cl_id"])) {

    $remail = $_POST['remail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $receiver_id = "ExClient" . $_POST['cl_id'];

    try {





        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = "kingsbloodbank@gmail.com";
        $mail->Password = 'lwxzfxrtydjwbxal';



        $mail->SMTPSecure = "tls";
        $mail->Port = '587';

        $mail->setFrom($remail);
        $mail->addAddress($remail);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;

        $check = $mail->send();
        if ($check) {
            $saveMessage = $db->prepare("INSERT INTO sentemail ( receiver, `subject`, `message`,  receiver_id) 
            VALUES ('$remail', '$subject', '$message',  '$receiver_id')")->execute();

            echo '<div class="alert-success"><span>Message Sent</span> </div>';
            header("location: donor.php");
        }
    } catch (Exception $e) {
        echo  '<div class="alert-error"><span>' . $e->getMessage() . '</span> </div>';
    }
}



// Adding Donation
if (isset($_POST['qnt'])) {

    try {

        $quantity = ($_POST['qnt']);
        $d_id = ($_POST['d_id']);
        // echo ($d_id."  space  ");
        $b_type = ($_POST['btype']);
        echo $b_type;
        if ($b_type == 'A') {
            $b_id = 1;
            // echo ($b_id."  space  ".$b_type);
        } else if ($b_type == 'B') {
            $b_id = 2;
            // echo ($b_id."  space  ".$b_type);
        } else if ($b_type == 'AB') {
            $b_id = 3;
            // echo ($b_id."  space  ".$b_type);
        } else if ($b_type == 'O') {
            $b_id = 4;
            // echo ($b_id."  space  ".$b_type);
        }
        $tr_id  = $db->prepare("SELECT COUNT(*) FROM donation");
        $tr_id->execute();
        $tr_id = "Donation$$" . $b_id . "_/d" . $d_id . "tr_" . $tr_id->fetch()[0];
        // echo ($tr_id);
        $query_insert = $db->prepare("INSERT INTO donation (donor_id, blood_id, quantity, donation_id) VALUES ('$d_id', '$b_id', '$quantity', '$tr_id')");
        $query_fetch = $db->prepare("SELECT quantity from blood_type WHERE bloodId='$b_id'");
        $query_fetch->execute();
        $currentVal = $query_fetch->fetch()[0];
        $finalVal = $currentVal + $quantity;
        // echo($finalVal);
        $query_update = $db->prepare("UPDATE blood_type SET quantity = $finalVal WHERE bloodID =' $b_id'")->execute();
        $query_insert->execute();
        header("location: donor.php");
    } catch (PDOException $e) {
    }
}



// Making  Blood transfution
if (isset($_POST['p_qnt'])) {

    try {

        $quantity = ($_POST['p_qnt']);
        $p_id = ($_POST['pa_name']);
        // echo ($p_id."  space  ");
        $b_type = ($_POST['btype']);
        echo $b_type;
        if ($b_type == 'A') {
            $b_id = 1;
            // echo ($b_id."  space  ".$b_type);
        } else if ($b_type == 'B') {
            $b_id = 2;
            // echo ($b_id."  space  ".$b_type);
        } else if ($b_type == 'AB') {
            $b_id = 3;
            // echo ($b_id."  space  ".$b_type);
        } else if ($b_type == 'O') {
            $b_id = 4;
            // echo ($b_id."  space  ".$b_type);
        }
        $tr_id  = $db->prepare("SELECT COUNT(*) FROM transfusion");
        $tr_id->execute();
        $tr_id = "Trans" . $b_id . "_/d" . $p_id . "tr_" . $tr_id->fetch()[0];
        // echo ($tr_id);
        $query_insert = $db->prepare("INSERT INTO transfusion (patient_id, blood_id, quantity, transfution_id) VALUES ('$p_id', '$b_id', '$quantity', '$tr_id')");
        $query_fetch = $db->prepare("SELECT quantity from blood_type WHERE bloodId='$b_id'");
        $query_fetch->execute();
        $currentVal = $query_fetch->fetch()[0];
        $finalVal = $currentVal - $quantity;
        // echo($finalVal);
        $query_update = $db->prepare("UPDATE blood_type SET quantity = $finalVal WHERE bloodID =' $b_id'")->execute();
        $query_insert->execute();
        header("location: ../index.php");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
