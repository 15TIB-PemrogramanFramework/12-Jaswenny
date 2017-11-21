<?php $this->load->view('templates/header'); ?>
<?php echo form_open_multipart('Transaksi/tambah_aksi');?>


<form action="<?php echo $aksi ?>" method="POST">
	<div class="form-group">
		<label>ID Workshop : </label>
		<input type="text" name="id_workshop" class="form-control" placeholder="Inputkan nama" required value="<?php echo $id_workshop; ?>">
	</div>
	<div class="form-group">
		<label>Nama Peserta : </label>
		<input type="text" name="username" class="form-control" placeholder="Inputkan jurusan" required value="<?php echo $username ; ?>">
	</div>
	<div class="form-group">
		<label> Bukti Pembayaran :</label>
		<input type="file" name="bukti_transfer" class="form-control" placeholder="Inputkan akreditasi"  ; ?>">
	</div>
	
	<button class="btn btn-primary" type="submit"> <?php echo $button; ?> </button>
</form>


<!--<?php $this->load->view('templates/footer'); ?>-->