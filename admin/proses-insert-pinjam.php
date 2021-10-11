 <!-- proses input -->
<?php
  include "koneksi.php";
  if (isset($_POST['submit'])) {
    $no=$_POST['no'];
    $nama=$_POST['nama_peminjam'];
    $kelas=$_POST['kelas'];
    $alat_dipinjam=$_POST['alat_dipinjam'];
    $qty=$_POST['qty'];
    $tgl_pinjam=$_POST['tgl_pinjam'];
    $tgl_kembali=$_POST['tgl_kembali'];
    $status=$_POST['status'];
    $no_hp=$_POST['no_hp'];
    $ket=$_POST['keterangan'];

    mysqli_query($konek,"insert into peminjaman_alat(no, nama_peminjam, kelas, alat_dipinjam, qty, tgl_pinjam, tgl_kembali, status, no_hp, keterangan) values ('$no','$nama','$kelas','$alat_dipinjam','$qty','$tgl_pinjam','$tgl_kembali','$status','$no_hp','$keterangan')")or die (mysqli_error($konek));
    header('Location:tabel-peminjaman.php');
  }
?>
<!-- akhir input -->