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
			<div style="margin-left: -140px; margin-top: 70px;background-color: black;opacity: 0.85;padding: 50px; width: 1100px">
				<h2 style="color: white">Jadwal Service</h2>
				<table border="1" style="border-collapse: collapse;width: 100%;background-color: white">
					<thead>
						<tr style="background: #C9C9C9;">
							<th style="text-align: center;padding: 8px">Nopol</th>
							<th style="text-align: center;">Driver</th>
							<th style="text-align: center;">Total km Masuk</th>
							<th style="text-align: center;">Total km Keluar</th>
							<th style="text-align: center;width: 130px">Kondisi Kendaraan</th>
						</tr>
					</thead>
					<tbody>
						<tr style="text-align: center;">
							<td style="background-color: #65f442;">B 510 NDA</td>
							<td>Ario Bimo</td>
							<td>10.000</td>
							<td>12.000</td>
							<td style="padding: 3px;"><a style="color: black" href="ubah_data_armada.php"><button>Detail Kondisi</button></a></td>
						</tr>
					</tbody>
					<tbody>
						<tr style="text-align: center;">
							<td style="background-color: #ff3535;">B 4707 BAN</td>
							<td>Bimo Ario</td>
							<td>10.000</td>
							<td>12.000</td>
							<td style="padding: 3px;"><a style="color: black" href="ubah_data_armada.php"><button>Detail Kondisi</button></a></td>
						</tr>
					</tbody>
					<tbody>
						<tr style="text-align: center;">
							<td style="background-color: #ff3535;">L 1712 KL</td>
							<td>Sumila</td>
							<td>10.000</td>
							<td>12.000</td>
							<td style="padding: 3px;"><a style="color: black" href="ubah_data_armada.php"><button>Detail Kondisi</button></a></td>
						</tr>
					</tbody>
					<tbody>
						<tr style="text-align: center;">
							<td style="background-color: #ff3535;">D 123 VE</td>
							<td>Faizul</td>
							<td>10.000</td>
							<td>12.000</td>
							<td style="padding: 3px;"><a style="color: black" href="ubah_data_armada.php"><button>Detail Kondisi</button></a></td>
						</tr>
					</tbody>
					<tbody>
						<tr style="text-align: center;">
							<td style="background-color: #ff3535;">W 120 SI</td>
							<td>Sina</td>
							<td>10.000</td>
							<td>12.000</td>
							<td style="padding: 3px;"><a style="color: black" href="ubah_data_armada.php"><button>Detail Kondisi</button></a></td>
						</tr>
					</tbody>
				</table>

				<div align="center">
					<h1></h1>
					<a href="tambah_data_armada.php" style="color: black"><button type="button">Tambah Data</button></a>
				</div>
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