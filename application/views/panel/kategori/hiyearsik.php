    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
         Kategori
         <small>Eklenmiş Kategorilere İlişkin Liste </small>
       </h1>

       <ol class="breadcrumb">
        <li><a href="<?php echo base_url('panel'); ?>"><i class="fa fa-dashboard"></i> Panel</a></li>
        <li class="active">Kategori Listesi</li>
      </ol>
    </section>
    <?php
    $alert = $this->session->userdata('alert');
    if ($alert){ ?>

      <div class="alert alert-<?php echo $alert['type'];?> alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-<?php echo $alert['icon'];?>"></i> <?php echo  $alert['title']; ?></h4>
        <?php echo $alert['message'];?>
      </div>
    <?php } ?>



    <?php $this->Panel_model->kategoriListesi(); ?>

    <!-- Main content -->
    <section class="content">
     <div class="box">

     </div>
     <!-- /.box-body -->
   </div>

 </section>
 <!-- /.content -->
</div>
<!-- /.content-wrapper -->