<?php
session_start();

if(!$_SESSION['username'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}

?><!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <title>Karyawan-Cuti Tahunan</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open Sans:300,400" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source Sans Pro:300,400" />
    </head>
    <body>
        <div id="body_bg">

            <div class="primary-container-group">
                <!-- Background -->
                <div class="primary-container-background">
                    <div class="primary-container"></div>
                    <div class="clearfix"></div>
                </div>
                <!--End Background -->
                <div class="primary-container">
                    <div id="container_hornav" class="container no-padding">
						<div class="logo">
							<a href="index.php">
								<img src="assets/img/logo.png" alt="Logo" />
							</a>
						</div>
						
						<div class="row">
							<div class="hornav-block">
                                <div class="pull-LEFT">
                                    <ul class="nav navbar-nav">
                                        <p >Selamat Datang Karyawan
                                            <?php
                                                echo $_SESSION['username'];
                                            ?>
                                        </p>
                                    </ul>
                                </div>
								<div id="hornav" class="pull-right">
									<ul class="nav navbar-nav">
									   <li>
											<a href="Logout.php">Logout</a>
                                    	</li>
									</ul>
								</div>
                                <div id="hornav" class="pull-right">
                                        <a class="fa-bell" href="https://www.facebook.com/" ></a>
                                </div>
                              </div>
                                
							<div class="clearfix"></div>
						</div>
                        
                        </div>
					</div>
                    <div class="container">
                        <!-- === END HEADER === -->
                        <!-- === BEGIN CONTENT === -->
                        <div class="row margin-vert-30">
                            <!-- Begin Sidebar Menu -->
                            <div class="col-md-2">
                                 <ul class="list-group sidebar-nav" id="sidebar-nav">
                                    
                                     <li class="list-group-item">
                                        <a href="karyawan-home.php">Home</a>
                                    </li>
                                     <li class="list-group-item">
                                        <a href="Karyawan-cuti.php">Cuti</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="karyawan-history.php">History</a>
                                    </li>
                                   
                                </ul>
                            </div>
                            
                            <!-- End Sidebar Menu -->
                            <div class="col-md-10">
                                <!-- Button Size -->
                                  <div class="container">
                        <div class="row">
                            <!-- Main Article -->
                            <div class="col-md-10 margin-top-30">
                        <div class="col-md-30 col-md-offset-30 col-sm-offset-1">
                                <form class="signup-page">
                                    <div class="signup-header">
                                        <h2>Pengajuan Cuti Tahunan</h2>
                                    </div>
                                    <H4>
<br>                                    <table>
                                        <tr>
                                            <td>NIP</td>
                                            <td>&nbsp&nbsp:&nbsp</td>                                            
                                            <td>1106130038</td>
                                        </tr><tr>
                                            <td>Nama</td>
                                            <td>&nbsp&nbsp:&nbsp</td>                                            
                                            <td>Yaser</td>
                                        </tr><tr>
                                            <td>Divisi</td>
                                            <td>&nbsp&nbsp:&nbsp</td>                                            
                                            <td>Marketing</td>
                                        </tr><tr>
                                            <td>Jabatan</td>
                                            <td>&nbsp&nbsp:&nbsp</td>                                            
                                            <td>Anggota</td>
                                        </tr>
                                    </table>
                                    </H4>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <label>
                                                Jenis Cuti 
                                            </label>
                                            <br>
                                            <select class="form-control margin-bottom-20" name="cuti">
                                                <option>-cuti-</option>
                                                <option value="CutiTahunan">Cuti Tahunan</option>
                                                <option value="CutiLainnya">Cuti Lainnya</option>
                                            </select>
                                        </div>            
                                        <div class="col-sm-6">
                                            <label>Mulai
                                                <span class="color-red">*</span>
                                            </label>
                                            <input class="form-control margin-bottom-20" type="datetime">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Berakhir
                                                <span class="color-red">*</span>
                                            </label>
                                            <input class="form-control margin-bottom-20" type="datetime">
                                        </div>
                                        <div class="col-sm-12">
                                            <label>
                                                Keterangan
                                            </label>
                                            <textarea class="form-control margin-bottom-20"></textarea>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <button class="btn btn-primary" type="submit">Accept</button>
                                        </div>
                                        <div class="col-lg-4 text-right">
                                            <button class="btn btn-primary" type="cancel">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>


                               
                            </div>
                            <div class="clearfix"></div>
                            <!-- End Main Article -->
                        </div>
                    </div>
                
            </div>
        </div>
        </div>
        </div>
         

        <div class="container padding-vert-30">
            <div class="row">
                <div id="copyright">
                    <p>(c) 2017 Your Copyright Info</p>
                </div>
            </div>
        </div>          
        <!-- JS -->
        <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/scripts.js"></script>
        <!-- Isotope - Portfolio Sorting -->
        <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
        <!-- Mobile Menu - Slicknav -->
        <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
        <!-- Animate on Scroll-->
        <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
        <!-- Modernizr -->
        <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
        <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->