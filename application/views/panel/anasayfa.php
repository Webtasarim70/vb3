<?php $this->load->view('panel/inc/head');  ?>

  <?php 
  $this->load->view('panel/inc/header') ?>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
<?php   
$this->load->view('panel/inc/sidebar')?>
  <!-- =============================================== -->

<?php  
$this->load->view('panel/main')?>

<?php  
$this->load->view('panel/inc/footer')?>