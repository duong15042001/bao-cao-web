<?php
include '../assets/db/connect.php';
if(isset($_GET["id"])){
    $id = $_GET["id"];

   $query= mysqli_query($conn, "delete from category where id=$id");
   if($query){
       header('location: view-danhmuc.php');
   }else{
       echo ' loi r';
   }
}
?>