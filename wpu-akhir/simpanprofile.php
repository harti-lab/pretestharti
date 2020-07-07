<?php
session_start();
include("koneksidb.php");
$nohp = $_POST['nohp'];
$prestasi = $_POST['prestasi'];
$keterangan = $_POST['keterangan'];
$folder = "foto/";
$file = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$namafile = $nohp . ".jpg";
$tujuan = $folder . $namafile;
$sql = "update tb_profile set prestasi='$prestasi',keterangan='$keterangan' where no_hp='$nohp'";
$data = mysqli_query($koneksi, $sql);
if ($data) {

    if (move_uploaded_file($tmp, $tujuan)) {
        echo "<script language='javascript'>
    alert('Profile berhasil diupdate');
    document.location='memberarea.php?nohp=$nohp';
    </script>";
    }
} else {
    echo "<script language='javascript'>
    alert('Profile gagal diupdate');
    document.location='memberarea.php?nohp=$nohp';
    </script>";
}
