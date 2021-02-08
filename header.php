<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="initial-scale=1, minimum-scale=1, width=device-width" name="viewport">
	<meta name="robots" content="all,follow">
	<title>SIMPLE-UI Admin Templates</title>
	<link rel="icon" href="images/logo.png" sizes="32x32">
	<!-- inject:css -->
	<link rel="stylesheet" href="vendors/fomantic-ui/semantic.min.css">
	<link rel="stylesheet" href="css/main.css">
	<!-- endinject -->
	<!-- chartjs:css -->
	<link rel="stylesheet" href="vendors/chart.js/Chart.min.css">
	<!-- endinject -->
	<!-- datatables:css -->
	<link rel="stylesheet" href="vendors/datatables.net/datatables.net-se/css/dataTables.semanticui.min.css">
	<link rel="stylesheet" href="vendors/datatables.net/datatables.net-responsive-se/css/responsive.semanticui.min.css">
	<link rel="stylesheet" href="vendors/datatables.net/datatables.net-buttons-se/css/buttons.semanticui.min.css">
</head>

<body>
	<div class="ui grid">
		<div class="row">
			<div class="ui grid">
				<!-- BEGIN NAVBAR -->
				<!-- computer only navbar -->
				<div class="computer only row">
					<div class="column">
						<div class="ui top fixed menu navcolor">
							<div class="item">
								<img src="images/logo.png" alt="SimpleIU">
							</div>
							<div class="left menu">
								<div class="nav item">
									<strong class="navtext">Analytic Hierarchy Process (AHP)</strong>
								</div>
							</div>
							<div class="ui top pointing dropdown admindropdown link item right">
								<img class="imgrad" src="images/user.png" alt="">
								<span class="clear navtext"><strong>Hi, Kabayan</strong></span>
								<i class="dropdown icon navtext"></i>
								<div class="menu">
									<div class="item">
										<p><i class="settings icon"></i>Account Setting</p>
									</div>
									<div class="item">
										<p><i class="sign out alternate icon"></i>Logout</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end computer only navbar -->
				<!-- mobile and tablet only navbar -->
				<div class="tablet mobile only row">
					<div class="column">
						<div class="ui top fixed menu navcolor">
							<a id="showmobiletabletsidebar" class="item navtext"><i class="content icon"></i></a>
							<div class="right menu">
								<div class="item">
									<strong class="navtext">AHP</strong>
								</div>
								<div class="item">
									<img src="images/logo.png">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end mobile and tablet only navbar -->
				<!-- END NAVBAR -->

				<!-- BEGIN SIDEBAR -->
				<!-- mobile and tablet only sidebar -->
				<div class="tablet mobile only row">
					<div id="mobiletabletsidebar" class="mobiletabletsidebar animate hidden">
						<div class="ui left fixed vertical menu scrollable">
							<div class="item">
								<table>
									<tr>
										<td>
											<img class="ui mini image" src="images/logo.png">
										</td>
										<td>
											<span class="clear"><strong>SIMPLE-UI</strong></span>
										</td>
									</tr>
								</table>
							</div>
							<a class="item" href="index.php"><i class="home icon"></i> Home</a>
							<a class="item" href="kriteria.php"><i class="table icon"></i> Kriteria</a>
							<a class="item" href="alternatif.php"><i class="table icon"></i> Alternatif</a>
							<a class="item" href="bobot_kriteria.php"><i class="columns icon"></i> Perbandingan Kriteria</a>
							<a class="item" href="bobot.php?c=1"><i class="columns icon"></i> Perbandingan Alternatif</a>
							<a class="item" href="table.html"><i class="table icon"></i> Kriteria</a>
							<a class="item" href="hasil.php"><i class="table icon"></i>Hasil</a>
							<div class="item" id="hidemobiletabletsidebar">
								<button class="fluid ui button">
									Tutup
								</button>
							</div>
						</div>
					</div>
				</div>
				<!-- end mobile and tablet only sidebar -->
				<!-- computer only sidebar -->
				<div class="computer only row">
					<div class="left floated three wide computer column" id="computersidebar">
						<div class="ui vertical fluid menu scrollable" id="simplefluid">
							<div class="clearsidebar"></div>
							<div class="item">
								<img src="images/user.png" id="sidebar-image">
							</div>
							<a class="item" href="index.php"><i class="home icon"></i> Home</a>
							<a class="item" href="kriteria.php"><i class="table icon"></i> Kriteria</a>
							<a class="item" href="alternatif.php"><i class="table icon"></i> Alternatif</a>
							<a class="item" href="bobot_kriteria.php"><i class="columns icon"></i> Perbandingan Kriteria</a>
							<a class="item" href="bobot.php?c=1"><i class="columns icon"></i> Perbandingan Alternatif</a>
							<!-- Begin Simple Accordion -->
							<div class="ui accordion simpleaccordion item">
								<div class="title titleaccordion item"><i class="dropdown icon"></i> Daftar Kriteria</div>
								<div class="content contentaccordion">
								<?php
									if (getJumlahKriteria() > 0) {
										for ($i=0; $i <= (getJumlahKriteria()-1); $i++) { 
											echo "<a class='item itemaccordion' href='bobot.php?c=".($i+1)."'><i
											class='columns icon'></i>".getKriteriaNama($i)."</a>";
										}
									}

								?>
								</div>
							</div>
							<!-- End Simple Accordion -->
							<a class="item" href="hasil.php"><i class="table icon"></i>Hasil</a>
							<a class="item"></a>
						</div>
					</div>
				</div>
				<!-- end computer only sidebar -->
				<!-- END SIDEBAR -->
			</div>
		</div>