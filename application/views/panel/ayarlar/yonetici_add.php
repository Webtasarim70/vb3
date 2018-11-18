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
            <form role="form" action="<?php echo base_url('panel/yoneticiekle/'); ?>" method="POST">

              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">İsim</label>
                  <input type="text" class="form-control" name="admin_isim"  placeholder="Yönetici İsmi Giriniz">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Admin E-posta</label>
                  <input type="text" class="form-control" name="admin_posta" placeholder="E posta Giriniz">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Admin Şifre</label>
                  <input type="text" class="form-control" name="admin_sifre" placeholder="Şifre Giriniz">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Admin Şifre Tekrar</label>
                  <input type="text" class="form-control" name="sifre_tekrar" placeholder="Şifreyi Tekrar Giriniz">
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
  