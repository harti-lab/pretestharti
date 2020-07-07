<?php
session_start();
unset($_SESSION['nohp']);
header("location:index.php");
?>
