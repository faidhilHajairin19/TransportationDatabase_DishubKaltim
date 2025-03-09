<?php
session_start();
include 'config/koneksi.php';
$userid=$_SESSION['login'];
$passw=$_SESSION['pin'];
$namauser=$_SESSION['nama'];
$level=$_SESSION['level'];
//
$sql="SELECT * from user where userid='$userid' and passw='$passw'";
$hasil=mysqli_query($con,$sql);
$ada=mysqli_num_rows($hasil);
if($ada==0)
	 echo "<script language='JavaScript'>
			location.href='index.php'
			</script>";
?>