<?php
include './admin/db/connect.php';
session_start();
//unset( $_SESSION['user']);
//xóa tất tật sesion
session_destroy();
header('location: login.php');
?>