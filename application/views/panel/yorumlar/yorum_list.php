    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Videolar
          <small>Eklenmiş Yorumlara İlişkin Liste </small>
        </h1>

        <ol class="breadcrumb">
          <li><a href="<?php echo base_url('panel'); ?>"><i class="fa fa-dashboard"></i> Panel</a></li>
          <li class="active">Yorum Listesi</li>
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
               (`yorum_id`, `yorum_video_id`, `yorum_isim`, `yorum_eposta`, `yorum_website`, `yorum_icerik`, `yorum_durum`) -->
               <th>#</th>
               <th>İlgili Video</th>
               <th>İsim</th>
               <th>Eposta</th>
               <th>Website</th>
               <th>İçerik</th>
               <th>Durum</th>
               <th>İşlemler</th>
             </tr>
           </thead>
           <tbody>
            <tr>
              <?php $say=1; foreach ($list as $row ){ ?>
                <td><?php echo $say++; ?></td>
                <td><?php $id=$row->yorum_video_id;
                $where= array('video_id' => $id, );
                $url=$this->Panel_model->getvideourl($where);
                echo $retVal = ($url=="") ? 'silinmiş' : $url ;
                
                ?>
              </td>
              <td><?php echo $row->yorum_isim; ?></td>
              <td><?php echo $row->yorum_eposta; ?></td>
              <td><?php echo $row->yorum_website; ?></td>
              <td><?php echo $row->yorum_icerik; ?></td>
              <td><?php echo $row->yorum_durum; ?></td>

              <td>
                <a href="<?php echo base_url('panel/yorum_sil/'); echo $row->yorum_id; ?>" class="btn btn-danger btn-sm"> Sil </a>
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