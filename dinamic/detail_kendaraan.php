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

$sekarang=date("Y-m-d");
$tgl =($row['tgl_uji']);

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
$status=$brs['11'];


$tanggal=substr($brs[10], 8,2)."-".substr($brs[10], 5,2)."-".substr($brs[10], 0,4);



  If($sekarang > $tgl)
      $status = "<span class='label label-danger'>Mati</span>";
  else if ($sekarang <= $tgl)
      $status = "<span class='label label-success'>Hidup</span>";

?>

<button onclick="history.back()" class="btn btn-danger">
	<i class="fa-solid fa-arrow-left"></i> Kembali
</button>

<table class="table table-bordered table-striped" border="0" width="60%" align="center">
	<h2>Detail Data Kendaraan</h2>


	<form method="POST">
	<tr>
		<td width="20%">Kode Trayek</td>
		<td width="80%">: <?=$kode_trayek; ?></td>
	</tr>
	<tr>
		<td width="20%">Id Kendaraan</td>
		<td width="80%">: <?=$id_kendaraan; ?></td>
	</tr>
	<tr>
		<td width="20%">Nopol</td>
		<td width="80%">: <?=$nopol; ?></td>
	</tr>
	<tr>
		<td width="20%">No Rangka</td>
		<td width="80%">: <?=$rangka; ?></td>
	</tr>
	<tr>
		<td width="20%">No Mesin</td>
		<td width="80%">: <?=$mesin; ?></td>
	</tr>
	<tr>
		<td width="20%">No Uji</td>
		<td width="80%">: <?=$buku; ?></td>
	</tr>
	<tr>
		<td width="20%">Tahun</td>
		<td width="80%">: <?=$tahun; ?></td>
	</tr>
	<tr>
		<td width="20%">Merk</td>
		<td width="80%">: <?=$merk; ?></td>
	</tr>
	<tr>
		<td width="20%">Daya Angkut Orang</td>
		<td width="80%">: <?=$orang; ?> orang</td>
	</tr>
	<tr>
		<td width="20%">Daya Angkut Barang</td>
		<td width="80%">: <?=$barang; ?> kg</td>
	</tr>
	<tr>
		<td width="20%">Tanggal Uji</td>
		<td width="80%">: <?=$tanggal; ?></td>
	</tr>
	<tr>
		<td width="20%">Status</td>
		<td width="80%">: <?=$status; ?></td>
	</tr>
	

	<input type="hidden" name="">
	</form>
</table>

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