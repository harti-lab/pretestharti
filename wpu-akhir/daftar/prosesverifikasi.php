<?php
session_start();
include("../koneksidb.php");
$nohp = $_SESSION['nohp'];
$otp = $_GET['otp1'] . "-" . $_GET['otp2'] . "-" . $_GET['otp3'] . "-" . $_GET['otp4'];
$sqlotp = "select * from tb_user where no_hp='$nohp' and otp='$otp'";
$dataotp = mysqli_query($koneksi, $sqlotp);
if (mysqli_num_rows($dataotp) > 0) {
    $sql = "update tb_user set aktivasi=1 where no_hp='$nohp'";
    $data = mysqli_query($koneksi, $sql);
    $sqlprofile = "insert into tb_profile (no_hp) value ('$nohp')";
    $dataprofile = mysqli_query($koneksi, $sqlprofile);
    echo "<script language='javascript'>
    alert('OTP sudah sesuai');
    document.location='../index.php';
    </script>";
} else {
    echo "<script language='javascript'>
    alert('Kode OTP salah');
    document.location='verifikasi.php';
    </script>";
}
