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
		    background-color: black;
		    overflow: hidden;
		    opacity: 0.7;
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
	  <a href="home.php">Home</a>
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
			<div style="margin-left: -140px; margin-top: 70px;background-color: black;opacity: 0.95;padding: 50px; width: 1100px">
				<h2 style="color: white">Status Kendaraan</h2>
				<table border="1" style="border-collapse: collapse;width: 100%;background-color: white">
						<thead>
							<tr style="background: #C9C9C9;">
								<th style="text-align: center;padding: 8px">Nopol</th>
								<th style="text-align: center;">Merk</th>
								<th style="text-align: center;">Jenis</th>
								<th style="text-align: center;">Muatan (orang)</th>
								<th style="text-align: center;">Driver</th>
								<th style="text-align: center;">Harga Sewa (per hari)</th>
								<th style="text-align: center;">Status</th>
								<th style="text-align: center;width: 130px">#</th>
							</tr>
						</thead>
						<tbody>
							<tr style="text-align: center;">
								<td>B 510 NDA</td>
								<td>Kia</td>
								<td>Rio</td>
								<td>5</td>
								<td>Ario Bimo</td>
								<td>250000</td>
								<td style="background-color: #65f442;"><font color="white">Ready</font></td>
								<td style="padding: 3px;"><a style="color: black" href="ubah_status_service.php"><button>Ubah</button></a></td>
							</tr>
						</tbody>
						<tbody>
							<tr style="text-align: center;">
								<td>B 4707 BAN</td>
								<td>Honda</td>
								<td>City</td>
								<td>4</td>
								<td>Bimo Ario</td>
								<td>250000</td>
								<td style="background-color: #65f442;"><font color="white">Ready</font></td>
								<td style="padding: 3px;"><a style="color: black" href="ubah_status_service.php"><button>Ubah</button></a></td>
							</tr>
						</tbody>
						<tbody>
							<tr style="text-align: center;">
								<td>L 1712 KL</td>
								<td>Suzuki</td>
								<td>Ertiga</td>
								<td>6</td>
								<td>Sumila</td>
								<td>350000</td>
								<td style="background-color:#b75f12"><font color="white">On Service</font></td>
								<td style="padding: 3px;"><a style="color: black" href="ubah_status_service.php"><button>Ubah</button></a></td>
							</tr>
						</tbody>
						<tbody>
							<tr style="text-align: center;">
								<td>D 123 VE</td>
								<td>Toyota</td>
								<td>Innova</td>
								<td>7</td>
								<td>Faizul</td>
								<td>400000</td>
								<td style="background-color: #ff3535;"><font color="white">Booked</font></td>
								<td style="padding: 3px;"><a style="color: black" href="ubah_status_service.php"><button>Ubah</button></a></td>
							</tr>
						</tbody>
						<tbody>
							<tr style="text-align: center;">
								<td>W 120 SI</td>
								<td>Toyota</td>
								<td>Agya</td>
							
								<td>4</td>
								<td>Sina</td>
								<td>280000</td>
								<td style="background-color: #f7933b;"><font color="white">Not Ready</font></td>
								<td style="padding: 3px;"><a style="color: black" href="ubah_status_service.php"><button>Ubah</button></a></td>
							</tr>
						</tbody>
					</table>
				<!-- <div class="col-md-4 daftar ">
					<a href="penyewaan.php">
					<div class="putih" style="height: 100px">
						<img src="">
						<p class="font2" style="padding-top: 20px">Penyewaan</p>
					</div>
					</a>
				</div> -->
			</div>
		</div>
	</div>
</body>
</html>