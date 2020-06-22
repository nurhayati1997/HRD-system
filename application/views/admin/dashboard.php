<div class="pd-ltr-20 height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
						<div class="bg-white border-radius-7 box-shadow mb-30">
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="<?php echo base_url()."vendors/"; ?>/images/pertama.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?php echo base_url()."vendors/"; ?>/images/kedua.jpg" alt="Second slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?php echo base_url()."vendors/"; ?>/images/ketiga.jpeg" alt="Third slide">
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							<div class="collapse collapse-box" id="carousel3">
								<div class="code-box">
									<div class="clearfix">
										<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#copy-carousel3"><i class="fa fa-clipboard"></i> Copy Code</a>
										<a href="#carousel3" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
									</div>
									<pre><code class="xml copy-pre" id="copy-carousel3">
										<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators">
												<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
												<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
												<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" src="<?php echo base_url()."vendors/"; ?>/images/img5.jpg" alt="First slide">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" src="<?php echo base_url()."vendors/"; ?>/images/img4.jpg" alt="Second slide">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" src="<?php echo base_url()."vendors/"; ?>/images/img5.jpg" alt="Third slide">
												</div>
											</div>
											<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="blog-wrap">
					<div class="container pd-0">
						<div class="row">
							<div class="col-md-8 col-sm-12">
								<div class="blog-list">
									<ul>
										<li>
											<div class="row no-gutters">
												<div class="col-lg-4 col-md-12 col-sm-12">
													<div class="blog-img">
														<img src="<?php echo base_url()."vendors/"; ?>/images/pegawai.jpg" alt="" class="bg_img">
													</div>
												</div>
												<div class="col-lg-8 col-md-12 col-sm-12">
													<div class="blog-caption">
														<h4>Pegawai</h4>
														<div class="blog-by">
															<p>Data Jumlah Pegawai RSUD Syarifah Ambami Rato Ebu Bangkalan.</p>
														</div>
														<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
															<div class="project-info clearfix">
																<div class="project-info-left">
																	<div class="icon box-shadow bg-blue text-white">
																		<i class="fa fa-briefcase"></i>
																	</div>
																</div>
																<div class="project-info-right">
																	<span class="no text-blue weight-500 font-24"><?=$this->fungsi->count_pegawai()?></span>
																	<p class="weight-400 font-18">Pegawai</p>
																</div>
															</div>
															<div class="project-info-progress">
																<div class="row clearfix">
																	<div class="col-sm-6 text-muted weight-500">Total</div>
																	<div class="col-sm-6 text-right weight-500 font-14 text-muted"><?=$this->fungsi->count_pegawai()?></div>
																</div>
																<div class="progress" style="height: 10px;">
																	<div class="progress-bar bg-blue progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="bg-white border-radius-4 box-shadow mb-30">
									<h5 class="pd-20">Rincian</h5>
									<div class="list-group">
										<a href="<?=site_url('Pegawai_dokter_umum')?>" class="list-group-item d-flex align-items-center justify-content-between">Dokter Umum <span class="badge badge-primary badge-pill"><?=$this->fungsi->count_pegawai_dokter_umum()?></span></a>
										<a href="<?=site_url('Pegawai_dokter_gigi')?>" class="list-group-item d-flex align-items-center justify-content-between">Dokter Gigi <span class="badge badge-primary badge-pill"><?=$this->fungsi->count_pegawai_dokter_gigi()?></span></a>
										<a href="<?=site_url('Pegawai_dokter_spesialis')?>" class="list-group-item d-flex align-items-center justify-content-between">Dokter Spesialis <span class="badge badge-primary badge-pill"><?=$this->fungsi->count_pegawai_dokter_spesialis()?></span></a>
										<a href="<?=site_url('Pegawai_dokter_gigi_spesialis')?>" class="list-group-item d-flex align-items-center justify-content-between">Dokter Gigi Spesialis <span class="badge badge-primary badge-pill"><?=$this->fungsi->count_pegawai_dokter_gigi_spesialis()?></span></a>
										<a href="<?=site_url('Pegawai_dokter_sub_spesialis')?>" class="list-group-item d-flex align-items-center justify-content-between">Dokter Sub Spesialis <span class="badge badge-primary badge-pill"><?=$this->fungsi->count_pegawai_dokter_sub_spesialis()?></span></a>
										<a href="<?=site_url('Pegawai_perawat')?>" class="list-group-item d-flex align-items-center justify-content-between">Keperawatan <span class="badge badge-primary badge-pill"><?=$this->fungsi->count_pegawai_perawat()?></span></a>
										<a href="<?=site_url('Pegawai_nakes')?>" class="list-group-item d-flex align-items-center justify-content-between">Nakes Lainnya <span class="badge badge-primary badge-pill"><?=$this->fungsi->count_pegawai_nakes()?></span></a>
										<a href="<?=site_url('Pegawai_manajemen')?>" class="list-group-item d-flex align-items-center justify-content-between">Manajemen <span class="badge badge-primary badge-pill"><?=$this->fungsi->count_pegawai_manajemen()?></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="container pd-0">
						<div class="row">
							<div class="col-md-8 col-sm-12">
								<div class="blog-list">
									<ul>
										<li>
											<div class="row no-gutters">
												<div class="col-lg-4 col-md-12 col-sm-12">
													<div class="blog-img">
														<img src="<?php echo base_url()."vendors/"; ?>/images/thl.jpg" alt="" class="bg_img">
													</div>
												</div>
												<div class="col-lg-8 col-md-12 col-sm-12">
													<div class="blog-caption">
														<h4>THL</h4>
														<div class="blog-by">
															<p>Data Jumlah THL RSUD Syarifah Ambami Rato Ebu Bangkalan.</p>
														</div>
														<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
															<div class="project-info clearfix">
																<div class="project-info-left">
																	<div class="icon box-shadow bg-light-green text-white">
																		<i class="fa fa-handshake-o"></i>
																	</div>
																</div>
																<div class="project-info-right">
																	<span class="no text-light-green weight-500 font-24"><?=$this->fungsi->count_thl()?></span>
																	<p class="weight-400 font-18">THL</p>
																</div>
															</div>
															<div class="project-info-progress">
																<div class="row clearfix">
																	<div class="col-sm-6 text-muted weight-500">Total</div>
																	<div class="col-sm-6 text-right weight-500 font-14 text-muted"><?=$this->fungsi->count_thl()?></div>
																</div>
																<div class="progress" style="height: 10px;">
																	<div class="progress-bar bg-light-green progress-bar-striped progress-bar-animated" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="bg-white border-radius-4 box-shadow mb-30">
									<h5 class="pd-20">Rincian</h5>
									<div class="list-group">
										<a href="<?=site_url('Nonpegawai_perawat_thl')?>" class="list-group-item d-flex align-items-center justify-content-between">Keperawatan <span class="badge badge-primary badge-pill"><?=$this->fungsi->count_thl_perawat()?></span></a>
										<a href="<?=site_url('Nonpegawai_nakes_thl')?>" class="list-group-item d-flex align-items-center justify-content-between">Nakes Lainnya <span class="badge badge-primary badge-pill"><?=$this->fungsi->count_thl_nakes()?></span></a>
										<a href="<?=site_url('Nonpegawai_manajemen_thl')?>" class="list-group-item d-flex align-items-center justify-content-between">Manajemen <span class="badge badge-primary badge-pill"><?=$this->fungsi->count_thl_manajemen()?></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="container pd-0">
						<div class="row">
							<div class="col-md-8 col-sm-12">
								<div class="blog-list">
									<ul>
										<li>
											<div class="row no-gutters">
												<div class="col-lg-4 col-md-12 col-sm-12">
													<div class="blog-img">
														<img src="<?php echo base_url()."vendors/"; ?>images/kontrak.jpg" alt="" class="bg_img">
													</div>
												</div>
												<div class="col-lg-8 col-md-12 col-sm-12">
													<div class="blog-caption">
														<h4>Kontrak</h4>
														<div class="blog-by">
															<p>Data Jumlah Kontrak RSUD Syarifah Ambami Rato Ebu Bangkalan.</p>
														</div>
														<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
															<div class="project-info clearfix">
																<div class="project-info-left">
																	<div class="icon box-shadow bg-light-orange text-white">
																		<i class="fa fa-list-alt"></i>
																	</div>
																</div>
																<div class="project-info-right">
																	<span class="no text-light-orange weight-500 font-24"><?=$this->fungsi->count_kontrak()?></span>
																	<p class="weight-400 font-18">Kontrak</p>
																</div>
															</div>
															<div class="project-info-progress">
																<div class="row clearfix">
																	<div class="col-sm-6 text-muted weight-500">Total</div>
																	<div class="col-sm-6 text-right weight-500 font-14 text-muted"><?=$this->fungsi->count_kontrak()?></div>
																</div>
																<div class="progress" style="height: 10px;">
																	<div class="progress-bar bg-light-orange progress-bar-striped progress-bar-animated" role="progressbar" style="width: 47%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="bg-white border-radius-4 box-shadow mb-30">
									<h5 class="pd-20">Rincian</h5>
									<div class="list-group">
										<a href="<?=site_url('Nonpegawai_dokter_umum_kontrak')?>" class="list-group-item d-flex align-items-center justify-content-between">Dokter Umum <span class="badge badge-primary badge-pill"><?=$this->fungsi->count_kontrak_dokter_umum()?></span></a>
										<a href="<?=site_url('Nonpegawai_dokter_gigi_kontrak')?>" class="list-group-item d-flex align-items-center justify-content-between">Dokter Gigi <span class="badge badge-primary badge-pill"><?=$this->fungsi->count_kontrak_dokter_gigi()?></span></a>
										<a href="<?=site_url('Nonpegawai_dokter_spesialis_kontrak')?>" class="list-group-item d-flex align-items-center justify-content-between">Dokter Spesialis <span class="badge badge-primary badge-pill"><?=$this->fungsi->count_kontrak_dokter_spesialis()?></span></a>
										<a href="<?=site_url('Nonpegawai_dokter_gigi_spesialis_kontrak')?>" class="list-group-item d-flex align-items-center justify-content-between">Dokter Gigi Spesialis <span class="badge badge-primary badge-pill"><?=$this->fungsi->count_kontrak_dokter_gigi_spesialis()?></span></a>
										<a href="<?=site_url('Nonpegawai_dokter_sub_spesialis_kontrak')?>" class="list-group-item d-flex align-items-center justify-content-between">Dokter Sub Spesialis <span class="badge badge-primary badge-pill"><?=$this->fungsi->count_kontrak_dokter_sub_spesialis()?></span></a>
										<a href="<?=site_url('Nonpegawai_perawat_kontrak')?>" class="list-group-item d-flex align-items-center justify-content-between">Keperawatan <span class="badge badge-primary badge-pill"><?=$this->fungsi->count_kontrak_perawat()?></span></a>
										<a href="<?=site_url('Nonpegawai_nakes_kontrak')?>" class="list-group-item d-flex align-items-center justify-content-between">Nakes Lainnya <span class="badge badge-primary badge-pill"><?=$this->fungsi->count_kontrak_nakes()?></span></a>
										<a href="<?=site_url('Nonpegawai_manajemen_kontrak')?>" class="list-group-item d-flex align-items-center justify-content-between">Manajemen <span class="badge badge-primary badge-pill"><?=$this->fungsi->count_kontrak_manajemen()?></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="container pd-0">
						<div class="row">
							<div class="col-md-8 col-sm-12">
								<div class="blog-list">
									<ul>
										<li>
											<div class="row no-gutters">
												<div class="col-lg-4 col-md-12 col-sm-12">
													<div class="blog-img">
														<img src="<?php echo base_url()."vendors/"; ?>/images/p3k.jpg" alt="" class="bg_img">
													</div>
												</div>
												<div class="col-lg-8 col-md-12 col-sm-12">
													<div class="blog-caption">
														<h4>P3K</h4>
														<div class="blog-by">
															<p>Data Jumlah P3K RSUD Syarifah Ambami Rato Ebu Bangkalan.</p>
														</div>
														<div class="bg-white pd-20 box-shadow border-radius-5 margin-5 height-100-p">
															<div class="project-info clearfix">
																<div class="project-info-left">
																	<div class="icon box-shadow bg-light-purple text-white">
																		<i class="fa fa-podcast"></i>
																	</div>
																</div>
																<div class="project-info-right">
																	<span class="no text-light-purple weight-500 font-24"><?=$this->fungsi->count_p3k()?></span>
																	<p class="weight-400 font-18">P3K</p>
																</div>
															</div>
															<div class="project-info-progress">
																<div class="row clearfix">
																	<div class="col-sm-6 text-muted weight-500">Total</div>
																	<div class="col-sm-6 text-right weight-500 font-14 text-muted"><?=$this->fungsi->count_p3k()?></div>
																</div>
																<div class="progress" style="height: 10px;">
																	<div class="progress-bar bg-light-purple progress-bar-striped progress-bar-animated" role="progressbar" style="width: 5%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="bg-white border-radius-4 box-shadow mb-30">
									<h5 class="pd-20">Rincian</h5>
									<div class="list-group">
										<a href="<?=site_url('Nonpegawai_perawat_p3k')?>" class="list-group-item d-flex align-items-center justify-content-between">Keperawatan <span class="badge badge-primary badge-pill"><?=$this->fungsi->count_p3k_perawat()?></span></a>
										<a href="<?=site_url('Nonpegawai_nakes_p3k')?>" class="list-group-item d-flex align-items-center justify-content-between">Nakes Lainnya <span class="badge badge-primary badge-pill"><?=$this->fungsi->count_p3k_nakes()?></span></a>
										<a href="<?=site_url('Nonpegawai_manajemen_p3k')?>" class="list-group-item d-flex align-items-center justify-content-between">Manajemen <span class="badge badge-primary badge-pill"><?=$this->fungsi->count_p3k_manajemen()?></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>