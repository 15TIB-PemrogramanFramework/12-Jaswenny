<?php $this->load->view('templates/header'); ?>


<form action="<?php echo $aksi ?>" method="POST">
	<div class="form-group">
		<label>Nama Workshop : </label>
		<input type="text" name="nama_workshop" class="form-control" placeholder="Inputkan nama" required value="<?php echo $nama_workshop; ?>">
	</div>
	<div class="form-group">
		<label>Deskripsi : </label>
		<input type="text" name="deskripsi" class="form-control" placeholder="Inputkan jurusan" required value="<?php echo $deskripsi ; ?>">
	</div>
	<div class="form-group">
		<label> Tempat :</label>
		<input type="text" name="tempat" class="form-control" placeholder="Inputkan akreditasi" required value="<?php echo $tempat ; ?>">
	</div>
	<div class="form-group">
		<label>Tanggal : </label>
		<input type="text" name="tanggal" class="form-control" placeholder="Inputkan nama" required value="<?php echo $tanggal; ?>">
	</div>
	<div class="form-group">
		<label>Waktu : </label>
		<input type="text" name="waktu" class="form-control" placeholder="Inputkan jurusan" required value="<?php echo $waktu ; ?>">
	</div>
	<div class="form-group">
		<label> Harga :</label>
		<input type="text" name="harga" class="form-control" placeholder="Inputkan akreditasi" required value="<?php echo $harga ; ?>">
	</div>
	
	<button class="btn btn-primary" type="submit"> <?php echo $button; ?> </button>
</form>


<!--<?php $this->load->view('templates/footer'); ?>-->