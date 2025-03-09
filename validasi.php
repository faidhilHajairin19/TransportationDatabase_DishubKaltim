<?php
session_start();
include 'config/koneksi.php';

$user=$_POST['user'];
$pass=md5($_POST['password']);
$sql="SELECT * from user where userid='$user' and passw='$pass'";
$res=mysqli_query($con,$sql);
$ada=mysqli_num_rows($res);
if($ada > 0)
{
  $_SESSION['login']=$user;
  $_SESSION['pin']=$pass;
  $_SESSION['nama']=$row[2];
  $_SESSION['level']=$row[3];
  echo "<script language='JavaScript'>
			location.href='main.php'
			</script>";
}
else
	echo "<script language='JavaScript'>
			(window.alert('Userid atau Password anda salah'))
			location.href='index.php?wrong=1'
			</script>";
?>