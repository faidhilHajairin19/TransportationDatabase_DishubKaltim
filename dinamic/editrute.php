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
$sql="SELECT * FROM rute where id_rute=$id";
$hasil=mysqli_query($konek,$sql);
$brs=mysqli_fetch_array($hasil);
$id_rute=$brs['0'];
$rute=$brs['1'];

?>

<button onclick="history.back()" class="btn btn-danger">
	<i class="fa-solid fa-arrow-left"></i> Kembali
</button>

<table class="table table-bordered" border="0" width="40%" align="center">

		<h2>Edit Data Rute Trayek</h2>

	<form method="POST">
	
	<tr>
		<td width="20%">Id Rute</td>
		<td width="80%"><input type="text" name="id_rute" size="50" value="<?=$id_rute; ?>"
			required=""></td>
	</tr>
	<tr>
		<td width="20%">Rute Trayek</td>
		<td width="80%"><input type="text" name="rute" size="50" value="<?=$rute; ?>"
			required=""></td>
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
	$id_rute=$_POST['id_rute'];
	$rute=$_POST['rute'];
	$sql="INSERT into rute (id_rute,rute) values ('$id_rute','$rute')";
	$sql=" UPDATE rute SET id_rute='$id_rute', rute='$rute' where id_rute=$id";
	$result=mysqli_query($konek,$sql);
	if($result)
	echo "<script language='JavaScript'>
	(window.alert('Data Rute sudah diubah'))
	location.href='rute.php'
	</script>";
else
	echo "<script language='JavaScript'>
	(window.alert('Data Rute tidak dapat diubah'))
	location.href=rute.php'
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