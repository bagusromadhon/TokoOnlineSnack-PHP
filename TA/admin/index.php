﻿<?php
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost","root","","tokosnack");
if (!isset($_SESSION['admin']))
 {
    echo "<script>alert('Anda harus login');</script>";
    echo "<script>location='loginadmin.php';</script>";
  
    exit();
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Olnack</title>
    <script src="https://kit.fontawesome.com/f1fba031da.js" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">
</head>
<style type="text/css">
    .navbar-default{
        padding: 15px;
    }
    .logo{
        font-size: 35px;
        color: #fff;
        font-weight: 700;
        text-decoration: none;
        margin-left: 40px;
        position: absolute;
        font-family: 'Langar', cursive;
        top: 17px;
    }
    .logo:hover{
        color: rgb(124 207 161);
        text-decoration: none;

    }
    .logo span{
        color: yellow;
    }
</style>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <a href="" class="logo">snack<span>.</span></a>
            <div class="navbar-header">
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <?php echo date("Y-m-d");?> &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
                
                    
                    <li>
                        <a   href="index.php"><i class="fas fa-home fa-3x"></i></i>Home</a>
                    </li>
                    <li>
                        <a   href="index.php?halaman=kategori"><i class="fas fa-cube fa-3x"></i>Kategori produk</a>
                    </li>
                    <li>
                        <a   href="index.php?halaman=produk"><i class="fas fa-hamburger fa-3x"></i>Produk</a>
                    </li>
                    <li>
                        <a   href="index.php?halaman=pembelian"><i class="fa fa-shopping-cart fa-3x"></i>Pembelian</a>
                    </li>
                    <li>
                        <a   href="index.php?halaman=laporan_pembelian"><i class="fa fa-file fa-3x"></i></i>Laporan</a>
                    </li>
                    <li>
                        <a   href="index.php?halaman=pelanggan"><i class="fas fa-address-card fa-3x">
                            
                        </i>Pelanggan</a>
                    </li>
                    <li>
                        <a   href="index.php?halaman=logout"><i class="fas fa-sign-out-alt fa-3x"></i>Logoout </a>
                    </li>

                    <li>
                        <a href="index.php?halaman=tambahadmin"><i class="fas fa-users-cog fa-3x"></i>Tambah Admin</a>
                    </li>
                   
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                 if (isset($_GET['halaman'])) {
                     if ($_GET['halaman']=="produk")
                     {
                     include 'produk.php';
                     }

                     elseif($_GET['halaman']=="pembelian")
                     {
                        include 'pembelian.php';
                     }
                     elseif($_GET['halaman']=="pelanggan")
                     {
                        include 'pelanggan.php';
                     }
                     elseif ($_GET['halaman']=="detail") {
                         include 'detail.php';
                     }
                     else if($_GET['halaman']=="tambahproduk")
                     {
                        include 'tambahproduk.php';
                     }
                     else if($_GET['halaman']=="tambahpelanggan")
                     {
                        include 'tambahpelanggan.php';
                     }
                     else if ($_GET['halaman']=="hapusproduk") {
                         include 'hapusproduk.php';
                     }
                     else if ($_GET['halaman']=="ubahproduk") 
                     {
                     include'ubahproduk.php';
                     }
                     else if ($_GET['halaman']=="ubahpelanggan") 
                     {
                        include 'ubahpelanggan.php';
                     }
                     else if($_GET['halaman']=="logout")
                     {
                        include'logout.php';
                     }
                     else if ($_GET['halaman']=="tambahadmin")
                      {
                     include'tambahadmin.php';
                     }
                     elseif ($_GET['halaman']=="listadmin")
                      {
                         include 'listadmin.php';
                      }
                      elseif ($_GET['halaman']=="pembayaran") {
                          include 'pembayaran.php';
                      }
                      elseif ($_GET['halaman']=="laporan_pembelian") {
                          include 'laporan_pembelian.php';
                      }
                      elseif ($_GET['halaman']=="kategori") {
                          include 'kategori.php';
                      }



                 }else{
                    include 'home.php';     
                 }
             ?>
            </div>
             
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <!-- font awesome -->

 <script src="https://kit.fontawesome.com/f1fba031da.js" crossorigin="anonymous"></script>   
   
</body>
</html>
