<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Pegawai E-dokar | RSUD Syarifah Ambami</title>

	<!-- Site favicon -->
	<link rel="shortcut icon" href="<?php echo base_url()."vendors/"; ?>/images/logo.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url()."vendors/"; ?>/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="login-box bg-white box-shadow pd-30 border-radius-5">
			<img src="<?php echo base_url()."vendors/"; ?>/images/login.png" alt="login" class="login-img">
			<h2 class="text-center mb-30">Pegawai</h2>
			<form action="<?=base_url('index.php/Login_pegawai/process')?>" method="post">
				<div class="input-group custom input-group-lg">
					<input type="text" name="username" class="form-control" placeholder="Username" required>
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="input-group custom input-group-lg">
					<input type="password" name="password" class="form-control" placeholder="**********" required>
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="input-group">
							<!--
								use code for form submit
								<input class="btn btn-outline-primary btn-lg btn-block" type="submit" value="Sign In">
							-->
							<button type="submit" name="login" class="btn btn-outline-primary btn-lg btn-block">Login </button>
						</div>
					</div>
					<!-- <div class="col-sm-6">
						<div class="forgot-password padding-top-10"><a href="forgot-password.php">Forgot Password</a></div>
					</div> -->
				</div>
			</form>
		</div>
	</div>
	<script src="<?php echo base_url()."vendors/"; ?>/scripts/script.js"></script>
	<script src="<?php echo base_url()."src/"; ?>plugins/sweetalert2/sweetalert2.all.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."src/"; ?>plugins/sweetalert2/sweetalert2.css">
	<script src="<?php echo base_url()."src/"; ?>/plugins/sweetalert2/sweet-alert.init.js"></script>
</body>
</html>