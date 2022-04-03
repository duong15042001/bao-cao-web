<?php
include './db/connect.php';
if(isset($_GET["id"])){
    $id = $_GET["id"];

   $query= mysqli_query($conn, "DELETE FROM `donhang_ct` WHERE id_dh = $id");
   if($query){
       header('location: view-donhang.php');
   }else{
       echo ' loi r';
   }
}
?>