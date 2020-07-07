<?php
include("koneksidb.php");
$nohp=$_GET['nohp'];
$password=md5($_GET['pswd']);
$sql="select * from tb_user where no_hp='$nohp' and password='$password' and aktivasi=1";
$data=mysqli_query($koneksi,$sql);
if(mysqli_num_rows($data)>0)
{
    include "memberarea.php";
}
else
{
    echo "<script language='javascript'>
    alert('no handphone dan password tidak sesuai');
    document.location='index.php';
    </script>";
}
