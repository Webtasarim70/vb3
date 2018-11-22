<div class="row">
	<div id="main-content" class="col-md-8">
		
		<!-- box1 -->
		<?php $this->load->view('vb/box/featured'); ?>

		<!-- box2 -->
		<?php $this->load->view('vb/box/random'); ?>

		<!-- box3 -->
		<?php $this->load->view('vb/box/hot'); ?>

		<!-- box4 -->
		<?php $this->load->view('vb/box/new'); ?>

	</div>
	<?php $this->load->view('vb/sidebar'); ?>
</div>