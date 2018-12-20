<!-- slider -->

<div class="header-slide">
	<div id="owl-demo" class="owl-carousel">

		<?php foreach ($slider as $row ) { ?>

			<div class="item">
				<div class="zoom-container">
					<div class="zoom-caption">
						<span><?php echo $this->Vb_model->kategori($row->video_kat); ?></span>
						<a href="<?php echo base_url('vb/izle/').$row->video_url;?>">
							<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
						</a>
						<p>
							<?php echo word_limiter($row->video_baslik,5);?>
						</p>
					</div>
					<img src="<?php echo $row->video_resim; ?>" />
				</div>
			</div>
		<?php } ?>


	</div>
</div>