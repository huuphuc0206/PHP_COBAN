<?php
session_start();
// xóa session
// unset($_SESSION['admin']);'
session_unset();
header('location:login.php');
