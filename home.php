<!DOCTYPE html>
<html>
<head>
	<title>ForRent</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style>
		/* Add a black background color to the top navigation */
		.topnav {
		    background-color: #474747;
		    overflow: hidden;
		    opacity: 0.9;
		}

		/* Style the links inside the navigation bar */
		.topnav a {
		    float: left;
		    display: block;
		    color: white;
		    text-align: center;
		    padding: 14px 16px;
		    text-decoration: none;
		    font-size: 17px;
		}

		/* Change the color of links on hover */
		.topnav a:hover {
		    background-color: yellow;
		    color: black;
		}

		/* Add a color to the active/current link */
		.topnav a.active {
		    background-color: #4CAF50;
		    color: white;
		}
	</style>
</head>
<body>

	<div class="topnav" id="myTopnav">
	  <a href="#home">Home</a>
	  <a href="#news">News</a>
	  <a href="#contact">Contact</a>
	  <a href="#about">About</a>
	  <a href="#about" style="margin-left: 850px">Logout</a>
	</div>

	<!-- <div class="container-fluid">
		<div class="navbar">
			<a href="index.html" class="logo font1"><b class="font2">ForRent</a>
		</div>
	</div><!-- /.container-fluid --> -->


	<div class="col-md-12 badan">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="col-md-12 center" style="margin-top: 216px">
				<a href="Kendaraan_Driver.php"><div class="col-md-4 daftar ">
					<div class="putih" style="height: 100px">
						<!-- <img src=""> -->
						<p class="font2" style="padding-top: 10px">Daftar Kendaraan & Driver</p>
					</div>
				</div></a>
				<a href="Status_Kendaraan.php"><div class="col-md-4 daftar ">
					<div class="putih" style="height: 100px">
						<!-- <img src=""> -->
						<p class="font2" style="padding-top: 20px">Status Kendaraan</p>
					</div>
				</div></a>
				<a href="Jadwal_Service.php"><div class="col-md-4 daftar ">
					<div class="putih" style="height: 100px">
						<!-- <img src=""> -->
						<p class="font2" style="padding-top: 10px">Jadwal Service Kendaraan</p>
					</div>
				</div></a>
				<a href="jadwal_rekap_kendaraan.php"><div class="col-md-4 daftar ">
					<div class="putih" style="height: 100px">
						<!-- <img src=""> -->
						<p class="font2" style="padding-top: 10px">Jadwal Rekap Kendaraan</p>
					</div>
				</div></a>
				<a href="notifikasi.php"><div class="col-md-4 daftar ">
					<div class="putih" style="height: 100px">
						<!-- <img src=""> -->
						<p class="font2" style="padding-top: 20px">Notifikasi</p>
					</div>
				</div></a>
				<a href="penyewaan.php"><div class="col-md-4 daftar ">
					<div class="putih" style="height: 100px">
						<!-- <img src=""> -->
						<p class="font2" style="padding-top: 20px">Penyewaan</p>
					</div>
				</div></a>
			</div>
		</div>
	</div>
</body>
</html>