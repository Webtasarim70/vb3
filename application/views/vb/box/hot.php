<!-- hot -->

<div class="box">
	<div class="box-header">
		<h2><i class="fa fa-globe"></i> Çok İzlenen Videolar</h2>
	</div>
	<div class="box-content">
		<div class="row">
			<div class="col-md-6">
				<div class="wrap-vid">
					<div class="zoom-container">
						<div class="zoom-caption">
							<span><?php $video=$sicaklar[0]; echo $this->Vb_model->kategori($video->video_kat); ?></span>
							<a href="<?php echo base_url('vb/izle/').$video->video_url;?>">
								<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
							</a>
						</div>
						<img src="<?php echo $video->video_resim; ?>" />
					</div>
					<h3 class="vid-name"><a href="<?php echo base_url('vb/izle/').$video->video_url;?>"><?php echo word_limiter($video->video_baslik,5);?></a></h3>
					<div class="info">
						<h5>By <a href="<?php echo base_url('vb/izle/').$video->video_url;?>"><?php echo $video->video_sahibi;?></a></h5>
						<span><i class="fa fa-calendar"></i><?php echo $video->video_eklemetarihi; ?></span>
						<span><i class="fa fa-eye"></i><?php echo $video->video_goruntulenme?></span>
					</div>
				</div>
				<p class="more"><?php echo word_limiter($video->video_aciklama,20);?>?></p>
				<a href="<?php echo base_url('vb/izle/').$video->video_url;?>" class="btn btn-1">devamı..</a>
			</div>

			<div class="col-md-6">

				<?php for ($i=1; $i < 5; $i++) { ?>
					<div class="post wrap-vid">
						<div class="zoom-container">
							<div class="zoom-caption">
								<span><?$video=$sicaklar[$i]; echo $this->Vb_model->kategori($video->video_kat); ?></span>
								<a href="<?php echo base_url('vb/izle/').$video->video_url;?>">
									<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
								</a>
								<!-- <p>Video's Name</p> -->
							</div>
							<img src="<?php echo $video->video_resim; ?>" />
						</div>
						<div class="wrapper">
							<h5 class="vid-name"><a href="<?php echo base_url('vb/izle/').$video->video_url;?>"><?php echo word_limiter($video->video_baslik,3);?></a></h5>
							<div class="info">
								<h6>By <a href="<?php echo base_url('vb/izle/').$video->video_url;?>"><?php echo $video->video_sahibi;?></a></h6>
								<span><i class="fa fa-calendar"></i><?php echo $video->video_eklemetarihi; ?></span> 
								<span><i class="fa fa-eye"></i><?php echo $video->video_goruntulenme?></span>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="line"></div>
</div>