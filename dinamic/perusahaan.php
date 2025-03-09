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
//membuat koneksi ke database
include 'conf/koneksi.php';
error_reporting(0);
?>


<h2 align="center">DATA PERUSAHAAN</h2>

<form method="POST"  action="addperusahaan.php">
  <button type="submit" class="btn btn-success">
    <i class="fa-solid fa-plus"></i> Tambah	
</button>
</form>

<table class="table table-bordered" border="0" width="80%" align="center">

		<form method="POST">
			<input type="text" name="kata" size="40" align="center" placeholder="Search...">
			<button type="submit" class="btn btn-primary">
   			<i class="fa-solid fa-magnifying-glass"></i> Cari	
			</button>
		</form>


<thead class="thead-light">
<th width="10%" scope="col">Kode Trayek</th>
<th width="35%">Nama Perusahaan</th>
<th widht="40%">Rute Trayek</th>
<th widht="20%">Jumlah</th>
<th width="15%">Action</th>
<thead>

<?php
$rute=$_POST['rute'];
$kata=$_POST['kata'];
$sql="SELECT a.*,b.rute rute from perusahaan a, rute b where a.id_rute=b.id_rute and (a.kode_trayek like '%$kata%' or a.nama_perusahaan like '%$kata%' or b.rute like'%$kata%')";
$query=mysqli_query($konek,$sql);
while($row=mysqli_fetch_array($query))
{
	echo "<tr>";
	echo "<td align='center'>".$row['kode_trayek']."</td>";
	echo "<td><a href='detail_perusahaan.php?id=$row[0]'>".$row['nama_perusahaan']."</td>";
	echo "<td>".$row['rute']."</td>";
	echo "<td align='center'>".$row['jumlah']."</td>";
	echo "<td align='center'><a href='delper.php?id=$row[0]' onclick='return myFunction()'><i class='fa-solid fa-trash'></i></a> | <a href='editperusahaan.php?id=$row[0]'><i class='fa-solid fa-pen-to-square'></i></a>";
	echo "</tr>";
}
?>

<script>
function myFunction() {
var r = confirm("Apakah anda yakin akan menghapus data ini?");
if (r == false) {
   return false;
} 

}
</script>

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