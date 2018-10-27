  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kontrol Paneli
        <small>Hoşgeldiniz.Kontrol sizde..</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('panel'); ?>"><i class="fa fa-dashboard"></i> Kontrol Paneli</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
<!-- yotube video arama formu -->

<form action="<?php echo base_url('panel/video_bak'); ?>" method="POST">
   <div class="box-body">
      <div class="input-group input-group-sm">
        <input type="text" name="video_bak" class="form-control">
        <span class="input-group-btn">
          <button type="submit" class="btn btn-info btn-flat">Youtube'da Video Ara!</button>
      </span>
  </div>
  </form>
  <br>

  <!-- Info boxes -->
  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-play-circle"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Video Sayısı</span>
                <span class="info-box-number">???<small> Adet</small></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>



</section>
<!-- /.content -->
</div>
  <!-- /.content-wrapper -->