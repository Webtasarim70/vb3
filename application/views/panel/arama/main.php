   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Arama Sonuçları
        <small>Youtube </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('panel'); ?>"><i class="fa fa-dashboard"></i> Panel</a></li>
      </ol>
    </section>

    <!-- Main content -->

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
            <!--  Video Resim  Video Başlık  Video ID  Video Sahibi  İşlemler -->

            <th>Youtube ID</th>
            <th>Video Resim</th>
            <th>Video Başlık</th>
            <th>Video ID</th>
            <th>Video Sahibi</th>
            <th>İşlemler</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php foreach ($list['items'] as $row ){ 
             $id =$row['id']['videoId'];
             $baslik=$row['snippet']['title'];
             $resim=$row['snippet']['thumbnails']['medium']['url'];
             $sahibi=$row['snippet']['channelTitle'];
             ?>

             <td><?php echo $id; ?></td>
             <td><img style="width: 100px" src="<?php echo $resim; ?>"></td>
             <td><?php echo $baslik; ?></td>
             <td><a href="https://www.youtube.com/watch?v=<?php echo $id; ?>"><?php echo $id; ?> </a></td>
             <td><?php echo $sahibi; ?></td>
             <td><a href="<?php echo base_url('panel/video_ekle_form/'); echo $id; ?>" name="video_ekle" class="btn btn-primary btn-sm"> Siteme Ekle! </a>
              </td>
            </tr>
          <?php } ?>               
        </tbody>
        <tfoot>
          <tr>
            <th>Youtube ID</th>
            <th>Video Resim</th>
            <th>Video Başlık</th>
            <th>Video ID</th>
            <th>Video Sahibi</th>
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