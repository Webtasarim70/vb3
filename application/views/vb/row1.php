<!-- tavsiyeler-->
<div class="row">
	<div class="featured">

		<!-- video -->

		<div class="main-vid">
			<div class="col-md-6">
				<div class="zoom-container">
					<div class="zoom-caption">
						<span><?php $video=$tavsiyeler[0];  echo $this->Vb_model->kategori($video->video_kat);   ?> </span>
						<a href="<?php echo base_url('vb/izle/').$video->video_url;?>">
							<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
						</a>
						<p><small> <?php  echo word_limiter($video->video_baslik,8);?></small></p>
					</div>
					<img style="width:550px;" src="<?php echo $video->video_resim; ?>" />
				</div>
			</div>
		</div>

		<!-- kucuk -->
		<div class="sub-vid">

			<!-- 1-->
			<div class="col-md-3">
				<div class="zoom-container">
					<div class="zoom-caption">
						<span><?php $video=$tavsiyeler[1];  echo $this->Vb_model->kategori($video->video_kat);?></span>
						<a href="<?php echo base_url('vb/izle/').$video->video_url;?>">
							<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
						</a>
						<p><small> <?php echo word_limiter($video->video_baslik,5);?></small></p>
					</div>
					<img src="<?php echo $video->video_resim; ?>" />
				</div>
				<div class="zoom-container">
					<div class="zoom-caption">
						<span><?php $video=$tavsiyeler[2];  echo $this->Vb_model->kategori($video->video_kat); ?></span>
						<a href="<?php echo base_url('vb/izle/').$video->video_url;?>">
							<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
						</a>
						<p><small> <?php echo word_limiter($video->video_baslik,5);?></small></p>
					</div>
					<img src="<?php echo $video->video_resim; ?>" />
				</div>
			</div>

			<!-- 2 -->
			<div class="col-md-3">
				<div class="zoom-container">
					<div class="zoom-caption">
						<span><?php $video=$tavsiyeler[3];  echo $this->Vb_model->kategori($video->video_kat);?></span>
						<a href="<?php echo base_url('vb/izle/').$video->video_url;?>">
							<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
						</a>
						<p><small> <?php echo word_limiter($video->video_baslik,5);?></small></p>
					</div>
					<img src="<?php echo $video->video_resim; ?>" />
				</div>
				<div class="zoom-container">
					<div class="zoom-caption">
						<span><?php $video=$tavsiyeler[4];  echo $this->Vb_model->kategori($video->video_kat);?></span>
						<a href="<?php echo base_url('vb/izle/').$video->video_url;?>">
							<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
						</a>
						<p><small> <?php echo word_limiter($video->video_baslik,5);?></small></p>
					</div>
					<img src="<?php echo $video->video_resim; ?>" />
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>