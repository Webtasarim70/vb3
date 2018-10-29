  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/AdminLTE-master/');?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="<?php echo base_url('panel/video_bak'); ?>" method="post" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="video_bak" class="form-control" placeholder="Youtube video Ara!">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">YÖNETİM PANELİ</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Yönetim</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('');?>"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
          
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-play-circle"></i> <span>Videolar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('');?>panel/video"><i class="fa fa-circle-o"></i> Video Listesi</a></li>
            
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Örnek</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('assets/AdminLTE-master/');?>index.html"><i class="fa fa-circle-o"></i> adminLTE tema</a></li>
            
          </ul>
        </li>
            </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
