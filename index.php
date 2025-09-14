<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=FAMILY_NAME:wght@WEIGHT_OR_RANGE&display=swap" rel="stylesheet">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Login</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>
    <body style="background-color:rgb(219, 233, 245)">

        <div class="">
            <div class="">
                <div  class="col-md-12" style="background-color:rgb(38, 98, 203); color:white; display:flex; align-items:center">
                <img src="img/dishub.png" width="80" style="padding:5px">
                <span class="col-md-offset-0 " style="text-align:left; font-size:18px;">Basis Data Angkutan Jalan
                <br>Dinas Perhubungan Provinsi Kalimantan Timur</span>
                    </div>
                <div class="content col-md-2 col-md-offset-0" style="display:flex;" >
                    <div>
                   <img src="img/bus2.jpg" width="700" style="margin-left: 80px; margin-right: 30px; border-radius: 8px">
                        <div style="display:flex; align-items:center">
                            <div class="text">
                            Bus Antar Kota Antar Provinsi</div>
                            <div class="text2">
                            Laju bus di jalan yang tenang menuju kota tujuan, ditemani sinar keemasan matahari sore yang perlahan tenggelam. </div>
                        </div>
                    </div>
                <div class="col-md-4 col-md-offset-6">
                    
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading" style="background-color: #007BFF; color:white">
                            <h3 class="panel-title">Please Sign In</h3>
                             </div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="validasi.php">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" name="user" type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->

                                    <input type="submit" name="log" class="btn btn-lg btn-success btn-block" value="Login">

                                </fieldset>
                            </form>
                        </div>
                    </div>

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

<style>
.content{
 margin-top:50px; 
 align-items:center
}

.login-panel {
  width: 350px;
  height: 300px;
  margin-bottom: 120px;
  border-radius: 18px
}

.panel-heading{
    border-radius: 18px 18px 0 0
}

.panel-body{
    padding:30px
}

.text{
    font-family: 'YOUNG serif';
    font-size:28px;
    color: #007BFF;
    margin-top: 10px;
    margin-left: 80px;
    width: 370px;

}
.text2{
    font-family: 'montserrat';
    font-size:13px;
    color:black;
    margin-top: 10px;
    margin-right:0px;
    margin-left:50px;
}
</style>
