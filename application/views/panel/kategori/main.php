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

    <!-- Main content -->
    <section class="content">
     <div class="box">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Kategori Adı</th>
            <th>Varsa Üst Kategorisi Adı</th>
            <th>Kategori Açıklama</th>
            <th>Kategori Durum</th>
            <th>İşlemler</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php foreach ($list as $row ){ ?>
              <td><?php echo $row->kategori_id; ?></td>
              <td><?php echo $row->kategori_adi; ?></td>
             <!--  <td><?php echo $row->ana_kategori_id; ?></td> -->
              <td><?php echo $this->Panel_model->ustkat($row->ana_kategori_id); ?></td>

              <td><?php echo $row->kategori_aciklama; ?></td>
              <td><?php echo $row->kategori_durum; ?></td>
              <td><a href="<?php echo base_url('panel/kategori_form/'); echo $row->kategori_id; ?>" class="btn btn-primary btn-sm"> Düzenle </a>
                <a href="<?php echo base_url('panel/kategorisil/'); echo $row->kategori_id; ?>" class="btn btn-danger btn-sm"> Sil </a></td>
              </tr>
            <?php } ?>               
          </tbody>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Kategori Adı</th>
              <th>Varsa Üst Kategorisi Adı</th>
              <th>Kategori Açıklama</th>
              <th>Kategori Durum</th>
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