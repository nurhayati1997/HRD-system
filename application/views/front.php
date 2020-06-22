<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url()."vendors/"; ?>/images/logo.png">
    
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>E-dokar | RSUD Syarifah Ambami</title>

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Roboto:400,400i,500" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="<?=base_url()?>front/css/linearicons.css">
	<link rel="stylesheet" href="<?=base_url()?>front/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url()?>front/css/bootstrap.css">
	<link rel="stylesheet" href="<?=base_url()?>front/css/magnific-popup.css">
	<link rel="stylesheet" href="<?=base_url()?>front/css/owl.carousel.css">
	<link rel="stylesheet" href="<?=base_url()?>front/css/hexagons.min.css">
	<link rel="stylesheet" href="<?=base_url()?>front/css/nice-select.css">
	<link rel="stylesheet" href="<?=base_url()?>front/css/main.css">
</head>

<body>

	<!--================ Offcanvus Menu Area =================-->
	<!-- <div class="side_menu">
		<div class="logo">
			<a href="index.html">
				<img src="<?=base_url()?>front/img/logo.png" alt="">
			</a>
		</div>
		<ul class="list menu-left">
			<li>
				<a href="index.html">Home</a>
			</li>
			<li>
				<a href="about-us.html">About</a>
			</li>
			<li>
				<a href="service.html">Service</a>
			</li>
			<li>
				<div class="dropdown">
					<button type="button" class="dropdown-toggle" data-toggle="dropdown">
						Projects
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="project.html">Project</a>
						<a class="dropdown-item" href="project-details.html">Project Details</a>
					</div>
				</div>
			</li>
			<li>
				<a href="team.html">Team</a>
			</li>
			<li>
				<div class="dropdown">
					<button type="button" class="dropdown-toggle" data-toggle="dropdown">
						Pages
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="elements.html">Elements</a>
					</div>
				</div>
			</li>
			<li>
				<div class="dropdown">
					<button type="button" class="dropdown-toggle" data-toggle="dropdown">
						Blog
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="blog.html">Blog</a>
						<a class="dropdown-item" href="single-blog.html">Blog Details</a>
					</div>
				</div>
			</li>
			<li>
				<a href="contact.html">Contact</a>
			</li>
		</ul>
	</div> -->
	<!--================ End Offcanvus Menu Area =================-->

	<!--================ Canvus Menu Area =================-->
	<!-- <div class="canvus_menu">
		<div class="container">
			<div class="toggle_icon" title="Menu Bar">
				<span></span>
			</div>
		</div>
	</div> -->
	<!--================ End Canvus Menu Area =================-->

	<!--================ start banner Area =================-->
	<section class="home-banner-area">
		<div class="container">
			<div class="row justify-content-end fullscreen">
				<div class="col-lg-6 col-md-12 home-banner-left d-flex fullscreen align-items-center">
					<div>
						<h1 class="">
							E-<span>dokaR</span>. <br>
							<!-- RSUD <br> -->
							<span>RSUD</span> SYAMRABU
						</h1>
						<p class="mx-auto mb-40">
						"Elektronik Dokumen Karyawan" Sistem Informasi Kepegawaian  RSUD Syarifah Ambami Ratho Ebhu Bangkalan 
						</p>
                        
                        <div class="row">
                            <!-- single-features -->
                            <div class="col-lg-3 offset-lg-1 col-sm-6 col-md-6">
                                <div class="single-service">
                                    <div class="service-icon">
                                        <!-- <a href="<?=base_url('Auth')?>"> -->
                                        <a href="<?php echo base_url(); ?>index.php/Auth">
                                            <img src="<?=base_url()?>front/img/service/shape1.png" alt="">
                                            <img class="s-icon" src="<?=base_url()?>front/img/service/icon3.png" alt="">
                                            <img class="clr-icon" src="<?=base_url()?>front/img/service/clr-icon3.png" alt="">
                                        </a>
                                    </div>
                                    <div class="service-content">
                                        <h4>Bagian Kepegawaian</h4>
                                        <p>Login Untuk Karyawan bagian Kepegawaian</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single-features -->
                            <div class="col-lg-3 offset-lg-1 col-sm-6 col-md-6">
                                <div class="single-service">
                                    <div class="service-icon">
                                        <!-- <a href="<?=site_url('Login_pegawai')?>"> -->
                                        <a href="<?php echo base_url(); ?>index.php/Login_pegawai">
                                            <img src="<?=base_url()?>front/img/service/shape1.png" alt="">
                                            <img class="s-icon" src="<?=base_url()?>front/img/service/icon3.png" alt="">
                                            <img class="clr-icon" src="<?=base_url()?>front/img/service/clr-icon3.png" alt="">
                                        </a>
                                    </div>
                                    <div class="service-content">
                                        <h4>Pegawai Negeri Sipil</h4>
                                        <p>Login Untuk PNS</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single-features -->
                            <div class="col-lg-3 offset-lg-1 col-sm-6 col-md-6">
                                <div class="single-service">
                                    <div class="service-icon">
                                        <!-- <a href="<?=base_url('Login_non_pegawai')?>"> -->
                                        <a href="<?php echo base_url(); ?>index.php/Login_non_pegawai">
                                            <img src="<?=base_url()?>front/img/service/shape1.png" alt="">
                                            <img class="s-icon" src="<?=base_url()?>front/img/service/icon3.png" alt="">
                                            <img class="clr-icon" src="<?=base_url()?>front/img/service/clr-icon3.png" alt="">
                                        </a>
                                    </div>
                                    <div class="service-content">
                                        <h4>Non Pegawai Negeri Sipil</h4>
                                        <p>Login Untuk THL, Kontrak, P3K</p>
                                    </div>
                                </div>
                            </div>
                        </div>

					</div>
				</div>
				<div class="col-lg-6 col-md-12 no-padding home-banner-right d-flex fullscreen align-items-end">
					<img class="img-fluid" src="<?=base_url()?>front/img/header-img.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<!--================ End banner Area =================-->



	<script src="<?=base_url()?>front/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="<?=base_url()?>front/js/vendor/bootstrap.min.js"></script>
	<script src="<?=base_url()?>front/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?=base_url()?>front/js/jquery.magnific-popup.min.js"></script>
	<script src="<?=base_url()?>front/js/parallax.min.js"></script>
	<script src="<?=base_url()?>front/js/owl.carousel.min.js"></script>
	<script src="<?=base_url()?>front/js/jquery.nice-select.min.js"></script>
	<script src="<?=base_url()?>front/js/jquery.sticky.js"></script>
	<script src="<?=base_url()?>front/js/hexagons.min.js"></script>
	<script src="<?=base_url()?>front/js/jquery.counterup.min.js"></script>
	<script src="<?=base_url()?>front/js/waypoints.min.js"></script>
	<script src="<?=base_url()?>front/js/main.js"></script>
</body>

</html>