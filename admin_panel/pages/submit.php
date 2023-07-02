
<?php
if(isset($_POST[name])){
    try{
        if(!isset($_POST["submit"])){
            $dname = htmlentities($_POST["f-name"]);
            $password = htmlentities($_POST["password"]);
          
            $query= $db->prepare("SELECT * FROM  admin WHERE a_name='$dname' AND a_password='$password'");
                $query->execute();
               if($query->rowCount()>0){
                header("Location: ../index.php");
                echo "yes";
               }
        }
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo("Error: ".$e->getMessage());
    }
}
?>