<!-- slider -->

<div class="header-slide">
	<div id="owl-demo" class="owl-carousel">

		<?php foreach ($slider as $row ) { ?>

			<div class="item">
				<div class="zoom-container">
					<div class="zoom-caption">
						<span><?php echo $row->video_kat; ?></span>
						<a href="single.html">
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