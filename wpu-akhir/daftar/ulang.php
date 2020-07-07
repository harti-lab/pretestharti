<?php
session_start();
include("../koneksidb.php");
$nohp=$_SESSION['nohp'];
$angka=range(0,9); 
shuffle($angka); 
$ambilangka=array_rand($angka,4);
$angkastring=implode("-",$ambilangka); 
$sql="update tb_user set otp='$angkastring' where no_hp='$nohp'";
$data=mysqli_query($koneksi,$sql);
if($data)
{
    echo "<script language='javascript'>
    alert('OTP berhasil dikirim ulang');
    document.location='verifikasi.php';
    </script>";
}
else
{
    echo "<script language='javascript'>
    alert('OTP gagal dikirim ulang');
    document.location='verifikasi.php';
    </script>";
}

?>


