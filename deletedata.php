<?php
include "config.php";

$idd=$_GET['id'];
$sql = "DELETE FROM `crudddimg` WHERE `id` ='$idd' ;";
$result = mysqli_query($conn, $sql);
//$data=mysqli_fetch_array($result);
if($result){
         echo "<script type=\"text/javascript\">
              alert(\"Data Deleted Successfully\");
              window.location = \"index.php\"
              </script>";
    }
    else{
        die(mysqli_error($conn));
      }


?>