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
$sql="SELECT * FROM perusahaan where kode_trayek=$id";
$hasil=mysqli_query($konek,$sql);
$brs=mysqli_fetch_array($hasil);
$kode_trayek=$brs['0'];
$perusahaan=$brs['1'];
$rute=$brs['2'];
$jumlah=$brs['3'];
?>

<button onclick="history.back()" class="btn btn-danger">
	<i class="fa-solid fa-arrow-left"></i> Kembali
</button>

<table class="table table-bordered" border="0" width="50%" align="center">

		<h2>Edit Data Perusahaan</h2>

	<form method="POST">
	<tr>
		<td width="20%">Kode Trayek</td>
		<td width="80%"><input type="text" name="kode_trayek" size="50" value="<?=$kode_trayek; ?>"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">Nama Perusahaan</td>
		<td width="80%"><input type="text" name="perusahaan" size="50" value="<?=$perusahaan; ?>"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">Rute Trayek</td>
		<td width="80%">
			<select name="rute">
			    <option>--Pilih Rute--</option> 
				<?php
				$qry="SELECT * from rute";
				$res=mysqli_query($konek,$qry);
				while($brs=mysqli_fetch_array($res))
				{
				 if($rute==$brs[0])
				 echo "<option value='$brs[0]'selected>$brs[1]</option>";
				 else
				  echo "<option value='$brs[0]'>$brs[1]</option>";
				}
				?>
			</select>
		</td>
	</tr>
	<tr>
		<td width="20%">Jumlah</td>
		<td width="80%"><input type="text" name="jumlah" size="20" value="<?=$jumlah; ?>"
			required=""></td>
	</tr>
	<tr>
		<td width="20%"></td>
		<td width="80%">
			<button type="submit" name="tambah" class="btn btn-success">
    			Simpan Perubahan	
			</button>
		</td>
	</tr>
	<input type="hidden" name="">
	</form>
</table>
<?php
if(isset($_POST['tambah']))
{
	$kode_trayek=$_POST['kode_trayek'];
	$perusahaan=$_POST['perusahaan'];
	$rute=$_POST['rute'];
	$jumlah=$_POST['jumlah'];
	$sql="INSERT into perusahaan (kode_trayek,nama_perusahaan,id_rute,jumlah) values ('$kode_trayek','$perusahaan',$rute.'$jumlah')";
	$sql="UPDATE perusahaan SET kode_trayek='$kode_trayek',nama_perusahaan='$perusahaan',id_rute='$rute',jumlah='$jumlah' where kode_trayek=$id";
	$result=mysqli_query($konek,$sql);
	if($result)
	echo "<script language='JavaScript'>
	(window.alert('Data Perusahaan sudah diubah'))
	location.href='perusahaan.php'
	</script>";
else
	echo "<script language='JavaScript'>
	(window.alert('Data Perusahaan tidak dapat diubah'))
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