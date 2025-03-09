<?php
include 'conf/koneksi.php';
?>
<table border="0" width="60%" align="center">
	<caption>
		<h2>Tambah Data Trayek</h2>
	</caption>
	<form method="POST">

	<tr>
		<td width="20%">Id Trayek</td>
		<td width="80%"><input type="text" name="id" size="50"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">Jenis Trayek</td>
		<td width="80%"><input type="text" name="jenis" size="50"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">Jumlah Trayek</td>
		<td width="80%"><input type="text" name="jumlah" size="50"
			required=""></td>
	</tr>
	<tr>
		<td width="20%"></td>
		<td width="80%"><input type="submit" name="insert" value="Simpan"></td>
	</tr>
	</form>
</table>
<?php
if(isset($_POST['insert']))
{
	$id=$_POST['id'];
	$jenis=$_POST['jenis'];
	$jumlah=$_POST['jumlah'];
	$sql="INSERT into trayek (id_trayek, jenis_trayek, jumlah_trayek) values ('$id','$jenis','$jumlah')";
	$result=mysqli_query($konek,$sql);
	if($result)
	echo "<script language='JavaScript'>
	(window.alert('Data Rute sudah ditambahkan'))
	location.href='trayek.php'
	</script>";
else
	echo "<script language='JavaScript'>
	(window.alert('Data Rute tidak dapat ditambah'))
	location.href=trayek.php'
	</script>";
}