<!DOCTYPE html>
<html>
<head>
	<title>ForRent</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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

		.tombol a {
		    float: left;
		    display: block;
		    color: white;
		    text-align: center;
		    padding: 10px 10px;
		    text-decoration: none;
		    font-size: 17px;
		}

		/* Change the color of links on hover */
		.tombol div:hover {
		    background-color: yellow;
		    color: black;
		    /*width: 200px;
		    height: 100px;*/
		}

		/* Add a color to the active/current link */
		.tombol p.active {
		    background-color: #4CAF50;
		    color: white;
		}
	</style>
</head>
<body>

	<!-- <div class="topnav" id="myTopnav">
	  <a href="home.php">Home</a>
	  <a href="#news">News</a>
	  <a href="#contact">Contact</a>
	  <a href="#about">About</a>
	  <a href="#about" style="margin-left: 850px">Logout</a>
	</div> -->

	<!-- <div class="container-fluid">
		<div class="navbar">
			<a href="index.html" class="logo font1"><b class="font2">ForRent</a>
		</div>
	</div><!-- /.container-fluid -->

	<div id="page">
		<div class="col-md-12 badan">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="col-md-12 center" style="margin-top: 185px;padding-bottom: 30px;opacity: 0.75">
					<div class="col-md-4 daftar ">
						<a href="kendaraan_driver.php">
						<div class="tombol" style="height: 100px;">
							<!-- <img src=""> -->
							<p class="font2" style="color: black; padding-top: 10px">Daftar Kendaraan & Driver</p>	
						</div>
						</a>
					</div>
					<div class="col-md-4 daftar">
						<a href="Status_Kendaraan.php">
						<div class="tombol" style="height: 100px">
							<!-- <img src=""> -->
							<p class="font2" style="color: black;padding-top: 20px">Status Kendaraan</p>
						</div>
						</a>
					</div>
					<div class="col-md-4 daftar ">
						<a href="Jadwal_service_baru.php">
						<div class="tombol" style="height: 100px">
							<!-- <img src=""> -->
							<p class="font2" style="color: black;padding-top: 10px">Jadwal Service Kendaraan</p>
						</div>
						</a>
					</div>
					<div class="col-md-4 daftar ">
						<a href="jadwal_rekap_baru.php">
						<div class="tombol" style="height: 100px">
							<!-- <img src=""> -->
							<p class="font2" style="color: black;padding-top: 10px">Jadwal Rekap Kendaraan</p>
						</div>
						</a>
					</div>
					<div class="col-md-4 daftar ">
						<a href="penyewaan.php">
						<div class="tombol" style="height: 100px">
							<!-- <img src=""> -->
							<p class="font2" style="color: black;padding-top: 20px">Penyewaan</p>
						</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="loading"></div>
</body>
<script type="text/javascript">
	function onReady(callback) {
	    var intervalID = window.setInterval(checkReady, 1000);

	    function checkReady() {
	        if (document.getElementsByTagName('body')[0] !== undefined) {
	            window.clearInterval(intervalID);
	            callback.call(this);
	        }
	    }
	}

	function show(id, value) {
	    document.getElementById(id).style.display = value ? 'block' : 'none';
	}

	onReady(function () {
	    show('page', true);
	    show('loading', false);
	});
</script>
</html>