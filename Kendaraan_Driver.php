<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ForRent</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src="js/lumino.glyphs.js"></script>

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="home.php"><span>For</span>Rent</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="login.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li class="active"><a href="#"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-table"></use></svg> Daftar Armada</a></li>
			<li role="presentation" class="divider"></li>

		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="home.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Daftar Kendaraan + Driver</li>
			</ol>
		</div><!--/.row-->
		
		<!-- <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div>-->
		<h1></h1>

		<table border="1" style="border-collapse: collapse;width: 100%;" id="table">
			<thead>
				<tr style="background: #C9C9C9;">
					<th style="text-align: center;padding: 8px">Nopol</th>
					<th style="text-align: center;">Merk</th>
					<th style="text-align: center;">Jenis</th>
					<th style="text-align: center;">Muatan (orang)</th>
					<th style="text-align: center;">Driver</th>
					<th style="text-align: center;">Harga Sewa (per hari)</th>
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
					<td style="padding: 3px;"><a style="color: black" href="ubah_data_armada.php"><button>Ubah</button></a> <a style="color: black" href="#"><button>Hapus</button></a></td>
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
					<td style="padding: 3px;"><a style="color: black" href="ubah_data_armada.php"><button>Ubah</button></a> <a style="color: black" href="#"><button>Hapus</button></a></td>
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
					<td style="padding: 3px;"><a style="color: black" href="ubah_data_armada.php"><button>Ubah</button></a> <a style="color: black" href="#"><button>Hapus</button></a></td>
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
					<td style="padding: 3px;"><a style="color: black" href="ubah_data_armada.php"><button>Ubah</button></a> <a style="color: black" href="#"><button>Hapus</button></a></td>
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
					<td style="padding: 3px;"><a style="color: black" href="ubah_data_armada.php"><button>Ubah</button></a> <a style="color: black" href="#"><button>Hapus</button></a></td>
				</tr>
			</tbody>
		</table>

		<div align="center">
			<h1></h1>
			<a href="tambah_data_armada.php" style="color: black"><button type="button">Tambah Data</button></a>
		</div>

	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
