<?php 
	include('config.php');
	include('fungsi.php');

	// menjalankan perintah edit
	if(isset($_POST['edit'])) {
		$id = $_POST['id'];

		header('Location: edit.php?jenis=kriteria&id='.$id);
		exit();
	}

	// menjalankan perintah delete
	if(isset($_POST['delete'])) {
		$id = $_POST['id'];
		deleteKriteria($id);
	}

	// menjalankan perintah tambah
	if(isset($_POST['tambah'])) {
		$nama = $_POST['nama'];
		tambahData('kriteria',$nama);
	}

	include('header.php');
?>

<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
	<div class="ui container grid">
		<div class="row">
			<div class="fifteen wide computer sixteen wide phone centered column">
				<h2><i class="table icon"></i> KRITERIA</h2>
				<div class="ui divider"></div>
				<div class="ui grid">
					<div class="sixteen wide computer sixteen wide phone centered column">
						<h4></h4>
						<!-- BEGIN DATATABLE -->
						<div class="ui stacked segment">
							<div class="ui blue ribbon icon label">TABEL KRITERIA</div>
							<br><br>
							<table id="example" class="ui celled table responsive nowrap unstackable"
								style="width:100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Kriteria</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
											// Menampilkan list kriteria
											$query = "SELECT id,nama FROM kriteria ORDER BY id";
											$result	= mysqli_query($koneksi, $query);

											$i = 0;
											while ($row = mysqli_fetch_array($result)) {
												$i++;
										?>
									<tr>
										<td><?php echo $i ?></td>
										<td><?php echo $row['nama'] ?></td>
										<td class="right aligned collapsing">
											<form method="post" action="kriteria.php">
												<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
												<button type="submit" name="edit"
													class="ui mini teal left labeled icon button"><i
														class="right edit icon"></i>EDIT</button>
												<button type="submit" name="delete"
													class="ui mini red left labeled icon button"><i
														class="right remove icon"></i>DELETE</button>
											</form>
										</td>
									</tr>


									<?php } ?>
								</tbody>
								<tfoot class="full-width">
									<tr>
										<th colspan="3">
											<a href="tambah.php?jenis=kriteria">
												<div class="ui right floated small primary labeled icon button">
												<i class="plus icon"></i>Tambah
												</div>
											</a>
										</th>
									</tr>
								</tfoot>
							</table>
						</div>
						<!-- END DATATABLE -->
					</div>
				</div>
				<br>
				<form action="alternatif.php">
					<button class="ui right labeled icon button" style="float: right;">
						<i class="right arrow icon"></i>
						Lanjut
					</button>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>