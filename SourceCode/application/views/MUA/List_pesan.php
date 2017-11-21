<?php 
$this->load->view('templates/header');
?>

<div class="row">
    <div class="col-md-12 text-right">
       <a href="<?php echo site_url('Pesan/tambah'); ?>" class="btn btn-primary" style="margin-top:20px;margin-bottom:20px"> <i class="fa fa-plus"> </i> Tambah</a> 
    </div>
</div>

<div class="row">
 <table id="example" class="table table-striped table-bordered">
   <thead align=center>
      <tr>
         <th>ID Pesan</th>
         <th>Tanggal</th>
         <th>Pengirim</th>
         <th>Isi Pesan</th>
         <th>Aksi</th>
     </tr>
 </thead>
 <tbody>
  <?php foreach ($pesan as $key => $value) {?>


     <tr>
        <td> <?php echo $value->id_pesan; ?></td>
        <td> <?php echo $value->tgl_pesan; ?></td>
        <td align=center> <?php echo $value->username; ?></td>
        <td align=center> <?php echo $value->isi_pesan; ?></td>
        <td> <a href="<?php echo site_url('Pesan/delete/'.$value->id_pesan); ?>" class="btn btn-danger"> 
            <i class="fa fa-trash"> </i> </a> 
   
        </td>
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
 } );
</script>