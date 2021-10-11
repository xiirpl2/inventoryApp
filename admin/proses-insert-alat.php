 <!-- proses input -->
<?php
  include "koneksi.php";
  if (isset($_POST['submit'])) {
    $no=$_POST['no'];
    $kode=$_POST['kode_barang'];
    $nama_barang=$_POST['nama_barang'];
    $merk=$_POST['merk'];
    $noseri=$_POST['no_serial'];
    $bahan=$_POST['bahan'];
    $thn=$_POST['thn_pembuatan'];
    $jml=$_POST['jml_barang'];
    $harga=$_POST['harga'];
    $keadaan=$_POST['keadaan'];

    mysqli_query($konek,"insert into data_alat(no,kode_barang,nama_barang,merk,no_serial,bahan,thn_pembuatan,jml_barang,harga,keadaan) values ('$no','$kode','$nama_barang','$merk','$noseri','$bahan','$thn','$jml','$harga','$keadaan')")or die (mysqli_error($konek));
    header('Location:tabel-alat.php');
  }
?>
<!-- akhir input -->