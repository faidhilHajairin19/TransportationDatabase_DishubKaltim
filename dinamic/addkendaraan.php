<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/0b4051824e.js" crossorigin="anonymous"></script>

</head>
<body>


<?php
include 'conf/koneksi.php';
?>

<button onclick="history.back()" class="btn btn-danger">
	<i class="fa-solid fa-arrow-left"></i> Kembali
</button>

<table class="table table-bordered" border="0" width="50%" align="center">

		<h2>Tambah Data Kendaraan</h2>

	<form method="POST">
	<tr>
		<td width="20%">Id Kendaraan</td>
		<td width="80%"><input type="text" name="id_kendaraan" size="50"
			required=""></td>
	</tr>
	<tr>
		<td width="40%">Kode Trayek</td>
		<td width="80%"><input type="text" name="kode_trayek" size="50" value="<?=$kode_trayek; ?>"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">No Kendaraan</td>
		<td width="80%"><input type="text" name="nopol" size="50"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">No Rangka</td>
		<td width="80%"><input type="text" name="rangka" size="50"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">No Mesin</td>
		<td width="80%"><input type="text" name="mesin" size="50"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">No Uji</td>
		<td width="80%"><input type="text" name="buku" size="50"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">Tahun</td>
		<td width="80%"><input type="text" name="tahun" size="50"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">Merk</td>
		<td width="80%"><input type="text" name="merk" size="20"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">Daya Angkut Orang</td>
		<td width="80%"><input type="text" name="orang" size="50"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">Daya Angkut Barang</td>
		<td width="80%"><input type="text" name="barang" size="50"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">Tanggal Uji</td>
		<td width="80%"><input type="date" name="tgl" size="80" required="" value="<?php echo $tgl; ?>"></td>
	</tr>

	<tr>
		<td width="20%"></td>
		<td width="80%"><button type="submit" name="tambah" class="btn btn-success">Simpan</button></td>
	</tr>
	</form>
</table>
<?php
if(isset($_POST['tambah']))
{
	$id_kendaraan=$_POST['id_kendaraan'];
	$kode_trayek=$_POST['kode_trayek'];
	$nopol=$_POST['nopol'];
	$rangka=$_POST['rangka'];
	$mesin=$_POST['mesin'];
	$buku=$_POST['buku'];
	$tahun=$_POST['tahun'];
	$merk=$_POST['merk'];
	$orang=$_POST['orang'];
	$barang=$_POST['barang'];
	$tgl=$_POST['tgl'];
	$sql="INSERT into kendaraan values ('$id_kendaraan',$kode_trayek,'$nopol','$rangka','$mesin','$buku','$tahun','$merk','$orang','$barang','$tgl')";
	$result=mysqli_query($konek,$sql);
	if($result)
	echo "<script language='JavaScript'>
	(window.alert('Data Kendaraan sudah ditambahkan'))
	location.href='kendaraan.php'
	</script>";
else
	echo "<script language='JavaScript'>
	(window.alert('Data Kendaraan tidak dapat ditambah'))
	location.href=kendaraan.php'
	</script>";
}
?>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>

</body>
</html>