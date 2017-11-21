<?php 
$this->load->view('templates/header');
?>

<div class="row">
    <div class="col-md-12 text-right">
        <a href="<?php echo site_url('Workshop/tambah'); ?>" class="btn btn-primary" style="margin-top:20px;margin-bottom:20px"> <i class="fa fa-plus"> </i> Tambah</a>
    </div>
</div>

<div class="row">
 <table id="example" class="table table-striped table-bordered">
   <thead align=center>
      <tr>
         <th>ID Workshop</th>
         <th>Nama Workshop</th>
         <th>Tempat</th>
         <th>Tanggal</th>
         <th>Waktu</th>
         <th>Harga</th>
         <th>Aksi</th>
     </tr>
 </thead>
 <tbody>
  <?php foreach ($workshop as $key => $value) {?>


     <tr>
        <td> <?php echo $value->id_workshop; ?></td>
        <td> <?php echo $value->nama_workshop; ?></td>
        <td align=center> <?php echo $value->tempat; ?></td>
        <td align=center> <?php echo $value->tanggal; ?></td>
         <td align=center> <?php echo $value->waktu; ?></td>
         <td align=center> <?php echo $value->harga; ?></td>
    <td> <a href="<?php echo site_url('Workshop/delete/'.$value->id_workshop); ?>" class="btn btn-danger"> 
            <i class="fa fa-trash"> </i> </a> 
    <a href="<?php echo site_url('Workshop/edit/'.$value->id_workshop); ?>" class="btn btn-warning"> 
                <i class="fa fa-pencil"> </i> </a>

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