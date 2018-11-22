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
          <li class="active">Video Listesi</li>
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
              <th>Video Resim</th>
              <th>Video Başlık</th>
              <th>Video Url</th>
              <th>Video Sahibi</th>
              <th>Kategori</th>
              <th>Önce Çıkar</th>
              <th>Durum</th>
              <th>İşlemler</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php $say=1; foreach ($list as $row ){ ?>
                <td><?php echo $say++; ?></td>
                <td><img style="width: 100px" src="<?php echo $row->video_resim;?>"></td>
                <td><?php echo word_limiter($row->video_baslik,5) ; ?></td>
                <td><?php echo $row->video_url; ?></td>
                <td><?php echo $row->video_sahibi; ?></td>
                <td> <?php echo $kat=$this->Panel_model->kat($row->video_kat); ?></td>
                <td>

                  <input class="toggle_check2" data-toggle="toggle" data-size="small" data-on="Tavsiye" data-onstyle="info"  data-off="Normal" data-offstyle="warning" type="checkbox"
                  dataID="<?php echo $row->video_id; ?>"
                  dataURL="<?php echo base_url('panel/durum/videolar/video_id/video_tavsiye')?>"
                  <?php echo ($row->video_tavsiye == 1) ? 'checked': ''; ?>
                  >
                  </td>


                  <td>
                    <input class="toggle_check" data-toggle="toggle" data-size="small" data-on="Aktif" data-onstyle="primary"  data-off="Pasif" data-offstyle="danger" type="checkbox"
                    dataID="<?php echo $row->video_id; ?>"
                    dataURL="<?php echo base_url('panel/durum/videolar/video_id/video_durum')?>"
                    <?php echo ($row->video_durum == 1) ? 'checked': ''; ?>
                    >
                  </td>
                  <td><a href="<?php echo base_url('panel/video_form/'); echo $row->video_id; ?>" class="btn btn-primary btn-sm"> Düzenle </a>
                    <a href="<?php echo base_url('panel/delete/'); echo $row->video_id; ?>" class="btn btn-danger btn-sm"> Sil </a>



                  </td>
                </tr>
              <?php } ?>               
            </tbody>
            <tfoot>
              <tr>
                <th>#</th>
                <th>Video Resim</th>
                <th>Video Başlık</th>
                <th>Video Url</th>
                <th>Video Sahibi</th>
                <th>Kategori</th>
                <th>Önce Çıkar</th>
                <th>Durum</th>
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