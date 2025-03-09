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

    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">


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

    <style>
      .scrollhor{
        overflow-x: auto;
      }

    </style>

</head>
<body>

<?php
//Membuat koneksi ke database
include 'conf/koneksi.php';
error_reporting(0);

?>
<h2 align="center">DATA KENDARAAN</h2>
<form method="POST"  action="addkendaraan.php">
  <button type="submit" class="btn btn-success">
    <i class="fa-solid fa-plus"></i> Tambah 
</button>
</form>
<form method="POST">
      <input type="text" name="kata" size="40" align="center" placeholder="Search...">
      <button type="submit" class="btn btn-primary">
        <i class="fa-solid fa-magnifying-glass"></i> Cari 
      </button>
    </form>
<!--<a href="prodi_cetak.php" target="_blank">Cetak</a> | 
<a href="prodi_xls.php" target="_blank">To Excel</a> | 
<a href="prodi_2pdf.php" target="_blank">To PDF (HTML2PDF)</a> |
<a href="prodi_fpdf.php" target="_blank">To PDF (FPDF)</a> | -->
<td></td>

<div class="scrollhor">
<table class="table table-bordered" border="0" width="100%" align="center">
  <caption>
  

<thead class="table-dark">	

  <tr>
  <th width="5%">Id Kendaraan</th>
  <th width="5%">Kode Trayek</th>
  <th width="10%">Nomor Kendaraan</th>
  <th width="5%">No Rangka</th>
  <th width="10%">No Mesin</th>
  <th width="10%">No Uji</th>
  <th width="5%">Tahun</th>
  <th width="10%">Merk</th>
  <th width="5%">Daya Angkut Orang</th>
  <th width="5%">Daya Angkut Barang</th>
  <th width="5%">Tanggal Uji</th>
  <th width="5%">Status</th>
  <th width="5%">Action</th>
  </tr>
</thead>

<?php
$kata=$_POST['kata'];
$sql="SELECT * FROM kendaraan WHERE (kendaraan.id_kendaraan like '%$kata%' or kendaraan.nopol like '%$kata%')";
$query=mysqli_query($konek,$sql);

while($row=mysqli_fetch_array($query))
{

$sekarang=date("Y-m-d");
$tgl =($row['tgl_uji']);
$tanggal=substr($row[10], 8,2)."-".substr($row[10], 5,2)."-".substr($row[10], 0,4);

  If($sekarang > $tgl)
      $status = "<span class='label label-danger'>Mati</span>";
  else if ($sekarang <= $tgl)
      $status = "<span class='label label-success'>Hidup</span>";



 echo "<tbody>";
 echo "<tr>";	
 echo "<td align='center'>".$row['id_kendaraan']."</td>";
 echo "<td align='center'>".$row['kode_trayek']."</td>";
 echo "<td>".$row['nopol']."</td>";
 echo "<td>".$row['no_rangka']."</td>";
 echo "<td>".$row['no_mesin']."</td>";
 echo "<td>".$row['no_buku']."</td>";
 echo "<td align='center'>".$row['tahun']."</td>";
 echo "<td>".$row['merk']."</td>";
 echo "<td align='center'>".$row['angkut_orang']." orang</td>";
 echo "<td align='center'>".$row['angkut_barang']." kg</td>";
 echo "<td align='center'>".$tanggal."</td>";
 echo "<td align='center'>".$status."</td>";
 echo "<td align='center'>
    <a href='delker.php?id=$row[0]' onclick='return myFunction()' ><i class='fa-solid fa-trash'></i></a> | 
    <a href='editkendaraan.php?id=$row[0]'><i class='fa-solid fa-pen-to-square'></i></a>
    <a href='detail_kendaraan.php?id=$row[0]'><i class='fa-solid fa-bars'></i></a></td>";
 echo "</tr>";
 echo"</tbody>";
}
?>

</table>

<script>
function myFunction() {
var r = confirm("Apakah anda yakin akan menghapus data ini?");
if (r == false) {
   return false;
} 

}
</script>
</div>



<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>

<script src="https://kit.fontawesome.com/0b4051824e.js" crossorigin="anonymous"></script>

 
<script type="text/javascript" src="DataTables/datatables.min.js"></script>




</body>
</html>