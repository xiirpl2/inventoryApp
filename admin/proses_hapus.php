<?php 
	include "koneksi.php";
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$hasil=mysqli_query($konek,"DELETE FROM peminjaman_alat WHERE no='$id'")or die(mysqli_error($konek));

		/*if(mysqli_affected_rows($konek)>0){
			echo "ok";
		}else{
			echo "gagal";
		}*/
		header('location:index.php');
	}
 ?>