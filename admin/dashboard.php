<!DOCTYPE html>
<html lang="en">
  <html>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />

    <!-- Mycss -->
    <link rel="stylesheet" href="../assets/style.css">
  
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  </html>

    <title>Dashboard</title>
  </head>
  <body>
    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container-fluid text-white">
        <a class="navbar-brand" href="#">
          <img src="../assets/img/13 bdg.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
          Inventory13
        </a>
        <!-- <a class="navbar-brand" href="#">InventoryApp</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="../home.html"><i class="bi bi-box-arrow-in-left"></i>Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
    <div class="container-fluid">
      <div class="row " style="padding-top: 4rem;">
        <div class="col-md-3">
          <h5>Dashboard</h5>
        </div>
        <div class="col-md-9 text-end"><i class="bi bi-house-door-fill"></i><a href="dashboard.php" style="text-decoration: none; color: black"> home</a></div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md">
          <h1 class="text-center das-title">InventoryApp</h1>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="container">
  <div class="row">
    <div class="col-md-6 text-center mb-3">
      <a href="tabel-alat.php"><button type="button" class="btn btn-primary btn-lg">Data Alat-Alat</button></a>
    </div>
    <div class="col-md-6 text-center mb-3">
      <a href="tabel-peminjaman.php"><button type="button" class="btn btn-primary btn-lg">Data Peminjaman Alat</button></a>
    </div>
    <!-- <div class="col-md-4">
      <button type="button" class="btn btn-primary btn-lg">Data Peminjaman Ruangan</button>
    </div> -->
  </div>
  </div>
  <br>
  
  <div class="container">
    <div class="row">
      <div class="col"><hr></div>
    </div>
  </div>

  <h2 class="text-center pb-5">Team Developer</h2>

  <!-- bag-profile -->
  <div class="container text-center">
    <div class="row">
      <div class="col-md-4 ">
        <img src="../assets/img/dhika.png" alt="Andhika" class="rounded-circle img-thumbnail mb-3">
      </div>
      <div class="col-md-4">
        <img src="../assets/img/tegar.png" alt="Tegar" class="rounded-circle img-thumbnail mb-3" > 
      </div>
      <div class="col-md-4">
        <img src="../assets/img/fikri.png" alt="fikri" class="rounded-circle img-thumbnail mb-3">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <img src="../assets/img/profile.png" alt="Andhika">
      </div>
      <div class="col-md-6">
        <img src="../assets/img/profile.png" alt="Andhika">
      </div>
    </div>
  </div>
  <br>
  <footer class="bg-primary text-white text-center p-2">
    <p>Copyright &copy; 2021 - Rpl2 All rights reserved.</p>
    </footer>
  

  <!-- Akhir bag-profile -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
