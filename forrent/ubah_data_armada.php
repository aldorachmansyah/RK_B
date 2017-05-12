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
				<a class="navbar-brand" href="#"><span>For</span>Rent</a>
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
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-table"></use></svg> Daftar Armada</a></li>
			<li><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Status Kendaraan</a></li>
			<li><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-calendar"></use></svg> Jadwal Servis</a></li>
			<li><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-pencil"></use></svg> Rekapitulasi</a></li>
			<li><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-star"></use></svg> Notifikasi</a></li>
			<li><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-app-window"></use></svg> Penyewaan</a></li> 
			<li role="presentation" class="divider"></li>

		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Daftar Kendaraan + Driver</li>
			</ol>
		</div><!--/.row-->
		
		<!-- <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div>-->
		<h1></h1>
		<div style="margin-left: 30px;margin-top: 20px">
	      <form method="POST" action="#">
	        <table>
	          <tr>
	            <td>Nopol</td>
	            <td style="padding: 10px"><input type="text" name="judul" style="width: 300px" value="   (data)"></td>
	          </tr>
	          <tr>
	            <td>Merk Kendaraan</td>
	            <td style="padding: 10px"><input type="text" name="edisi" style="width: 300px" value="   (data)"></td>
	          </tr>
	          <tr>
	            <td>Jenis Kendaraan</td>
	            <td style="padding: 10px"><input type="text" name="pengarang" style="width: 300px" value="   (data)"></td>
	          </tr>
	          <tr>
	            <td>Total Muatan (orang)</td>
	            <td style="padding: 10px"><input type="text" name="kategori" style="width: 300px" value="   (data)"></td>
	          </tr>
	          <tr>
	            <td>Nama Driver</td>
	            <td style="padding: 10px"><input type="text" name="kategori" style="width: 300px" value="   (data)"></td>
	          </tr>
	          <tr>
	            <td>Harga Sewa (per hari)</td>
	            <td style="padding: 10px"><input type="text" name="kategori" style="width: 300px" value="   (data)"></td>
	          </tr>
	            <td></td>
	            <td style="padding-top: 20px;padding-left: 100px;"><input type="submit" name="btnSubmit" value="Simpan" style="color: black">&nbsp;&nbsp;<a href="" style="color: black"><input type="button" value="Cancel"></a></td>
	        </table>
	      </form>
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
