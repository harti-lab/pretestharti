<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulis Registrasi</title>
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script src="js/sb-admin-2.min.js"></script>

</head>

<body>

  <<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

              <div class="col-lg">
                <div class="p-5">
                  <form class="user" action="proseslogin.php" method="GET">
                    <div class="form-group">
                      <input name="nohp" type="text" class="form-control" placeholder="No. HP" required>
                    </div>
                    <div class="form-group">
                      <input name="pswd" type="password" class="form-control" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      LOGIN
                    </button>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

    </div>


</body>

</html>