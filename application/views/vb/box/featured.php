<!-- featured -->

<div class="box">
			<div class="box-header">
				<h2><i class="fa fa-globe"></i> Öne Çıkan Videolar</h2>
			</div>
			<div class="box-content">
				<div class="row">
                  <!--  tavsiye1-->
					<div class="col-md-6">
                        <!--buyuk-->
						<div class="wrap-vid">
							<div class="zoom-container">
								<div class="zoom-caption">
									<span><?php $video=$tavsiye1[0]; echo $this->Vb_model->kategori($video->video_kat); ?></span>
									<a href="<?php echo base_url('vb/izle/').$video->video_url;?>">
										<i class="fa fa-play-circle-o fa-5x" style="color: <?php echo base_url('vb/izle/').$video->video_url;?>fff"></i>
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
						<p class="more">
                            <?php echo word_limiter($video->video_aciklama,10);?>
						<a href="<?php echo base_url('vb/izle/').$video->video_url;?>" class="btn btn-1">Devamı</a>
						<div class="line"></div>

                        <!--ufak-->

                        <?php
                        $t= count($tavsiye1);
                        if($t>=5){
                            $son=6;
                        }elseif ($t<5){
                            $son=$t;
                        }

                        for ($i=1; $i < $son; $i++) { ?>

                            <div class="post wrap-vid">
                                <div class="zoom-container">
                                    <div class="zoom-caption">
                                        <span><?php $video=$tavsiye1[$i];  echo $this->Vb_model->kategori($video->video_kat); ?></span>
                                        <a href="<?php echo base_url('vb/izle/').$video->video_url;?>">
                                            <i class="fa fa-play-circle-o fa-5x" style="color: <?php echo base_url('vb/izle/').$video->video_url;?>fff"></i>
                                        </a>
                                    </div>
                                    <img src="<?php echo $video->video_resim; ?>" />
                                </div>
                                <div class="wrapper">
                                    <h5 class="vid-name"><a href="<?php echo base_url('vb/izle/').$video->video_url;?>"><?php  echo word_limiter($video->video_baslik,3);?></a></h5>
                                    <div class="info">
                                        <h6>By <a href="<?php echo base_url('vb/izle/').$video->video_url;?>"><?php  echo $video->video_sahibi;?></a></h6>
                                        <span><i class="fa fa-calendar"></i><?php  echo $video->video_eklemetarihi; ?></span>
                                        <span><i class="fa fa-eye"></i><?php echo $video->video_goruntulenme?></span>
                                    </div>
                                </div>
                            </div>

                        <?php  } ?>



					</div>



                    <!--  tavsiye2-->
                    <div class="col-md-6">
                        <div class="wrap-vid">
                            <div class="zoom-container">
                                <div class="zoom-caption">
                                    <span><?php $video=$tavsiye2[0]; echo $this->Vb_model->kategori($video->video_kat); ?></span>
                                    <a href="<?php echo base_url('vb/izle/').$video->video_url;?>">
                                        <i class="fa fa-play-circle-o fa-5x" style="color: <?php echo base_url('vb/izle/').$video->video_url;?>fff"></i>
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
                        <p class="more">
                            <?php echo word_limiter($video->video_aciklama,10);?>
                            <a href="<?php echo base_url('vb/izle/').$video->video_url;?>" class="btn btn-1">Devamı</a>
                        <div class="line"></div>




                        <!--ufak-->

                        <?php
                        $t= count($tavsiye2);
                        if($t>=5){
                            $son=6;
                        }elseif ($t<5){
                            $son=$t;
                        }

                        for ($i=1; $i < $son; $i++) { ?>

                            <div class="post wrap-vid">
                                <div class="zoom-container">
                                    <div class="zoom-caption">
                                        <span><?php $video=$tavsiye2[$i];  echo $this->Vb_model->kategori($video->video_kat); ?></span>
                                        <a href="<?php echo base_url('vb/izle/').$video->video_url;?>">
                                            <i class="fa fa-play-circle-o fa-5x" style="color: <?php echo base_url('vb/izle/').$video->video_url;?>fff"></i>
                                        </a>
                                    </div>
                                    <img src="<?php echo $video->video_resim; ?>" />
                                </div>
                                <div class="wrapper">
                                    <h5 class="vid-name"><a href="<?php echo base_url('vb/izle/').$video->video_url;?>"><?php  echo word_limiter($video->video_baslik,3);?></a></h5>
                                    <div class="info">
                                        <h6>By <a href="<?php echo base_url('vb/izle/').$video->video_url;?>"><?php  echo $video->video_sahibi;?></a></h6>
                                        <span><i class="fa fa-calendar"></i><?php  echo $video->video_eklemetarihi; ?></span>
                                        <span><i class="fa fa-eye"></i><?php echo $video->video_goruntulenme?></span>
                                    </div>
                                </div>
                            </div>

                        <?php  } ?>

					</div>
				</div>
			</div>
			<div class="line"></div>
		</div>