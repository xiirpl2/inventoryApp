<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.38.0/js/tempusdominus-bootstrap-4.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.38.0/css/tempusdominus-bootstrap-4.min.css" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <title>Peminjaman Barang</title>
  </head>
  <body style="background-color: #edf2f7;">
    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container-fluid text-white">
        <a class="navbar-brand" href="#">
          <img src="../assets/img/13 bdg.png" alt="logo-13" width="30" height="24" class="d-inline-block align-text-top" />
          Inventory13
        </a>
        <!-- <a class="navbar-brand" href="#">InventoryApp</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="bi bi-box-arrow-in-left"></i>Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Awal form -->
    <div class="container-fluid" style="padding-top: 3rem">
      <div class="row pt-3 pb-3" >
        <div class="col-md-3">
          <h4 class="">Peminjaman <span style="font-size: 14px; color: #bfbfbf">Tambah Peminjaman Baru</span></h4>
        </div>
        <div class="col-md-9 text-end"><i class="bi bi-house-door-fill"></i><a href="dashboard.html" style="text-decoration: none; color: black"> home > <span style="color: #bfbfbf" > Dashboard </span></a></div>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="row p-2">
              <div class="col-md-9">
                <h6 class="card-title">Peminjaman Barang</h6>
              </div>
              <div class="col-md-3">
                <button class="btn btn-info text-white"><i class="bi bi-reply-fill"></i> Kembali</button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="custName" class="form-label">Nama Peminjam</label>
                <input type="text" class="form-control" name="" />
              </div>
              <div class="form-group">
                <label for="custName" class="form-label">Kelas</label>
                <input type="text" class="form-control" name="" />
              </div>
                <div class="form-group">
                <label for="custName" class="form-label">Alat Yang Dipinjam</label>
                <input type="text" class="form-control" name="" />
              </div>
                <div class="form-group">
                <label for="custName" class="form-label">QTY</label>
                <input type="text" class="form-control" name="" />
              </div>
                <div class="form-group">
                <label for="custName" class="form-label">Tgl.Pinjam</label>
                <input type="text" class="form-control" name="" placeholder="12/09/21" />
              </div>
                <div class="form-group">
                <label for="custName" class="form-label">Tgl.Kembali</label>
                <input type="text" class="form-control" name="" placeholder="12/09/21" />
              </div>
              <div class="form-group">
                <label for="custName" class="form-label">Status</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="1">..</option>
                  <option value="2">...</option>
                </select>
              </div>
              <div class="form-group">
                <label for="custName" class="form-label">No.Hp</label>
                <input type="text" class="form-control" name="" />
              </div>
              <div class="form-group">
                <label for="custName" class="form-label">Keterangan(Opsional)</label>
                <input type="text" class="form-control" name="" />
              </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  <br><br>
    <footer class="bg-primary text-white text-center p-2">
    <p>Copyright &copy; 2021 - Rpl2 All rights reserved.</p>
    </footer>

    <!-- Akhir form -->

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

