<?php
include './assets/db/connect.php';
session_start();
//unset( $_SESSION['user']);
//xóa tất tật sesion
session_destroy();
header('location: index.php');
?>