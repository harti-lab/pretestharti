<?php
session_start();
include("../koneksidb.php");
$tanggal=date("Y-m-d");
$nohp=$_GET['nohp'];
$password=$_GET['pswd'];
$_SESSION['nohp']=$nohp;
$negara=$_GET['neg'];
$angka=range(0,9); 
shuffle($angka); 
$ambilangka=array_rand($angka,4);
$angkastring=implode("-",$ambilangka); 
$sql="insert into tb_user (no_hp,password,negara,otp,tanggal,aktivasi) value ('$nohp',md5('$password'),'$negara','$angkastring','$tanggal',0)";
$data=mysqli_query($koneksi,$sql);
if($data)
{
    echo "<script language='javascript'>
    alert('Registrasi berhasil disimpan');
    document.location='verifikasi.php';
    </script>";
}
else
{
    echo "<script language='javascript'>
    alert('No Handphone sudah pernah didaftar');
    document.location='index.php';
    </script>";
}
?>