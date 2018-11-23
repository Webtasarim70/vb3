<!-- new -->


<div class="box">
	<div class="box-header">
		<h2><i class="fa fa-vimeo-square"></i> Yeni Videolar</h2>
	</div>
	<div class="box-content">
		<div class="row">

			<?php foreach ($yeniler as $row ) { ?>

				<div class="col-md-4">
					<div class="wrap-vid">
						<div class="zoom-container">
							<div class="zoom-caption">
								<span><?php echo $this->Vb_model->kategori($row->video_kat); ?> </span>
								<a href="single.html">
									<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
								</a>
								<p></p>
							</div>
							<img src="<?php echo $row->video_resim; ?>" />
						</div>
						<h3 class="vid-name"><a href="#"><?php echo word_limiter($row->video_baslik,5);?></a></h3>
						<div class="info">
							<h5>By <a href="#"><?php echo $row->video_sahibi?></a></h5>
							<span><i class="fa fa-calendar"></i><?php echo $row->video_eklemetarihi; ?></span> 
							<span><i class="fa fa-eye"></i><?php echo $row->video_goruntulenme?></span>
						</div>
					</div>
				</div>

			<?php  } ?>
		</div>
	</div>
</div>