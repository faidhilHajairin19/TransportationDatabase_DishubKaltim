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
$id=$_GET['id'];
$sql="SELECT * FROM kendaraan where id_kendaraan=$id";
$hasil=mysqli_query($konek,$sql);
$brs=mysqli_fetch_array($hasil);
$id_kendaraan=$brs['0'];
$kode_trayek=$brs['1'];
$nopol=$brs['2'];
$rangka=$brs['3'];
$mesin=$brs['4'];
$buku=$brs['5'];
$tahun=$brs['6'];
$merk=$brs['7'];
$orang=$brs['8'];
$barang=$brs['9'];
$tgl=$brs['10'];
?>

<button onclick="history.back()" class="btn btn-danger">
	<i class="fa-solid fa-arrow-left"></i> Kembali
</button>

<table class="table table-bordered" border="0" width="50%" align="center">

		<h2>Edit Data Kendaraan</h2>

	<form method="POST">
	<tr>
		<td width="20%">Id Kendaraan</td>
		<td width="80%"><input type="text" name="id_kendaraan" size="50" value="<?=$id_kendaraan; ?>"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">Kode Trayek</td>
		<td width="80%"><input type="text" name="kode_trayek" size="50" value="<?=$kode_trayek; ?>"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">No Kendaraan</td>
		<td width="80%"><input type="text" name="nopol" size="50" value="<?=$nopol; ?>"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">No Rangka</td>
		<td width="80%"><input type="text" name="rangka" size="50" value="<?=$rangka; ?>"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">No Mesin</td>
		<td width="80%"><input type="text" name="mesin" size="50" value="<?=$mesin; ?>"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">No Uji</td>
		<td width="80%"><input type="text" name="buku" size="50" value="<?=$buku; ?>"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">Tahun</td>
		<td width="80%"><input type="text" name="tahun" size="50" value="<?=$tahun; ?>"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">Merk</td>
		<td width="80%"><input type="text" name="merk" size="50" value="<?=$merk; ?>"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">Daya Angkut Orang</td>
		<td width="80%"><input type="text" name="orang" size="50" value="<?=$orang; ?>"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">Daya Angkut Barang</td>
		<td width="80%"><input type="text" name="barang" size="50" value="<?=$barang; ?>"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">Tanggal Uji</td>
		<td width="80%"><input type="date" name="tgl" size="80" required="" value="<?php echo $tgl; ?>"></td>
	</tr>

	<tr>
		<td width="20%"></td>
		<td width="80%"><button type="submit" name="tambah" class="btn btn-success">Simpan Perubahan</button></td>
	</tr>
	<input type="hidden" name="">
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
	$sql="INSERT into kendaraan (id_kendaraan,kode_trayek,nopol,no_rangka,no_mesin,no_buku,tahun,merk,angkut_orang,angkut_barang,tgl_uji) values ('$id_kendaraan',$kode_trayek,'$nopol','$rangka','$mesin','$buku','$tahun','$merk','$orang','$barang','$tgl')";
	$sql="UPDATE kendaraan SET id_kendaraan='$id_kendaraan',kode_trayek='$kode_trayek',nopol='$nopol',no_rangka='$rangka',no_mesin='$mesin',no_buku='$buku',tahun='$tahun',merk='$merk',angkut_orang='$orang',angkut_barang='$barang',tgl_uji='$tgl' where id_kendaraan=$id";
	$result=mysqli_query($konek,$sql);
	if($result)
	echo "<script language='JavaScript'>
	(window.alert('Data Kendaraan sudah diubah'))
	location.href='kendaraan.php'
	</script>";
else
	echo "<script language='JavaScript'>
	(window.alert('Data Kendaraan tidak dapat diubah'))
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