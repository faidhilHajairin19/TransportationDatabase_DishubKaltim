<?php
include 'conf/koneksi.php';
$id=$_GET['id'];

$sql="DELETE from rute where id_rute=$id";
$result=mysqli_query($konek,$sql);
if($result)
	echo "<script language='JavaScript'>
	(window.alert('Data Rute sudah dihapus'))
	location.href='rute.php'
	</script>";
else
	echo "<script language='JavaScript'>
	(window.alert('Data Rute tidak dapat dihapus'))
	location.href='rute.php'
	</script>";

?>
