<?php $this->load->view('templates/header'); ?>


<form action="<?php echo $aksi ?>" method="POST">
	<div class="form-group">
		<label>ID Transaksi : </label> <?php print_r($id_transaksi) ?>
		<input type="hidden" name="id_transaksi" class="form-control" placeholder="Inputkan nama" required value="<?php echo $id_transaksi; ?>">
	</div>
	<div class="form-group">
		<label>Tanggal Transaksi : </label> <?php print_r($tgl_transaksi) ?>
		<input type="hidden" name="tgl_transaksi" class="form-control" placeholder="Inputkan nama" required value="<?php echo $tgl_transaksi; ?>">
	</div>
	<div class="form-group">
		<label>ID Workshop : </label> <?php print_r($id_workshop) ?>
		<input type="hidden" name="id_workshop" class="form-control" placeholder="Inputkan jurusan" required value="<?php echo $id_workshop ; ?>">
	</div>
	<div class="form-group">
		<label> Nama Peserta :</label> <?php print_r($username) ?>
		<input type="hidden" name="username" class="form-control" placeholder="Inputkan akreditasi" required value="<?php echo $username ; ?>">
	</div>
	
	<div class="form-group">
		<label>Status : </label>
		<input type="text" name="status" class="form-control" placeholder="Inputkan jurusan" required value="<?php echo $status ; ?>">
	</div>
		
	
	<button class="btn btn-primary" type="submit"> <?php echo $button; ?> </button>
</form>


<!--<?php $this->load->view('templates/footer'); ?>-->