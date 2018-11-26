    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
         Kategori
         <small>Kategori Öne Çıkar </small>
       </h1>

       <ol class="breadcrumb">
        <li><a href="<?php echo base_url('panel'); ?>"><i class="fa fa-dashboard"></i> Panel</a></li>
        <li class="active">Kategori Önce Çıkar</li>
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
            <form role="form" action="<?php echo base_url('panel/kategoritavsiye'); ?>" method="POST">

                <div class="form-group col-md-6">
                    <label for="tavsiye1">Öne Çıkarılacak 1. Kategori</label>
                    <select name="tavsiye1" class="form-control">
                        <?php $this->Panel_model->selectBoxKategori(); ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="tavsiye2">Öne Çıkarılacak 2. Kategori</label>
                    <select name="tavsiye2" class="form-control">
                        <?php $this->Panel_model->selectBoxKategori(); ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary pull-right">Sec!</button>
                </div>

              </div>
              <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.row -->
      </section>



    </div>