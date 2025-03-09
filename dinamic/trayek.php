<?php
//Membuat koneksi ke database
include 'conf/koneksi.php';
error_reporting(0);
?>
<h2 align="center">DAFTAR TRAYEK</h2>
<form method="POST" action="addtrayek.php">
  <input type="submit" name="add" value="Add Trayek">
</form>
<!--<a href="prodi_cetak.php" target="_blank">Cetak</a> | 
<a href="prodi_xls.php" target="_blank">To Excel</a> | 
<a href="prodi_2pdf.php" target="_blank">To PDF (HTML2PDF)</a> |
<a href="prodi_fpdf.php" target="_blank">To PDF (FPDF)</a> | -->
<table border="1" width="60%" align="center">
  <caption>
  	<form method="POST">
  		<input type="text" name="kata" size="40">
  		<input type="submit" name="cari" value="Search!">
  	</form>	
  </caption>	
  <th width="10%">Id Trayek</th>
  <th width="35%">Jenis Trayek</th>
  <th width="20%">Jumlah Trayek</th>
  <th width="20%">Action</th>
<?php
$kata=$_POST['kata'];
$sql="SELECT * FROM trayek WHERE (trayek.jenis_trayek like '%$kata%')";
$query=mysqli_query($konek,$sql);
while($row=mysqli_fetch_array($query))
{
 echo "<tr>";	
 echo "<td align='center'>".$row['id_trayek']."</td>";
 echo "<td>".$row['jenis_trayek']."</td>";
 echo "<td>".$row['jumlah_trayek']."</td>";
 echo "<td align='center'>
    <a href='deltrayek.php?id=$row[0]'>Hapus</a> | 
    <a href='editrute.php?id=$row[0]'>Edit</a> </td>";
 echo "</tr>";
}
?>