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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php
include 'conf/koneksi.php';
$id=$_GET['id'];
$sql="SELECT * FROM kendaraan where kode_trayek=$id";
$hasil=mysqli_query($konek,$sql);
$brs=mysqli_fetch_array($hasil);
$kode=$brs['0'];
$id_kendaraan=$brs['1'];
$nopol=$brs['2'];
$rangka=$brs['3'];
$mesin=$brs['4'];
$buku=$brs['5'];
$tahun=$brs['6'];
$merk=$brs['7'];
$tipe=$brs['8'];
$daya=$brs['9'];
$tgl=$brs['10'];
?>
<table border="0" width="50%" align="center">
	<caption>
		<h2>Edit Data Kendaraan</h2>
	</caption>
	<form method="POST">
	<tr>
		<td width="20%">Kode Trayek</td>
		<td width="80%"><input type="text" name="kode" size="50" value="<?=$kode; ?>"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">Id Kendaraan</td>
		<td width="80%"><input type="text" name="id_kendaraan" size="50" value="<?=$id_kendaraan; ?>"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">No Polisi</td>
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
		<td width="20%">No Buku Uji</td>
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
		<td width="20%">Tipe</td>
		<td width="80%"><input type="text" name="tipe" size="50" value="<?=$tipe; ?>"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">Daya Angkut</td>
		<td width="80%"><input type="text" name="daya" size="50" value="<?=$daya; ?>"
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
	$kode=$_POST['kode'];
	$id_kendaraan=$_POST['id_kendaraan'];
	$nopol=$_POST['nopol'];
	$rangka=$_POST['rangka'];
	$mesin=$_POST['mesin'];
	$buku=$_POST['buku'];
	$tahun=$_POST['tahun'];
	$merk=$_POST['merk'];
	$tipe=$_POST['tipe'];
	$daya=$_POST['daya'];
	$tgl=$_POST['tgl'];
	$sql="INSERT into kendaraan (kode_trayek,id_kendaraan,nopol,no_rangka,no_mesin,no_buku,tahun,merk,tipe,daya,tgl) values ('$kode',$id_kendaraan,'$nopol','$rangka','$mesin','$buku','$tahun','$merk','$tipe','$daya','$tgl_uji')";
	$sql="UPDATE kendaraan SET kode_trayek='$kode',id_kendaraan='$id_kendaraan',nopol='$nopol',no_rangka='$rangka',no_mesin='$mesin',no_buku='$buku',tahun='$tahun',merk='$merk',tipe='$tipe',daya_angkut='$daya',tgl_uji='$tgl' where kode_trayek=$id";
	$result=mysqli_query($konek,$sql);
	if($result)
	echo "<script language='JavaScript'>
	(window.alert('Data Kendaraan sudah diubah'))
	location.href='lihat.php'
	</script>";
else
	echo "<script language='JavaScript'>
	(window.alert('Data Kendaraan tidak dapat diubah'))
	location.href=lihat.php'
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