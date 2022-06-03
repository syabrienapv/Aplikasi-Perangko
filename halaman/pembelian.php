<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard</title>
		<!-- menghubungkan dengan file css -->
		<link rel="stylesheet" type="text/css" href="../style.css">
		<!-- menghubungkan dengan file jquery -->
		<script type="text/javascript" src="jquery.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>

	<body>
	<!-- 
	Author : diki alfarabi hadi 
	Site : www.malasngoding.com
	-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
		<a class="navbar-brand" href="#">
			<img src="../image/icon.png" width="45" height="30" alt="">
		</a>
		<a class="navbar-brand" href="#">E-Perangko</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Beranda</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="halaman/home.php">Pembelian</a>
			</li>
			<!--
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Dropdown
			</a>
			<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
				<li><a class="dropdown-item" href="#">Action</a></li>
				<li><a class="dropdown-item" href="#">Another action</a></li>
				<li>
				<hr class="dropdown-divider">
				</li>
				<li><a class="dropdown-item" href="#">Something else here</a></li>
			</ul>
			</li>-->
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Dropdown
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</li>
			</ul>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="../image/perangko.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Perangko</h5>
						<p class="card-text">Ini adalah test</p>
						<a href="#" class="btn btn-primary">Beli Sekarang</a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="../image/materai.jfif" alt="Card image cap" width="286" height="178.53">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Ini adalah test</p>
						<a href="#" class="btn btn-primary">Beli Sekarang</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php 
	/*
		if(isset($_GET['page'])){
			$page = $_GET['page'];

			switch ($page) {
				case 'home':
					include "halaman/home.php";
					break;
				case 'tentang':
					include "halaman/tentang.php";
					break;
				case 'tutorial':
					include "halaman/tutorial.php";
					break;			
				default:
					echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
					break;
			}
		}else{
			include "halaman/home.php";
		}
		*/
		?>

	<div class="footer">
		<div class="footer-about">
			About Us:
			<ul>
				<li>
					email : email@email.email
				</li>
				<li>
					alamat : Jl. Pos Indonesia
				</li>
			</ul>
		</div>
	</div>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>