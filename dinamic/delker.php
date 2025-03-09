<?php
include 'conf/koneksi.php';
$id=$_GET['id'];

$sql="DELETE from kendaraan where id_kendaraan=$id";
$result=mysqli_query($konek,$sql);
if($result)
	echo "<script language='JavaScript'>
	(window.alert('Data Kendaraan sudah dihapus'))
	location.href='kendaraan.php'
	</script>";
else
	echo "<script language='JavaScript'>
	(window.alert('Data Kendaraan tidak dapat dihapus'))
	location.href='kendaraan.php'
	</script>";

?>
