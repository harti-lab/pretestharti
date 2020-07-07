<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi OTP</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>

</head>
<body>
<?php
session_start();
$nohp=$_SESSION['nohp'];
?>
<div class="container">
  <form action="prosesverifikasi.php" class="was-validated" class="form-inline">
    <div class="form-group row">
      <label for="nohp">OTP</label>
      <div class="col-md-2">
        <input type="number" class="form-control" id="otp1" placeholder="otp" name="otp1" required>
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" id="otp2" placeholder="otp" name="otp2" required>
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" id="otp3" placeholder="otp" name="otp3" required>
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" id="otp4" placeholder="otp" name="otp4" required>      
      </div>
      <div class="invalid-feedback">Silahkan diisi </div>
    </div>
    <button type="submit" class="btn btn-primary">Verifikasi</button>
<?php
    echo "<a href='ulang.php?no=$_SESSION[nohp]' class='btn btn-success'>Kirim Ulang</a>";
?>
  </form>
</div>

</body>
</html>

    
</body>
</html>