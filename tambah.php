<?php
	include('config.php');
	include('fungsi.php');

	// mendapatkan data edit
	if(isset($_GET['jenis'])) {
		$jenis	= $_GET['jenis'];
	}

	if (isset($_POST['tambah'])) {
		$jenis	= $_POST['jenis'];
		$nama 	= $_POST['nama'];

		tambahData($jenis,$nama);

		header('Location: '.$jenis.'.php');
	}

	include('header.php');
?>

<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
	<div class="ui container grid">
		<div class="row">
			<div class="fifteen wide computer sixteen wide phone centered column">
				<h2><i class="table icon"></i> TAMBAH <?php echo $jenis?></h2>
				<div class="ui divider"></div>
				<div class="ui grid">
					<div class="sixteen wide computer sixteen wide phone centered column">
						<div class="ui stacked segment">
							<form class="ui form" method="post" action="tambah.php">
								<div class="inline field">
									<label>Nama <?php echo $jenis ?></label>
									<input type="text" name="nama" placeholder="<?php echo $jenis?> baru">
									<input type="hidden" name="jenis" value="<?php echo $jenis?>">
								</div>
								<br>
								<input class="ui green button" type="submit" name="tambah" value="SIMPAN">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>