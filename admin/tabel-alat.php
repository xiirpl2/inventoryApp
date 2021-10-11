<?php
  include "koneksi.php"
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Data Peminjaman Alat</title>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />

    <!-- Mycss -->
    <link rel="stylesheet" href="../assets/style.css" />

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  </head>
  <body style="background-color: #edf2f7">
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid text-white">
        <a class="navbar-brand" href="#">
          <img src="../assets/img/13 bdg.png" alt="" width="30" height="24" class="d-inline-block align-text-top" />
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
    <!-- End Navbar -->

    <!-- Judul -->
    <div class="container-fluid">
      <div class="row pt-3 pb-3">
        <div class="col-md-3">
          <h5 class="">Alat-alat <span style="font-size: 14px; color: #bfbfbf">Data Alat</span></h5>
        </div>
        <div class="col-md-9 text-end"><i class="bi bi-house-door-fill"></i><a href="dashboard.php" style="text-decoration: none; color: black"> home > <span style="color: #bfbfbf" > Dashboard </span> </a></div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="card">
        <!-- Search Button -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
              <div id="btn-search" class="pt-3">
                <form action="" method="POST">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="keyword" />
                    <input class="btn btn-outline-secondary" type="submit" name="submit" />
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Akhir Search Button -->

        <div class="container-fluid">
          <!-- Button Add Peminjaman Alat -->
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <a href="form_alat.php"><button type="button" class="btn btn-info btn-add text-white"><i class="bi bi-plus-square-fill"> </i> Alat Baru</button></a>
                <!-- Start Tabel -->
                <table class="table" border="1" cellpadding="5px" align="center">
                  <thead class="table-dark">
                    <tr align="center">
                      <th>No</th>
                      <th>Nama Barang</th>
                      <th>Merk</th>
                      <th>No.Seri</th>
                      <th>Bahan</th>
                      <th>Thn Pembelian</th>
                      <th>No.Kode Barang</th>
                      <th>Jml Barang</th>
                      <th>Harga Beli</th>
                      <th>Keadaan Barang</th>
                      <th colspan="2">Opsi</th>
                    </tr>
                  </thead>
                  
                 <?php
                    $sql=mysqli_query($konek,"SELECT *FROM data_alat") or die (mysqli_error($konek));
                    while ($hasil=mysqli_fetch_array($sql)){
                      $id=$hasil['no'];
                      echo "<tr align='center'>";
                      echo "<th>".$id."</th>";
                      echo "<th>".$hasil['nama_barang']."</th>";
                      echo "<th>".$hasil['merk']."</th>";
                      echo "<th>".$hasil['no_serial']."</th>";
                      echo "<th>".$hasil['bahan']."</th>";
                      echo "<th>".$hasil['thn_pembuatan']."</th>";
                      echo "<th>".$hasil['kode_barang']."</th>";
                      echo "<th>".$hasil['jml_barang']."</th>";
                      echo "<th>".$hasil['harga']."</th>";
                      echo "<th>".$hasil['keadaan']."</th>";
                      echo "<th><a href='edit_tabel_alat.php'<button type='button' class='btn btn-primary'><i class='bi bi-pencil-fill'></i></button></th>";
                      echo "<th><a href=\"proses_hapus.php?id=$id\""."onClick=\"return confirm('Hapus Data?')\""."><button type='button' class='btn btn-danger'><i class='bi bi-trash-fill'></i></button></a></th>";
                    }
                  ?>
                  </table>
              </div>
            </div>
          </div>
          <!-- End Tabel -->

          <!-- Pagination -->
          <nav aria-label="..." class="btn-pagination">
            <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </body>
</html>
