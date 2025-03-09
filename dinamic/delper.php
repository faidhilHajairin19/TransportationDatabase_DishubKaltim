<?php
include 'conf/koneksi.php';
$id=$_GET['id'];

$sql="DELETE from perusahaan where kode_trayek=$id";
$result=mysqli_query($konek,$sql);
if($result)
	echo "<script language='JavaScript'>
	(window.alert('Data Perusahaan sudah dihapus'))
	location.href='perusahaan.php'
	</script>";
else
	echo "<script language='JavaScript'>
	(window.alert('Data Perusahaan tidak dapat dihapus'))
	location.href='perusahaan.php'
	</script>";

?>
