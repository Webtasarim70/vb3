    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
         Kategori
         <small>Yeni Kategori Ekle </small>
       </h1>

       <ol class="breadcrumb">
        <li><a href="<?php echo base_url('panel'); ?>"><i class="fa fa-dashboard"></i> Panel</a></li>
        <li class="active">Kategori Ekle</li>
      </ol>
    </section>


    <!-- Main content -->

    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">

            <!-- kategori_id   ana_kategori_id   kategori_adi  kategori_aciklama   kategori_durum  -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url('panel/kategoriekle'); ?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kategori Ekle</label>
                  <input type="text" class="form-control" name="kategori" value=""  placeholder="Kategori Adını Giriniz">
                </div>

                <div class="form-group">
                  <label for="kategori_ustid">Varsa Üst Kategorisini Seçiniz </label>
                  <select class="selectpicker form-control" data-live-search="true" data-width="100%" data-style="btn-danger" name="ana_kategori_id">
                    <option value="0">Üst Kategori</option>
                    <?php $this->Panel_model->selectBoxKategori(); ?>
                  </select>
                </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kategori Açıklaması </label>
                  <input type="text" class="form-control" name="kategori_aciklama" value=""  placeholder="Kategori Açıklamasını Giriniz">
                </div>
                <button type="submit" class="btn btn-primary pull-right">Ekle!</button>

              </div>
              <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.row -->
      </section>



    </div>