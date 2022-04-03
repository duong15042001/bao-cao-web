<?php
include '../assets/db/connect.php';
if(isset($_GET["id"])){
    $id = $_GET["id"];

   $query= mysqli_query($conn, "delete from product where id=$id");
   if($query){
       header('location: view-sanpham.php');
   }else{
       echo ' lỗi rồi';
   }
}
?>