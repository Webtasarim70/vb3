<!-- random -->


<div class="box">
	<div class="box-header">
		<h2><i class="fa fa-play-circle-o"></i> Rastgele Videolar</h2>
	</div>
	<div class="box-content">
		<div class="video">
			<div class="col-md-4">
				<div class="wrap-vid">
					<div class="zoom-container">
						<div class="zoom-caption">
							<span><?php $video=$rastgele[0]; echo $this->Vb_model->kategori($video->video_kat); ?></span>
							<a href="<?php echo base_url('vb/izle/').$video->video_url;?>">
								<i class="fa fa-play-circle-o fa-5x" style="color: <?php echo base_url('vb/izle/').$video->video_url;?>fff"></i>
							</a>
							<p></p>
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
				<div class="wrap-vid">
					<div class="zoom-container">
						<div class="zoom-caption">
							<span><?php $video=$rastgele[1]; echo $this->Vb_model->kategori($video->video_kat); ?></span>
							<a href="<?php echo base_url('vb/izle/').$video->video_url;?>">
								<i class="fa fa-play-circle-o fa-5x" style="color: <?php echo base_url('vb/izle/').$video->video_url;?>fff"></i>
							</a>
							<p></p>
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
				
			</div>







			<div class="col-md-4">

				<div class="wrap-vid">
					<div class="zoom-container">
						<div class="zoom-caption">
							<span><?php $video=$rastgele[2]; echo $this->Vb_model->kategori($video->video_kat); ?></span>
							<a href="<?php echo base_url('vb/izle/').$video->video_url;?>">
								<i class="fa fa-play-circle-o fa-5x" style="color: <?php echo base_url('vb/izle/').$video->video_url;?>fff"></i>
							</a>
							<p></p>
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
				<div class="wrap-vid">
					<div class="zoom-container">
						<div class="zoom-caption">
							<span><?php $video=$rastgele[3]; echo $this->Vb_model->kategori($video->video_kat); ?></span>
							<a href="<?php echo base_url('vb/izle/').$video->video_url;?>">
								<i class="fa fa-play-circle-o fa-5x" style="color: <?php echo base_url('vb/izle/').$video->video_url;?>fff"></i>
							</a>
							<p></p>
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

			</div>
			<div class="col-md-4">

				<div class="wrap-vid">
					<div class="zoom-container">
						<div class="zoom-caption">
							<span><?php $video=$rastgele[4]; echo $this->Vb_model->kategori($video->video_kat); ?></span>
							<a href="<?php echo base_url('vb/izle/').$video->video_url;?>">
								<i class="fa fa-play-circle-o fa-5x" style="color: <?php echo base_url('vb/izle/').$video->video_url;?>fff"></i>
							</a>
							<p></p>
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
				<div class="wrap-vid">
					<div class="zoom-container">
						<div class="zoom-caption">
							<span><?php $video=$rastgele[5]; echo $this->Vb_model->kategori($video->video_kat); ?></span>
							<a href="<?php echo base_url('vb/izle/').$video->video_url;?>">
								<i class="fa fa-play-circle-o fa-5x" style="color: <?php echo base_url('vb/izle/').$video->video_url;?>fff"></i>
							</a>
							<p></p>
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
			</div>
		</div>
	</div>
	<div class="line"></div>
</div>