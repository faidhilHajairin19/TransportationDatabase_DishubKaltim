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

		<h2>Tambah Data Perusahaan</h2>

	<form method="POST">
	<tr>
		<td width="20%">Kode Trayek</td>
		<td width="80%"><input type="text" name="kode_trayek" size="50"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">Nama Perusahaan</td>
		<td width="80%"><input type="text" name="perusahaan" size="50"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">Rute Trayek</td>
		<td width="80%">
			<select name="rute">
				<?php
				$sql="SELECT * FROM rute";
				$hasil=mysqli_query($konek,$sql);
				while($brs=mysqli_fetch_array($hasil))
				{
					echo "<option value='$brs[0]'>$brs[1]</option>";
				}
				?>
			</select>
		</td>
	</tr>
	<tr>
		<td width="20%">Jumlah Unit</td>
		<td width="80%"><input type="text" name="jumlah" size="20"
			required=""></td>
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
	$kode_trayek=$_POST['kode_trayek'];
	$perusahaan=$_POST['perusahaan'];
	$rute=$_POST['rute'];
	$jumlah=$_POST['jumlah'];
	$sql="INSERT into perusahaan values ('$kode_trayek','$perusahaan',$rute,'$jumlah')";
	$result=mysqli_query($konek,$sql);
	if($result)
	echo "<script language='JavaScript'>
	(window.alert('Data Perusahaan sudah ditambahkan'))
	location.href='perusahaan.php'
	</script>";
else
	echo "<script language='JavaScript'>
	(window.alert('Data Perusahaan tidak dapat ditambah'))
	location.href=perusahaan.php'
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