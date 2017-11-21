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
        <th>Username</th>
         <th>Password</th>
         <th>Nama</th>
         <th>Alamat</th>
         <th>No.HP</th>
         
         <th>Aksi</th>
     </tr>
 </thead>
 <tbody>
  <?php foreach ($member as $key => $value) {?>


     <tr>
           <td align=center> <?php echo $value->username; ?></td>
        <td align=center> <?php echo $value->password; ?></td>
        <td> <?php echo $value->nama; ?></td>
        <td> <?php echo $value->alamat; ?></td>
        <td align=center> <?php echo $value->nohp; ?></td>
     
        <td> <a href="<?php echo site_url('Member/delete/'.$value->username); ?>" class="btn btn-danger"> 
            <i class="fa fa-trash"> </i> </a> 
             <a href="<?php echo site_url('Member/edit/'.$value->username); ?>" class="btn btn-warning"> 
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