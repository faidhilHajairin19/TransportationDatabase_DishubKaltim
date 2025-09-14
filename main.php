<!DOCTYPE html>
<?php
include 'ceklogin.php';
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator</title>

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

</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"  style="background-color:rgb(38, 98, 203)">
        <div class="navbar-header">
            <a class="navbar-brand" href="main.php" style="align-items:center; display:flex"><img src="img/dishub.png" width="50"></a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
     

           
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li ><a style="background-color:rgb(38, 98, 203); color:white;">Basis Data Angkutan Jalan - Dinas Perhubungan Prov Kaltim</a></li>
        </ul>


        <!-- Top Navigation: Right Menu -->
       
        <ul class="nav navbar-right navbar-top-links">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw" style="color:white"></i> <?php echo $namauser; ?><b class="caret" style="color:white"></b>
                </a>
                <ul class="dropdown-menu dropdown-user" >
                    <li class="divider" ></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
    
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                

                <ul class="nav" id="side-menu">
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Manajemen Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="main.php?titel=Perusahaan">Perusahaan</a>
                            </li>
                            <li>
                                <a href="main.php?titel=Rute">Rute</a>
                            </li>
                            <li>
                                <a href="main.php?titel=Kendaraan">Kendaraan</a>
                            </li>
                        </ul>
                    </li>
                  
                    <li>
                        <a href="logout.php" class="active"><i class="fa fa-sign-out"></i> Logout</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $_GET['titel']; ?></h1>
                </div>
            </div>

        
            <div>
                <?php 
                if($_GET['titel']=="Perusahaan")
                    $fail="dinamic/perusahaan.php";
                elseif ($_GET['titel']=="Rute")
                    $fail="dinamic/rute.php";
                elseif ($_GET['titel']=="Kendaraan")
                    $fail="dinamic/kendaraan.php";


                 echo "<iframe name='I2' width='100%' height='1000' src='$fail' scrolling='yes' border='0' frameborder='0'></iframe>";

                ?>
            </div>    
        </div>
    </div>

</div>

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
