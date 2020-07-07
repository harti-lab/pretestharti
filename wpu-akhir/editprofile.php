<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulis Registrasi</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.min.js"></script>

</head>

<body>
  <?php
  include("koneksidb.php");
  $sql = "select * from tb_profile where no_hp='$_GET[no]'";
  $data = mysqli_query($koneksi, $sql);
  if (mysqli_num_rows($data) > 0) {
    $hasil = mysqli_fetch_array($data);
  ?>

    <div class="container">
      <form action="simpanprofile.php" class="was-validated" class="form-inline" enctype="multipart/form-data" method="post">
        <div class="form-group row">
          <label for="nohp">Foto</label>
          <img src="foto/<?php echo $hasil['no_hp'] . '.jpg'; ?>" width="300px">
          <input type="file" class="form-control" id="foto" placeholder="Masukkan No Handphone" name="foto">
        </div>
        <div class="form-group row">
          <label for="pwd">Prestasi </label>
          <input type="text" class="form-control" id="pres" placeholder="Masukkan prestasi" name="prestasi" value="<?php echo $hasil['prestasi']; ?>">
          <input type="hidden" name="nohp" value="<?php echo $_GET['no']; ?>">
        </div>
        <div class="form-group row">
          <label for="pwd">Keterangan </label>
          <textarea name="keterangan" class="form-control"> <?php echo $hasil['prestasi']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
  <?php
  } else {
    echo "Data tidak diketemukan";
  }
  ?>
</body>

</html>