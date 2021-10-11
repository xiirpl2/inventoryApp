<?php
include 'koneksi.php';
// if(i sset($_POST["register"])){
//   if (registrasi($_POST)>
// 0){ echo "
// <script>
//   alert('user baru berhasil ditambahkan');
// </script>
// "; } else { echo mysqli_error($konek); } } ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Register</title>

    <style type="text/css">
      body {
        background-color: #edf2f7;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-7 col-lg-5">
          <div class="card shadow-lg">
            <div class="card-body">
              <h3 class="mb-5 mt-3 text-center text-primary">REGISTER</h3>

              <form action="" method="post">
                <div class="mb-3">
                  <input type="email" name="email" class="form-control" placeholder="Email" />
                </div>

                <div class="mb-3">
                  <input type="password" name="password" class="form-control" placeholder="Password" />
                </div>
                <div class="mb-3">
                  <input type="password" name="password2" class="form-control" placeholder="Confirm Password" />
                </div>

                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                  <label class="form-check-label" for="exampleCheck1">Remember</label>
                </div>

                <div class="d-grid gap-2">
                  <button class="btn btn-primary" type="submit" name="register">REGISTER</button>
                </div>

                <p class="mt-5">Already Have Account ?<a href="formlogin.php" class="text-decoration-none"> Log In</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
