<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Video 
      <small>Düzenle </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('panel'); ?>"><i class="fa fa-dashboard"></i> Panel</a></li>
      <li><a href="<?php echo base_url('panel/video'); ?>"><i class="fa fa-play-circle"></i> Videolar</a></li>
      <li class="active">Video Düzenle</li>
    </ol>
  </section>

  <!-- Main content -->

  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">

          <!-- form start -->
          <form role="form" action="<?php echo base_url('panel/update/'); echo $list->video_id; ?>" method="POST">
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Video Başlığı</label>
                <input type="text" class="form-control" name="video_baslik" value="<?php echo $list->video_baslik ?>"  placeholder="Video Başlığını Giriniz.">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Video Sahibi</label>
                <input type="text" class="form-control" name="video_sahibi" value="<?php echo $list->video_sahibi ?>"  placeholder="Video Sahibi Giriniz.">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Video Resim URL</label>
                <input type="text" class="form-control" name="video_resim" value="<?php echo $list->video_resim ?>"  placeholder="Video Resim Giriniz.">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Video Açıklama</label>
                <input type="text" class="form-control" name="video_aciklama" value="<?php echo $list->video_aciklama ?>"  placeholder="Video Açıklama Giriniz.">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Video Etiketler</label>
                <input type="text" class="form-control" name="video_etiketler" value="<?php echo $list->video_etiketler ?>"  placeholder="Video Etiketlerini Giriniz.">
              </div>
              <div class="form-group">
               <label for="durum">Video Durum</label>
               <select name="durum" class="form-control">
                <?php
                if ($list->video_durum==1){
                  echo '<option value="1" selected>Onaylı  </option>  
                  <option value="2">Onay Bekliyor  </option>';
                }else{
                  echo '<option value="1">Onaylı  </option>  
                  <option value="2" selected>Onay Bekliyor  </option>';
                }
                ?>
              </select>
            </div>
            <div class="form-group">
             <label for="tavsiye">Video Öne Çıkar</label>
             <select name="tavsiye" class="form-control">
              <?php
              if ($list->video_tavsiye==1){
                echo '<option value="1" selected>Öne Çıkarılmış </option>  
                <option value="2">Normal  </option>';
              }else{
                echo '<option value="1">Öne Çıkarılmış  </option>  
                <option value="2" selected>Normal  </option>';
              }
              ?>
            </select>
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary pull-right">GÜncelle!</button>
        </div>
      </form>
    </div>
    <!-- /.box -->
  </div>
  <!-- /.row -->
</section>



</div>
  <!-- /.content-wrapper -->