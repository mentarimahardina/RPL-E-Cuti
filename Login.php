<?php
session_start();//session starts here

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>E-Cuti-Login</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="generator" content="Codeply">
		<link href="favicon.ico" rel="shortcut icon">
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open Sans:300,400" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source Sans Pro:300,400" />
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
		<link href="cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet" />
    </head>
	<body>
    	<div id="body_bg">
			<div class="primary-container-group">
				<div class="primary-container-background">
					<div class="primary-container"></div>
					<div class="clearfix"></div>
				</div>
				<div class="primary-container">
					<div id="container_hornav" class="container no-padding">
						<div class="logo">
							<a href="index.php">
								<img src="assets/img/logo.png" alt="Logo" />
							</a>
						</div>
						<p class="site-slogan">Pengajuan Cuti Online</p>
						<div class="row">
							<div class="hornav-block">
								<div id="hornav" class="pull-right">
									<ul id="hornavmenu" class="nav navbar-nav">
									   <li>
											<a href="login.php">Login</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="container">
						<header id="first">
							<div class="header-content">
								<div class="inner">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<h2 class="text-center">Login</h2>
												<p style="text-align: center">
													<form action="" method="post">
													<br>
														<div class="login-header margin-bottom-30">
														</div>
														<div class="input-group margin-bottom-20">
															<span class="input-group-addon">
																<i class="fa fa-user"></i>
															</span>
															<input name="username" type="text" class="form-control" placeholder="Username">
														</div>
														<div class="input-group margin-bottom-20">
															<span class="input-group-addon">
																<i class="fa fa-lock"></i>
															</span>
															<input name="password" type="password" class="form-control" placeholder="Password">
														</div>
													<br>
														<div class="row">
															<div class="col-md-6">
																<button type="submit" class="btn btn-primary btn-block btn-lg" value="login" name="login">Sign-in</button>
															</div>
														</div>
													</form>
												</p>
											</div>
										</div>
									</div>
								</div> 
							</div>
						</header>
					</div>
				</div>
			</div>				
			<div id="base" class="container padding-vert-30">
			<div class="row">
				<div class="col-md-6">
					<h3 class="margin-bottom-10">Alamat</h3>
					<p>Jalan Telekomukasi no 1, DayeuhKolot, Kabupaten Bandung</p>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-3">
					<h3 class="margin-bottom-10">Kontak </h3>
						<p>PT. XYZ
							<br />Sistem Informasi
							<br />Telkom University
							<br />Bandung
						</p>
						<p>Email:
							<a href="mailto:ecuti@xyz.com">ecuti@xyz.com</a>
							<br />Website:
							<a href="http://www.xyz.com">www.xyz.com</a>
						</p>
				</div>
			<div class="col-md-3">
				<h3 class="margin-bottom-10">Sosial Media</h3>
				<ul class="menu">
					<li>
						<a class="fa-facebook" href="https://facebook.com/">Facebook</a>
					</li>
					<li>
						<a class="fa-twitter" href="https://twitter.com/">Twitter</a>
					</li>
					<li>
						<a class="fa-google" href="https://google.com/">Google+</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
		<div class="container padding-vert-30">
			<div class="row">
				<div id="copyright">
					<p>(c) 2017 Your Copyright Info</p>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="assets/js/scripts.js"></script>
		<script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
		<script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
		<script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
		<script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    </body>
</html>

<?php

include("koneksi.php");

if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    $check_user="select * from login WHERE username='$username'AND password='$password'";
	$run=mysqli_query($dbcon,$check_user);
	$hasil=mysqli_fetch_array($run);
	$level=$hasil['level'];

    if(mysqli_num_rows($run)){	
		if($level =='karyawan'){
			echo "<script>window.open('karyawan-home.php','_self')</script>";
		}elseif($level =='hrd'){
			echo "<script>window.open('hrd-home.php','_self')</script>";
		}elseif($level =='manager'){
			echo "<script>window.open('manager-home.php','_self')</script>";
		}	    	
        $_SESSION['username']=$username;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
        echo "<script>('Email or password is incorrect!')</script>";
    }
}
?>