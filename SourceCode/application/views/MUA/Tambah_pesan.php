<?php $this->load->view('templates/header'); ?>


<form action="<?php echo $aksi ?>" method="POST">
	<div class="form-group">
		<label>Pengirim : </label>
		<input type="text" name="username" class="form-control" placeholder="Inputkan nama" required value="<?php echo $username; ?>">
	</div>
	<div class="form-group">
		<label>Isi Pesan : </label>
		<input type="text" name="isi_pesan" class="form-control" placeholder="Inputkan isi" required value="<?php echo $isi_pesan ; ?>">
	</div>
	
	
	<button class="btn btn-primary" type="submit"> <?php echo $button; ?> </button>
</form>


<!--<?php $this->load->view('templates/footer'); ?>-->