<?php $this->load->view('templates/header'); ?>


<form method="POST">
	<div class="form-group">
		<label>Username : </label>
		<input type="text" name="username" class="form-control" placeholder="Inputkan username" >
	</div>
	<div class="form-group">
		<label>Password: </label>
		<input type="text" name="password" class="form-control" placeholder="Inputkan password">
	</div>

	<button class="btn btn-primary" type="submit" value="LOGIN"> LOGIN </button>

	Belum punya akun? Klik <a href = "<?php echo site_url('Member/tambah'); ?>" > Daftar </a>

</form>