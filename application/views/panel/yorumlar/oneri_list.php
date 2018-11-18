    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Videolar
          <small>Eklenmiş Önerilere İlişkin Liste </small>
        </h1>

        <ol class="breadcrumb">
          <li><a href="<?php echo base_url('panel'); ?>"><i class="fa fa-dashboard"></i> Panel</a></li>
          <li class="active">Önerilen Videolar Listesi</li>
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

      <!-- Main content -->
      <section class="content">
       <div class="box">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <!-- 
               oneri_id   oneri_isim  oneri_posta   oneri_video   oneri_tarih -->
               <th>#</th>
               <th>İsim</th>
               <th>Eposta</th>
               <th>Video</th>
               <th>Tarih</th>
               <th>İşlemler</th>
             </tr>
           </thead>
           <tbody>
            <tr>
              <?php foreach ($list as $row ){ ?>
                <td><?php echo $row->oneri_id; ?></td>
                <td><?php echo $row->oneri_isim; ?></td>
                <td><?php echo $row->oneri_posta; ?></td>
                <td><?php echo $row->oneri_video; ?></td>
                <td><?php echo $row->oneri_tarih; ?></td>
                <td>
                  <a href="<?php echo base_url('panel/video_ekle_form/'); echo $row->oneri_video; ?>" class="btn btn-info btn-sm"> Videoyu Ekle </a>
                  <a href="<?php echo base_url('panel/video_ara/'); echo $row->oneri_video; ?>" class="btn btn-info btn-sm"> Videoyu Ara </a>

                  <a href="<?php echo base_url('panel/oneri_sil/'); echo $row->oneri_id; ?>" class="btn btn-danger btn-sm"> Sil </a>
                </td>
              </tr>
            <?php } ?>               
          </tbody>
          <tfoot>
            <tr>
             <th>#</th>
             <th>İsim</th>
             <th>Eposta</th>
             <th>Video</th>
             <th>Tarih</th>
             <th>İşlemler</th>
           </tr>
         </tfoot>
       </table>
     </div>
     <!-- /.box-body -->
   </div>

 </section>
 <!-- /.content -->
</div>
<!-- /.content-wrapper -->