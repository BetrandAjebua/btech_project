<?php require_once "../connect.php";
$query="INSERT INTO admin (name, email,  password, dob, address) VALUES  ('BETO','BE@GMAIL.COM', '11111','14/10/2022', 'bUEA')";
$db->prepare($query)->execute();

?>