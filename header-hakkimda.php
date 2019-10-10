<?php 
include 'admin/option/baglan.php';
include 'header2.php';

$ayarsor=$db->prepare("select * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>



<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">



	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>





	<title><?php echo $ayarcek['ayar_title']; ?></title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

	<!-- Custom styles for this template -->
	<link href="css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

		<!-- Navigation -->
	    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top" style="background-color: #e3f2fd;" id="mainNav">

		<div class="container">
			<a class="navbar-brand" href="index.php" style="color:#ffffff;">Ömer Faruk DİLEK</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" style="background-color: #ffffff
;" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fa fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">

					<li class="nav-item">
						<a class="nav-link" href="index.php" style="color:#ffffff;"><i class="fa fa-home"></i> Anasayfa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="hakkimda.php" style="color:#ffffff;"><i class="fa fa-male"></i> Hakkımda</a>
					</li>
					
					<?php

					$kategorisor=$db->prepare("SELECT * FROM kategori order by kategori_sira ASC");
					$kategorisor->execute();

					while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) { ?>


				<li class="nav-item">
						<a class="nav-link" style="color:#ffffff;" href="kategori-<?=seo($kategoricek["kategori_ad"])?>"><?php echo $kategoricek['kategori_icon']; ?></i> <?php echo $kategoricek['kategori_ad']; ?></a>
					</li>
					
					<?php } ?>

					
					<li class="nav-item">
						<a class="nav-link" style="color:#ffffff;" href="iletisim.php"><i class="fa fa-envelope"></i> İLETİŞİM</a>
					</li>
				</ul>
			</div>
		</nav>

		<!-- Page Header -->
		<header class="masthead" style="background-image: url('img/about-bg.jpg')">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-10 mx-auto">
						<div class="page-heading">
							<h1>Hakkımda</h1>
							<span class="subheading">This is what I do.</span>
						</div>
					</div>
				</div>
			</div>
		</header>