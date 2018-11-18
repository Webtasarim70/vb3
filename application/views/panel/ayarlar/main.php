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


    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">

            <?php
            $alert = $this->session->userdata('alert');
            if ($alert){ ?>

              <div class="alert alert-<?php echo $alert['type'];?> alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-<?php echo $alert['icon'];?>"></i> <?php echo  $alert['title']; ?></h4>
                <?php echo $alert['message'];?>
              </div>
            <?php } ?>
            <!-- form start -->
            <form role="form" action="<?php echo base_url('panel/update_ayar/'); echo $list->ayar_id; ?>" method="POST">

              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Site Başlığı</label>
                  <input type="text" class="form-control" name="site_baslik" value="<?php echo $list->site_baslik ?>"  placeholder="Site Başlığını Giriniz.">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Site Url</label>
                  <input type="text" class="form-control" name="site_url" value="<?php echo $list->site_url ?>"  placeholder="Site Adresini Giriniz">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Site Anahtar Kelime</label>
                  <input type="text" class="form-control" name="site_keyw" value="<?php echo $list->site_keyw ?>"  placeholder="Site Anahtar Kelime Giriniz.">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Site Açıklama</label>
                  <input type="text" class="form-control" name="site_desc" value="<?php echo $list->site_desc ?>"  placeholder="Site Açıklasını Giriniz.">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Site Duyuru</label>
                  <input type="text" class="form-control" name="site_duyuru" value="<?php echo $list->site_duyuru ?>"  placeholder="Site Duyurusunu Giriniz.">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Site Altbilgi</label>
                  <input type="text" class="form-control" name="site_footer" value="<?php echo $list->site_footer ?>"  placeholder="Site Altbilgi Giriniz.">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Site Youtube APIKey</label>
                  <input type="text" class="form-control" name="site_apikey" value="<?php echo $list->site_apikey ?>"  placeholder="Site Apikey Giriniz.">
                </div>

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
  