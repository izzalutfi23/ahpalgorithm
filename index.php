<?php
include('config.php');
include('fungsi.php');

// header
include('header.php');

$kriteria = mysqli_query($koneksi, "SELECT * FROM kriteria");
$jml_kr = mysqli_num_rows($kriteria);
$alternatif = mysqli_query($koneksi, "SELECT * FROM alternatif");
$jml_alter = mysqli_num_rows($alternatif);
?>

<!-- BEGIN CONTEN -->
<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
	<div class="ui container grid">
		<div class="row">
			<div class="fifteen wide computer sixteen wide phone centered column">
				<h2><i class="home icon"></i> DASHBOARD</h2>
				<div class="ui divider"></div>
				<div class="ui grid">
					<!-- BEGIN STATISTIC ITEM -->
					<!-- Begin Page Views -->
					<div class="six wide computer sixteen wide phone centered column">
						<div class="ui raised segment">
							<div class="content">
								<div class="ui centered grid">
									<div class="row">
										<div class="six wide computer column">
											<div class="ui small image simpleimage itemcolor1">
												<i class="table icon simpleicon"></i>
											</div>
										</div>
										<div class="ten wide computer column">
											<span>
												<h4>Kriteria</h4>
											</span>
											<?=$jml_kr?> kriteria
											<a class="ui tiny label simplelable" href="kriteria.php"><i
													class="eye icon"></i>
												Details</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Page Views -->
					<!-- Begin Downloads -->
					<div class="six wide computer sixteen wide phone centered column">
						<div class="ui raised segment">
							<div class="content">
								<div class="ui centered grid">
									<div class="row">
										<div class="six wide computer column">
											<div class="ui small image simpleimage itemcolor3">
												<i class="table icon simpleicon"></i>
											</div>
										</div>
										<div class="ten wide computer column">
											<span>
												<h4>Hasil</h4>
											</span>
											<?=$jml_kr?> Hasil
											<a class="ui tiny label simplelable" href="hasil.php"><i
													class="eye icon"></i>
												Details</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Downloads -->
					<!-- END STATISTIC ITEM -->

					<!-- Grafik -->
					<div class="eight wide computer sixteen wide phone column justifed">
						<h4>EXAMPLE TITLE</h4>
						<div class="ui divider"></div>
						<div class="ui tall stacked segment">
							<a class="ui blue ribbon label">Chart.js Bar Chart - Kriteria</a>
							<canvas id="example-multiaxis"></canvas>
							<div class="ui divider"></div>
						</div>
					</div>
					<!-- End Grafik -->

					<section class="content" style="margin-bottom: 20px; margin-top: 20px;">
						<h2 class="ui header">Analitycal Hierarchy Process (AHP)</h2>

						<p>Analytic Hierarchy Process (AHP) merupakan suatu model pendukung keputusan yang dikembangkan
							oleh Thomas L. Saaty. Model pendukung keputusan ini akan menguraikan masalah multi faktor
							atau multi kriteria yang kompleks menjadi suatu hirarki. Hirarki didefinisikan sebagai suatu
							representasi dari sebuah permasalahan yang kompleks dalam suatu struktur multi level dimana
							level pertama adalah tujuan, yang diikuti level faktor, kriteria, sub kriteria, dan
							seterusnya ke bawah hingga level terakhir dari alternatif.</p>

						<p>AHP membantu para pengambil keputusan untuk memperoleh solusi terbaik dengan mendekomposisi
							permasalahan kompleks ke dalam bentuk yang lebih sederhana untuk kemudian melakukan sintesis
							terhadap berbagai faktor yang terlibat dalam permasalahan pengambilan keputusan tersebut.
							AHP mempertimbangkan aspek kualitatif dan kuantitatif dari suatu keputusan dan mengurangi
							kompleksitas suatu keputusan dengan membuat perbandingan satu-satu dari berbagai kriteria
							yang dipilih untuk kemudian mengolah dan memperoleh hasilnya.</p>

						<p>AHP sering digunakan sebagai metode pemecahan masalah dibanding dengan metode yang lain
							karena alasan-alasan sebagai berikut :</p>

						<ol class="ui list">
							<li>Struktur yang berhirarki, sebagai konsekuesi dari kriteria yang dipilih, sampai pada
								subkriteria yang paling dalam.</li>
							<li>Memperhitungkan validitas sampai dengan batas toleransi inkonsistensi berbagai kriteria
								dan alternatif yang dipilih oleh pengambil keputusan.</li>
							<li>Memperhitungkan daya tahan output analisis sensitivitas pengambilan keputusan.</li>
						</ol>

						<br>

						<h3 class="ui header">Tabel Tingkat Kepentingan menurut Saaty (1980)</h3>
						<table class="ui collapsing striped blue table">
							<thead>
								<tr>
									<th>Nilai Numerik</th>
									<th>Tingkat Kepentingan <em>(Preference)</em></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="center aligned">1</td>
									<td>Sama pentingnya <em>(Equal Importance)</em></td>
								</tr>
								<tr>
									<td class="center aligned">2</td>
									<td>Sama hingga sedikit lebih penting</td>
								</tr>
								<tr>
									<td class="center aligned">3</td>
									<td>Sedikit lebih penting <em>(Slightly more importance)</em></td>
								</tr>
								<tr>
									<td class="center aligned">4</td>
									<td>Sedikit lebih hingga jelas lebih penting</td>
								</tr>
								<tr>
									<td class="center aligned">5</td>
									<td>Jelas lebih penting <em>(Materially more importance)</em></td>
								</tr>
								<tr>
									<td class="center aligned">6</td>
									<td>Jelas hingga sangat jelas lebih penting</td>
								</tr>
								<tr>
									<td class="center aligned">7</td>
									<td>Sangat jelas lebih penting <em>(Significantly more importance)</em></td>
								</tr>
								<tr>
									<td class="center aligned">8</td>
									<td>Sangat jelas hingga mutlak lebih penting</td>
								</tr>
								<tr>
									<td class="center aligned">9</td>
									<td>Mutlak lebih penting <em>(Absolutely more importance)</em></td>
								</tr>
							</tbody>
						</table>
					</section>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->

<?php include('footer.php'); ?>


<script type="text/javascript">
	var barChartData = {
		labels: ['Budget', 'Kamera', 'Ukuran Layar', 'Memori', 'Baterai'],
		datasets: [{
			label: 'Kriteria',
			backgroundColor: [
				window.chartColors.red,
				window.chartColors.orange,
				window.chartColors.yellow,
				window.chartColors.green,
				window.chartColors.blue,
				window.chartColors.purple
			],
			data: [
				2,
				12,
				6.1,
				32,
				10
			],
		}]

	};

	var pieChartData = {
		datasets: [{
			data: [
				1,
				1,
				1,
				1,
				1,
			],
			backgroundColor: [
				window.chartColors.red,
				window.chartColors.orange,
				window.chartColors.yellow,
				window.chartColors.green,
				window.chartColors.blue,
			]
		}],
		labels: [
			<?php 
				$qnamaalter = mysqli_query($koneksi, "SELECT nama FROM alternatif");
				while($dnmalter = mysqli_fetch_array($qnamaalter)){
					echo "'".$dnmalter['nama']."', ";
				}
			?>
		]
	};
	window.onload = function () {
		var ctx = document.getElementById('example-multiaxis').getContext('2d');
		window.myBar = new Chart(ctx, {
			type: 'bar',
			data: barChartData,
			options: {
				responsive: true,
				tooltips: {
					mode: 'index',
					intersect: true
				},
				scales: {
					yAxes: [{
						type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
						display: true,
						position: 'left',
						id: 'y-axis-1',
					}],
				}
			}
		});

		var abc = document.getElementById('example-pie').getContext('2d');
		window.myPieChart = new Chart(abc, {
			type: 'pie',
			data: pieChartData,
			options: {
				responsive: true
			}
		});

	};
</script>