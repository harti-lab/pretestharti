<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.min.js"></script>

</head>

<body>

  <div class="container">
    <?php
    include("koneksidb.php");
    session_start();
    $nohp = $_GET['nohp'];
    $sql = "select * from tb_profile where no_hp='$nohp'";
    $data = mysqli_query($koneksi, $sql);
    if (mysqli_num_rows($data) > 0) {
      $hasil = mysqli_fetch_array($data);
    ?>
      <div class="card" style="width:400px">
        <img class="card-img-top" src="foto/<?php echo $hasil['no_hp'] . '.jpg'; ?>" alt="Foto" style="width:100%">
        <div class="card-body">
          <h4 class="card-title"><?php echo $hasil['prestasi']; ?></h4>
          <p class="card-text"><?php echo $hasil['keterangan']; ?></p>
          <a href="editprofile.php?no=<?php echo $hasil['no_hp']; ?>" class="btn btn-primary">Edit</a>
          <a href="logout.php" class="btn btn-danger">Logout </a>
        </div>
      </div>
    <?php
    } else {
      echo "Data tidak diketemukan";
    }
    ?>
</body>

</html>