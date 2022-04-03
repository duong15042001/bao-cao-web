<?php

if(isset($_GET["id"])){
    $id = $_GET["id"];

    $conn = mysqli_connect('localhost','root','','baocao');
   $query= mysqli_query($conn, "delete from member where id=$id");
   if($query){
       header('location: view-nguoidung.php');
   }else{
       echo ' loi r';
   }
}
?>