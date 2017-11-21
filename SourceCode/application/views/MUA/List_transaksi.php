<?php 
$this->load->view('templates/header');
?>
<div class="row">
	<div class="col-md-12 text-right">
		<a href="<?php echo site_url('Transaksi/tambah'); ?>" class="btn btn-primary" style="margin-top:20px;margin-bottom:20px"> <i class="fa fa-plus"> </i> Tambah</a>
	</div>	
</div>
<br>
<div class="row">
	<table border="1" id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>ID Transaksi</th>
				<th>Tanggal Transaksi</th>
				<th>ID Workshop</th>
				<th>Nama Peserta</th>
				<th>Bukti Pembayaran</th>
				<th>Status</th>
				<th>Aksi</th>

			</tr>
		</thead>
		<tbody>
			<?php foreach ($transaksi as $key => $value) {
				?>
				<tr>
					<td><?php echo $value->id_transaksi; ?></td>
					<td><?php echo $value->tgl_transaksi; ?></td>
					<td><?php echo $value->id_workshop; ?></td>
					<td><?php echo $value->username; ?></td>
					<td><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url()?>assets/uploads/<?php echo $value->bukti_transfer; ?>"></td>
					<td><?php echo $value->status; ?></td>
					<td>
						
							<a href="<?php echo site_url('Transaksi/edit/'.$value->id_transaksi); ?> " class="btn btn-warning">
							<i>Edit </i>
						</a>
						<a href="<?php echo site_url('Transaksi/download/'.$value->id_transaksi); ?> " class="btn btn-danger">
							<i>Download</i>
						</a>

					</td>
				</tr>
				<?php } ?>

			</tbody>
		</table>
	</div>



	<?php 
	$this->load->view('templates/footer');
	?>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable();
		});
	</script>