<?php $this->load->view('templates/header'); ?>


<form action="<?php echo $aksi ?>" method="POST">
	<div class="form-group">
		<label>Username : </label> <?php print_r($username) ?>
		<input type="hidden" name="username" class="form-control" placeholder="Inputkan nama" required value="<?php echo $username; ?>">
	</div>
	<div class="form-group">
		<label>Nama : </label>
		<input type="text" name="nama" class="form-control" placeholder="Inputkan nama" required value="<?php echo $nama; ?>">
	</div>
	<div class="form-group">
		<label>Alamat: </label>
		<input type="text" name="alamat" class="form-control" placeholder="Inputkan jurusan" required value="<?php echo $alamat ; ?>">
	</div>
	<div class="form-group">
		<label> No.HP :</label>
		<input type="text" name="nohp" class="form-control" placeholder="Inputkan akreditasi" required value="<?php echo $nohp ; ?>">
	</div>
	
	<div class="form-group">
		<label>Password : </label>
		<input type="text" name="password" class="form-control" placeholder="Inputkan jurusan" required value="<?php echo $password ; ?>">
	</div>
	
	
	<button class="btn btn-primary" type="submit"> <?php echo $button; ?> </button>
</form>


<!--<?php $this->load->view('templates/footer'); ?>-->