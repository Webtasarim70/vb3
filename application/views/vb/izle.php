<?php $this->load->view('vb/inc/head'); ?>
<body>
	<?php $this->load->view('vb/inc/header'); ?>
	<!-- Header -->
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="index-page">

		<div class="container">

			<div id="page-content" class="single-page">
				<div class="container">
					<div class="row">
						<div id="main-content" class="col-md-8">
							<div class="wrap-vid">
								<iframe width="100%" height="400" src="https://www.youtube.com/embed/<?php echo $izle->video_url;?>" frameborder="0" allowfullscreen></iframe>
							</div>
							<!-- 
							<div class="share">
								<ul class="list-inline center">
									<li><a href="#" class="btn btn-facebook"><i class="fa fa-facebook"></i> Share</a></li>
									<li><a href="#" class="btn btn-twitter"><i class="fa fa-twitter"></i> Tweet</a></li>
									<li><a href="#" class="btn btn-pinterest"><i class="fa fa-pinterest"></i> Tweet</a></li>
									<li><a href="#" class="btn btn-google"><i class="fa fa-google-plus-square"></i> Google+</a></li>
									<li><a href="#" class="btn btn-mail"><i class="fa fa-envelope-o"></i> E-mail</a></li>
								</ul>
							</div>
						-->
						<div class="line"></div>
						<h1 class="vid-name"><a href="#"><?php echo $izle->video_baslik;?></a></h1>
						<div class="info">
							<h5>By <a href="#"><?php echo $izle->video_sahibi;?></a></h5>
							<span><i class="fa fa-calendar"></i><?php echo $izle->video_eklemetarihi;?></span> 
							<span><i class="fa fa-heart"></i><?php echo $izle->video_goruntulenme;?></span>
						</div>
						<p style="margin-top: 20px"><?php echo $izle->video_aciklama;?></p>						
						<div class="vid-tags">
							<?php				
							$metin= $izle->video_sefetiketler; 
							$yenimetin = explode(',',$metin);
							foreach($yenimetin as $yazdir){
								echo "<a href='"; echo base_url('vb/ara/'); echo $yazdir."'>$yazdir</a>";
							}  ?>
						</div>
						<div class="line"></div>
						<div class="comment">
							<h3>Yorum Bırak</h3>
							<form name="form1" method="post" action="">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control input-lg" name="name" id="name" placeholder="Enter name" required="required" />
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="email" class="form-control input-lg" name="email" id="email" placeholder="Enter email" required="required" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
											placeholder="Message"></textarea>
										</div>						
										<button type="submit" class="btn btn-4 btn-block" name="btnSend" id="btnSend">
										Gönder</button>
									</div>
								</div>
							</form>
						</div>
						<div class="line"></div>
						<!-- benzer videolar-->
						<div class="box">
							<div class="box-header">
								<h2><i class="fa fa-globe"></i> RELATED VIDEOS</h2>
							</div>
							<div class="box-content">
								<div class="row">
									<div class="col-md-4">
										<div class="wrap-vid">
											<div class="zoom-container">
												<div class="zoom-caption">
													<span>Video's Tag</span>
													<a href="single.html">
														<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
													</a>
													<p>Video's Name</p>
												</div>
												<img src="images/7.jpg" />
											</div>
											<h3 class="vid-name"><a href="#">Video's Name</a></h3>
											<div class="info">
												<h5>By <a href="#">Kelvin</a></h5>
												<span><i class="fa fa-calendar"></i>25/3/2015</span> 
												<span><i class="fa fa-heart"></i>1,200</span>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="wrap-vid">
											<div class="zoom-container">
												<div class="zoom-caption">
													<span>Video's Tag</span>
													<a href="single.html">
														<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
													</a>
													<p>Video's Name</p>
												</div>
												<img src="images/8.jpg" />
											</div>
											<h3 class="vid-name"><a href="#">Video's Name</a></h3>
											<div class="info">
												<h5>By <a href="#">Kelvin</a></h5>
												<span><i class="fa fa-calendar"></i>25/3/2015</span> 
												<span><i class="fa fa-heart"></i>1,200</span>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="wrap-vid">
											<div class="zoom-container">
												<div class="zoom-caption">
													<span>Video's Tag</span>
													<a href="single.html">
														<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
													</a>
													<p>Video's Name</p>
												</div>
												<img src="images/9.jpg" />
											</div>
											<h3 class="vid-name"><a href="#">Video's Name</a></h3>
											<div class="info">
												<h5>By <a href="#">Kelvin</a></h5>
												<span><i class="fa fa-calendar"></i>25/3/2015</span> 
												<span><i class="fa fa-heart"></i>1,200</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<?php $this->load->view('vb/sidebar'); ?>
				</div>
			</div>
		</div>












		<?php // $this->load->view('vb/row1'); ?>
		<!-- row1 -->

		<?php // $this->load->view('vb/row2'); ?>	
		<!-- row2 -->
	</div>
</div>

<?php $this->load->view('vb/inc/footer'); ?>

