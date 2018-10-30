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
      <li class="active">Video Detay Düzenleme</li>
    </ol>
  </section>

  <!-- Main content -->

  <section class="content">
   <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">

        <?php 
        $id=$list['items']['0']['id'];
        $sahibi=$list['items']['0']['snippet']['channelTitle'];
        $baslik=$list['items']['0']['snippet']['title'];
        $aciklama=$list['items']['0']['snippet']['description'];
        $resim=$list['items']['0']['snippet']['thumbnails']['medium']['url'];
        $etiket=$list['items']['0']['snippet']['tags'];
        ?>

        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $id; ?>" allowfullscreen></iframe>
        </div>
        <!-- form start -->
        <form role="form" action="<?php echo base_url('panel/video_ekle/'); echo $id; ?>" method="POST">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Video Başlığı</label>
              <input type="text" class="form-control" name="video_baslik" value="<?php echo $baslik ?>"  placeholder="Video Başlığını Giriniz.">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Video Sahibi</label>
              <input type="text" class="form-control" name="video_sahibi" value="<?php echo $sahibi ?>"  placeholder="Video Sahibi Giriniz.">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Video Resim URL</label>
              <input type="text" class="form-control" name="video_resim" value="<?php echo $resim ?>"  placeholder="Video Resim Giriniz.">
            </div>
            <div class="form-group">
              <label for="video_aciklama">Video Açıklama</label>
              <textarea class="form-control" name="video_aciklama" rows="10"> <?php echo $aciklama ?></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Video Etiketler</label>
              <input type="text" class="form-control" name="video_etiketler" value="<?php foreach ($etiket as $row){ echo $row.", ";}  ?>"  placeholder="Video Etiketlerini Giriniz.">
            </div>
            
                  <div class="form-group col-md-6">
                   <label for="durum">Video Durum</label>
                   <select name="durum" class="form-control">

                    <option value="1" selected>Onaylı  </option>  
                    <option value="2">Onay Bekliyor  </option>
                    
                  </select>
                </div>
                <div class="form-group col-md-6">
                 <label for="tavsiye">Video Öne Çıkar</label>
                 <select name="tavsiye" class="form-control">
                  <option value="1" selected>Öne Çıkarılmış </option>  
                  <option value="2">Normal  </option>
                </select>
              </div>
              <div class="form-group col-md-6">
                   <label for="tarih">Video Ekleme Tarihi</label>
                   <input class="form-control" type="date" name="tarih" id="tarih">
                    
                  </select>
                </div>
                <div class="form-group col-md-6">
                 <label for="kategori">Video Kategorisi</label>
                 <select name="kategori" class="form-control">
                  <option value="10" selected>deneme </option>  
                  <option value="20">deneme 2 </option>
                </select>
              </div>
       
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary pull-right">Videoyu Ekle!</button>
      </div>
    </form>
  </div>
  <!-- /.box -->
</div>
<!-- /.row -->
</section>



</div>
  <!-- /.content-wrapper -->