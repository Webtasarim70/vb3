<header>
	<!--Top-->
	<nav id="top">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<strong><?php echo $ayarlar->site_baslik;?></strong>
				</div>
				<div class="col-md-6 col-sm-6">
					<ul class="list-inline top-link link">
						<li><a href="<?php echo base_url('vb'); ?>"><i class="fa fa-home"></i> Anasayfa</a></li>
				<!-- 		<li><a href="contact.html"><i class="fa fa-comments"></i> Contact</a></li>
					<li><a href="#"><i class="fa fa-question-circle"></i> FAQ</a></li> -->
				</ul>
			</div>
		</div>
	</div>
</nav>

<!--Navigation-->
<nav id="menu" class="navbar">
	<div class="container">
		<div class="navbar-header"><span id="heading" class="visible-xs">Categories</span>
			<button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
		</div>
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Account</a>
					<div class="dropdown-menu">
						<div class="dropdown-inner">
							<ul class="list-unstyled">
								<li><a href="archive.html">Login</a></li>
								<li><a href="archive.html">Register</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-play-circle-o"></i> Video</a>
					<div class="dropdown-menu">
						<div class="dropdown-inner">
							<ul class="list-unstyled">
								<li><a href="archive.html">Text 201</a></li>
								<li><a href="archive.html">Text 202</a></li>
								<li><a href="archive.html">Text 203</a></li>
								<li><a href="archive.html">Text 204</a></li>
								<li><a href="archive.html">Text 205</a></li>
							</ul>
						</div> 
					</div>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list"></i> Category</a>
					<div class="dropdown-menu" style="margin-left: -203.625px;">
						<div class="dropdown-inner">
							<ul class="list-unstyled">
								<li><a href="archive.html">Text 301</a></li>
								<li><a href="archive.html">Text 302</a></li>
								<li><a href="archive.html">Text 303</a></li>
								<li><a href="archive.html">Text 304</a></li>
								<li><a href="archive.html">Text 305</a></li>
							</ul>
							<ul class="list-unstyled">
								<li><a href="archive.html">Text 306</a></li>
								<li><a href="archive.html">Text 307</a></li>
								<li><a href="archive.html">Text 308</a></li>
								<li><a href="archive.html">Text 309</a></li>
								<li><a href="archive.html">Text 310</a></li>
							</ul>
							<ul class="list-unstyled">
								<li><a href="archive.html">Text 311</a></li>
								<li><a href="archive.html">Text 312</a></li>
								<li><a href="archive.html#">Text 313</a></li>
								<li><a href="archive.html#">Text 314</a></li>
								<li><a href="archive.html">Text 315</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li><a href="archive.html"><i class="fa fa-cubes"></i> Blocks</a></li>
				<li><a href="contact.html"><i class="fa fa-envelope"></i> Contact</a></li>
			</ul>
		</div>
	</div>
</nav>

<?php $this->load->view('vb/slider'); ?>
</header>