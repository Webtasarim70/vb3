    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Videolar
          <small>Eklenmiş Videolara İlişkin Liste </small>
        </h1>

        <ol class="breadcrumb">
          <li><a href="<?php echo base_url('panel'); ?>"><i class="fa fa-dashboard"></i> Panel</a></li>
          <li class="active">Yönetici Listesi</li>
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
                INSERT INTO `admin`(`admin_id`, `admin_posta`, `admin_sifre`, `admin_isim`) -->
                <th>#</th>
                <th>İsim</th>
                <th>Eposta</th>
                <th>İşlemler</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php foreach ($list as $row ){ ?>
                  <td><?php echo $row->admin_id; ?></td>
                  <td><?php echo $row->admin_isim; ?></td>
                  <td><?php echo $row->admin_posta; ?></td>
                  <td><a href="<?php echo base_url('panel/yonetici_form/'); echo $row->admin_id; ?>" class="btn btn-primary btn-sm"> Düzenle </a>
                    <a href="<?php echo base_url('panel/yonetici_sil/'); echo $row->admin_id; ?>" class="btn btn-danger btn-sm"> Sil </a>
                  </td>
                </tr>
              <?php } ?>               
            </tbody>
            <tfoot>
              <tr>
                <th>#</th>
                <th>İsim</th>
                <th>Eposta</th>
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