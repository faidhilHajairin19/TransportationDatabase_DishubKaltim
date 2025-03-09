<?php
include 'conf/koneksi.php';
$id=$_GET['id'];

$sql="DELETE from trayek where id_trayek=$id";
$result=mysqli_query($konek,$sql);
if($result)
	echo "<script language='JavaScript'>
	(window.alert('Data Trayek sudah dihapus'))
	location.href='trayek.php'
	</script>";
else
	echo "<script language='JavaScript'>
	(window.alert('Data Trayek tidak dapat dihapus'))
	location.href='trayek.php'
	</script>";

?>
