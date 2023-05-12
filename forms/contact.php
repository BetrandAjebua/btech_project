<?php
require "../connect.php";

  try{
    if(!isset($_POST["submit"])){
      $user= htmlentities($_POST["name"]);
      $email= htmlentities($_POST["email"]);
      $subject= htmlentities($_POST["subject"]);
      $message= htmlentities($_POST["message"]);
      
      $query = "INSERT INTO contact_us (user_name,	user_email,	user_subject,	user_message)
       VALUES ('$user', '$email', '$subject','$message')";
       $prepare= $db->prepare($query);
       $er= $prepare->execute();
  echo($er);
  header("location: ../index.php");
    }
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch(PDOException $e){
    echo $e->getMessage();
  }

?>
