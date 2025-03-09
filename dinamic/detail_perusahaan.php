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
$sql="SELECT perusahaan.nama_perusahaan ,rute.rute FROM perusahaan inner join rute where perusahaan.kode_trayek=$id and perusahaan.id_rute=rute.id_rute";
$hasil=mysqli_query($konek,$sql);
$brs=mysqli_fetch_array($hasil);
$nama_perusahaan=$brs['0'];
$rute=$brs['1'];

?>

<h2 align="center"><?=$nama_perusahaan; ?></h2>
<h3 align="center"><?=$rute; ?></h3>


<button onclick="history.back()" class="btn btn-danger">
   <i class="fa-solid fa-arrow-left"></i> Kembali
</button>
</form>

<table class="table table-bordered" border="0" width="80%" align="center">

    <form method="POST">
      <input type="text" name="kata" size="40" align="center" placeholder="Search...">
      <button type="submit" class="btn btn-primary">
        <i class="fa-solid fa-magnifying-glass"></i> Cari 
      </button>
  </caption> 

<thead class="thead-light"> 
  
  <th width="5%">Kode Trayek</th>

  <th width="5%">Id Kendaraan</th>

  <th width="5%">No Polisi</th>

  <th width="5%">Daya Angkut Orang</th>

  <th width="5%">Daya Angkut Barang </th>

  <th width="5%">Tanggal Uji</th>

  <th width="5%">Status</th>

  <th width="5%">Action</th>
</thead>


<?php
$id=$_GET['id'];
$kata=$_POST['kata'];
$sql="SELECT * FROM kendaraan INNER JOIN perusahaan WHERE kendaraan.kode_trayek=perusahaan.kode_trayek and kendaraan.kode_trayek='$id' and (kendaraan.nopol like '%$kata%')";
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

 echo "<tr>"; 
 echo "<td align='center'>".$row['kode_trayek']."</td>";
 echo "<td align='center'>".$row['id_kendaraan']."</td>";
 echo "<td align='center'>".$row['nopol']."</td>";
 echo "<td align='center'>".$row['angkut_orang']." orang</td>";
 echo "<td align='center'>".$row['angkut_barang']." kg</td>";
 echo "<td align='center'>".$tanggal."</td>";
 echo "<td align='center'>".$status."</td>";

 echo "<td align='center'>
 <a href='detail_kendaraan.php?id=$row[0]'><i class='fa-solid fa-bars'></i></a> |
 <a href='editkendaraan.php?id=$row[0]'><i class='fa-solid fa-pen-to-square'></i></a> </td>";
 echo "</tr>";
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