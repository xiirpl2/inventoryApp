<?php 
	$host="localhost";
	$user="root";
	$pass="";
	$db="invapp";
	$konek=mysqli_connect($host,$user,$pass);
	if($konek){
		$coba=mysqli_select_db($konek,$db);
		if ($coba) {
			echo "";
		}else{
			echo mysqli_error($konek);
		}
	}
?>