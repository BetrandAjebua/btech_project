

<?php
if(!empty($_POST)){
    try{
        if(!isset($_POST["submit"])){
            $dname = htmlentities($_POST["f-name"]);
            $password = htmlentities($_POST["password"]);
          
            $query= $db->prepare("SELECT * FROM  admin WHERE a_name='$dname' AND a_password='$password'");
                $query->execute();
               if($query->rowCount()>0){
                header("Location: ../admin_panel/index.php");
               }
        }
    
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo("Error: ".$e->getMessage());
    }
}
?>
<a href=""></a>