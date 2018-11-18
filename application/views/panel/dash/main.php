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
      <!--todo -->
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-edit"></i> Çalışıyooz.</h4>
        <? include "todo.php"; ?>

      </div>
      <!--/ -->
      <?php 
      $api=$this->Panel_model->rowcount('videolar');
      if (!$api) { ?>

       <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-info"></i> YOUTUBE APIKEY</h4>
        Arama Yapıp veritabanına video bilgisi eklemek için API 
        <a href="<?php echo base_url('panel/ayar_form'); ?>">giriniz.</a>
      </div> 
    <?php } ?>

    <div class="alert alert-info alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-info"></i> Dikkat</h4>
      Yan Menüdeki arama fonksiyonunu kullanarak youtube'dan video arayıp sitenize ekleyebilirsiniz.
    </div>
    <!-- yotube video arama formu -->
        <!-- <form action="<?php echo base_url('panel/video_bak'); ?>" method="POST">
        <div class="box-body">
        <div class="input-group input-group-sm">
        <input type="text" name="video_bak" class="form-control">
        <span class="input-group-btn">
        <button type="submit" class="btn btn-info btn-flat">Youtube'da Video Ara!</button>
        </span>
        </div>
        </form>
        <br> -->

        <!-- Info boxes -->
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="fa fa-play-circle"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Video Sayısı</span>
                <span class="info-box-number">

                  <?php echo $this->Panel_model->rowcount('videolar'); ?>
                  <small> Adet</small></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-folder"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Kategori</span>
                  <span class="info-box-number"><?php echo $this->Panel_model->rowcount('kategori'); ?><small> Adet</small></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Yönetici</span>
                  <span class="info-box-number"><?php echo $this->Panel_model->rowcount('admin'); ?><small> Adet</small></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-blue"><i class="fa fa-comments"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Öneri</span>
                  <span class="info-box-number"><?php echo $this->Panel_model->rowcount('oneriler'); ?><small> Adet</small></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-commenting"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Yorum</span>
                  <span class="info-box-number"><?php echo $this->Panel_model->rowcount('yorumlar'); ?><small> Adet</small></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-commenting-o"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Onaysız Yorum</span>
                  <span class="info-box-number"><?php 
                  $where = array('yorum_durum' =>0);
                  echo $this->Panel_model->rowcountif($where, 'yorumlar'); ?><small> Adet</small></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>




          </div>
        </section>
        <!-- /.content -->
      </div>
        <!-- /.content-wrapper -->