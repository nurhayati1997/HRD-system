<div class="pd-ltr-20 xs-pd-20-10">
	<div class="min-height-200px">
		<div class="page-header">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="title">
						<h4>Profile</h4>
					</div>
					<nav aria-label="breadcrumb" role="navigation">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Profile</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 mb-30">
				<div class="pd-20 bg-white border-radius-4 box-shadow">
					<div class="profile-photo">
								<!-- <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a> -->
						<img src="<?=base_url('uploads/foto_nonpegawai/'.$detail->foto_nonpegawai)?>" alt="" class="avatar-photo">
								<!-- <img src="<?=base_url('uploads/foto_nonpegawai/'.$detail->foto_nonpegawai)?>" style="width: 100px"> -->
								<!-- <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-body pd-5">
												<div class="img-container">
													<img id="image" src="vendors/images/photo2.jpg" alt="Picture">
												</div>
											</div>
											<div class="modal-footer">
												<input type="submit" value="Update" class="btn btn-primary">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div> -->
					</div>
					<h5 class="text-center"><?=$detail->nama?></h5>
					<p class="text-center text-muted">
						<?=$detail->jenis_tenaga?><br>
						NIK : <?=$detail->nik?><br>
						GAJI : Rp <?=$detail->gaji?>
					</p>
					<div class="profile-info">
						<h5 class="mb-20 weight-500" align="center" >Personal Information</h5>
						<ul>
							<li>
								<span>Pendidikan :</span>
								<?=$detail->pendidikan?>
							</li>
							<li>
							    <span>Tempat Lahir :</span>
								<?=$detail->tempatlahir?>
							</li>
							<li>
								<span>Tanggal Lahir :</span>
								<?=$detail->tgl_lahir?>
							</li>
							<li>
								<span>Jenis Kelamin :</span>
								<?=$detail->jenis_kelamin?>
							</li>
							<li>
								<span>Agama :</span>
								<?=$detail->agama?>
							</li>
							<li>
								<span>Status Pernikahan :</span>
								<?=$detail->status_pernikahan?>
							</li>
							<li>
								<span>Golongan Darah :</span>
								<?=$detail->goldarah?>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 mb-30">
				<div class="bg-white border-radius-4 box-shadow height-100-p">
					<div class="profile-tab height-100-p">
						<div class="tab height-100-p">
							<ul class="nav nav-tabs customtab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">Identitas</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#pendidikan" role="tab">Pendidikan</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tasks" role="tab">Detail</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#riwayat" role="tab">Riwayat</a>
								</li>
								<!-- <li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#pangkat" role="tab">Pangkat</a>
								</li> -->
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#cuti" role="tab">Cuti & Arsip</a>
								</li>
							</ul>
							<div class="tab-content">
								<!-- Timeline Tab start -->
								<div class="tab-pane fade show active" id="timeline" role="tabpanel">
									<div class="pd-20">
										<div class="profile-timeline">
											<div class="timeline-month">
												<h5>Detail Informasi</h5>
											</div>
											<div class="profile-timeline-list">
												<ul>
													<li>
														<div class="date">1</div>
														<div class="task-name"><i class="ion-android-attach"></i>Suku Bangsa </div>
														<p><?=$detail->suku_bangsa?></p>
													</li>
													<li>
														<div class="date">2</div>
														<div class="task-name"><i class="ion-ios-chatboxes"></i> Alamat </div>
														<p><?=$detail->alamat?></p>
													</li>
													<li>
														<div class="date">3</div>
														<div class="task-name"><i class="icon-copy ion-edit"></i> Provinsi </div>
														<p><?=$detail->provinsi?></p>
													</li>
													<li>
														<div class="date">4</div>
														<div class="task-name"><i class="ion-ios-clock"></i> Kabupaten / Kota </div>
														<p><?=$detail->kotakab?></p>
													</li>
													<li>
														<div class="date">5</div>
														<div class="task-name"><i class="icon-copy ion-clock"></i>Kecamatan </div>
														<p><?=$detail->kecamatan?></p>
													</li>
													<li>
														<div class="date">6</div>
														<div class="task-name"><i class="icon-copy ion-closed-captioning"></i> Kelurahan / Desa </div>
														<p><?=$detail->kelurahandesa?></p>
													</li>
													<li>
														<div class="date">7</div>
														<div class="task-name"><i class="icon-copy ion-pricetags"></i></i> Rt / Rw </div>
														<p><?=$detail->rtrw?></p>
													</li>
													<li>
														<div class="date">8</div>
														<div class="task-name"><i class="icon-copy ion-ios-paper"></i></i> Kode Pos </div>
														<p><?=$detail->kodepos?></p>
													</li>
													<li>
														<div class="date">9</div>
														<div class="task-name"><i class="icon-copy ion-cube"></i>No Hp </div>
														<p><?=$detail->nohp?></p>
													</li>
													<li>
														<div class="date">10</div>
														<div class="task-name"><i class="icon-copy ion-ios-email"></i> Email </div>
														<p><?=$detail->email?></p>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Timeline Tab End -->
								<div class="tab-pane fade" id="pendidikan" role="tabpanel">
									<div class="pd-20 profile-pendidikan-wrap">
										<div class="container pd-0">
											<div class="profile-timeline">
												<div class="timeline-month">
													<h5>Pendidikan</h5>
												</div>
												<div class="profile-timeline-list">
													<ul>
														<li>
															<div class="date">1</div>
															<div class="task-name"><i class="ion-android-attach"></i> SD</div>
															<p><?=$detail->sd?></p>
														</li>
														<li>
															<div class="date"></div>
															<div class="task-name"><i class="ion-ios-chatboxes"></i> NO Ijasah SD </div>
															<p><?=$detail->no_ijasah_sd?></p>
														</li>
														<li>
															<div class="date">2</div>
															<div class="task-name"><i class="ion-android-attach"></i> SMP </div>
															<p><?=$detail->smp?></p>
														</li>
														<li>
															<div class="date"></div>
															<div class="task-name"><i class="ion-ios-chatboxes"></i> NO Ijasah SMP </div>
															<p><?=$detail->no_ijasah_smp?></p>
														</li>
														<li>
															<div class="date">3</div>
															<div class="task-name"><i class="ion-android-attach"></i> SMA </div>
															<p><?=$detail->sma?></p>
														</li>
														<li>
															<div class="date"></div>
															<div class="task-name"><i class="ion-ios-chatboxes"></i> NO Ijasah SMA </div>
															<p><?=$detail->no_ijasah_sma?></p>
														</li>
														<li>
															<div class="date">4</div>
															<div class="task-name"><i class="ion-android-attach"></i> S1 </div>
															<p><?=$detail->s1?></p>
														</li>
														<li>
															<div class="date"></div>
															<div class="task-name"><i class="ion-ios-chatboxes"></i> NO Ijasah S1 </div>
															<p><?=$detail->no_ijasah_s1?></p>
														</li>
														<li>
															<div class="date">5</div>
															<div class="task-name"><i class="ion-android-attach"></i> S2 </div>
															<p><?=$detail->s2?></p>
														</li>
														<li>
															<div class="date"></div>
															<div class="task-name"><i class="ion-ios-chatboxes"></i> NO Ijasah S2 </div>
															<p><?=$detail->no_ijasah_s2?></p>
														</li>
														<li>
															<div class="date">6</div>
															<div class="task-name"><i class="ion-android-attach"></i> S3 </div>
															<p><?=$detail->s3?></p>
														</li>
														<li>
															<div class="date"></div>
															<div class="task-name"><i class="ion-ios-chatboxes"></i> NO Ijasah S3 </div>
															<p><?=$detail->no_ijasah_s3?></p>
														</li>		
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Tasks Tab start -->
								<div class="tab-pane fade" id="tasks" role="tabpanel">
									<div class="pd-20 profile-task-wrap">
										<div class="container pd-0">
											<div class="profile-timeline">
												<div class="timeline-month">
													<h5>Detail kerja </h5>
												</div>
												<div class="profile-timeline-list">
													<ul>
														<li>
															<div class="date">1</div>
															<div class="task-name"><i class="ion-android-attach"></i> Unit Kerja</div>
															<p><?=$detail->unit_kerja?></p>
														</li>
														<li>
															<div class="date">2</div>
															<div class="task-name"><i class="ion-ios-chatboxes"></i> Nama Jabatan </div>
															<p><?=$detail->jabatan?></p>
														</li>
														<!-- <li>
															<div class="date">3</div>
															<div class="task-name"><i class="icon-copy ion-edit"></i> Status Karyawan </div>
															<p><?=$detail->status_nonpegawai?></p>
														</li> -->
														<li>
															<div class="date">4</div>
															<div class="task-name"><i class="ion-ios-clock"></i> Masa Kerja</div>
															<p><?=$detail->masa_kerja?></p>
														</li>
														<li>
															<div class="date">5</div>
															<div class="task-name"><i class="icon-copy ion-clock"></i> Pangkat Terakhir </div>
															<p><?=$detail->pangkat_terakhir?></p>
														</li>
														<!-- <li>
															<div class="date">6</div>
															<div class="task-name"><i class="icon-copy ion-pin"></i>Eselon</div>
															<p><?=$detail->eselon?></p>
														</li> -->
														<li>
															<div class="date">7</div>
															<div class="task-name"><i class="icon-copy ion-closed-captioning"></i> Jenis Pelayanan </div>
															<p><?=$detail->jenis_pelayanan?></p>
														</li>
														<li>
															<div class="date">8</div>
															<div class="task-name"><i class="icon-copy ion-code-download"></i></i> No.STR</div>
															<p><?=$detail->no_sip?></p>
														</li>
														<li>
															<div class="date">9</div>
															<div class="task-name"><i class="icon-copy ion-calendar"></i> No.SIP</div>
															<p><?=$detail->no_str?></p>
														</li>
													</ul>
												</div>
												<div class="timeline-month">
													<h5>Validasi Masa Berlaku</h5>
												</div>
												<div class="profile-timeline-list">
													<ul>
														<li>
															<div class="date">1</div>
															<div class="task-name"><i class="ion-android-attach"></i> Masa Berlaku STR/SIP</div>
															<p><?=$detail->masa_berlaku_sip_str?></p>
														</li>
														<li>
															<div class="date">2</div>
															<div class="task-name"><i class="ion-ios-chatboxes"></i> Notifikasi Akhir Masa Berlaku </div>
															<p><?=$detail->notifikasi_masa_berlaku?></p>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Tasks Tab End -->
								<!-- Cuti Tab start -->
								<div class="tab-pane fade" id="cuti" role="tabpanel">
									<div class="pd-20">
										<div class="profile-setting">
											<div class="container pd-0">
												<div class="profile-timeline">
													<div class="timeline-month">
														<h5>Cuti</h5>
													</div>
													<div class="row">
														<table class="data-table stripe hover nowrap">
															<thead>
																<tr>
																	<th class="table-plus datatable-nosort">No</th>
																	<th>Nik</th>
																	<th>Jenis Cuti</th>
																	<th>Lama Cuti</th>
																</tr>
															</thead>
															<tbody>
																<?php
																$i=1;
																foreach($cuti as $cu) { ?>
																<tr>
																	<td class="table-plus"><?=$i?></td>
																	<td><?=$cu['nik']?></td>
																	<td><?=$cu['jenis_cuti']?></td>
																	<td><?=$cu['lama_cuti']?></td>
																</tr>
																<?php
																$i++;
																} ?>
															</tbody>
														</table>
													</div>

													<div class="timeline-month">
														<h5></h5>
													</div>
													<div class="timeline-month" align="center">
														<h5>-------------------------------------------------------</h5>
													</div>
													<div class="timeline-month">
														<h5>Arsip</h5>
													</div>
													<div class="row">
														<table class="data-table stripe hover nowrap">
															<thead>
																<tr>
																	<th class="table-plus datatable-nosort">No</th>
																	<th>Nama File</th>
																	<th>File</th>
																	<th>Upload</th>
																</tr>
															</thead>
															<tbody>
																<?php
																$i=1;
																foreach($arsip as $arp) { ?>
																<tr>
																	<td class="table-plus"><?=$i?></td>
																	<td><?=$arp['nama_file']?></td>
																	<td><?=$arp['file_nonpegawai']?></td>
																	<td><?=$arp['created']?></td>
																</tr>
																<?php
																$i++;
																} ?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Cuti Tab End -->
								<!-- Riwayat Tab start -->
								<div class="tab-pane fade height-100-p" id="riwayat" role="tabpanel">
									<div class="pd-20">
										<div class="profile-riwayat">
											<div class="timeline-month">
												<h5>Riwayat </h5>
											</div>
											<div class="row">
												<table class="data-table stripe hover nowrap">
													<thead>
														<tr>
															<th class="table-plus datatable-nosort">No</th>
															<th>Nama Ruangan</th>
															<th>No Sk</th>
															<th>Tanggal Pindah</th>
															<th>Nama Pimpinan</th>
															<th>Tahun</th>
														</tr>
													</thead>
													<tbody>
														<?php
														$i=1;
														foreach($riwayat as $rwt) { ?>
														<tr>
															<td class="table-plus"><?=$i?></td>
															<td><?=$rwt['nama_ruangan']?></td>
															<td><?=$rwt['no_sk']?></td>
															<td><?=$rwt['tanggal_pindah']?></td>
															<td><?=$rwt['nama_pemimpin']?></td>
															<td><?=$rwt['tahun']?></td>
														</tr>
														<?php
														$i++;
														} ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<!-- riwayat Tab End -->
								<!-- pangkat Tab start -->
								<!-- <div class="tab-pane fade height-100-p" id="pangkat" role="tabpanel">
									<div class="pd-20">
										<div class="profile-pangkat">
											<div class="timeline-month">
												<h5>Pangkat</h5>
											</div>
											<div class="row">
												<table class="data-table stripe hover nowrap">
													<thead>
														<tr>
															<th class="table-plus datatable-nosort">No</th>
															<th>Nama Ruangan</th>
															<th>Tanggal</th>
															<th>NO KARPEG</th>
															<th>NO SK PNS</th>
															<th>NO SK Terakhir</th>
														</tr>
													</thead>
													<tbody>
														<?php
														$i=1;
														foreach($pangkat as $pnkt) { ?>
														<tr>
															<td class="table-plus"><?=$i?></td>
															<td><?=$pnkt['ruangan']?></td>
															<td><?=$pnkt['tanggal_kenaikan']?></td>
															<td><?=$pnkt['no_karpeg']?></td>
															<td><?=$pnkt['no_sk_pns']?></td>
															<td><?=$pnkt['no_sk_terakhir']?></td>
														</tr>
														<?php
														$i++;
														} ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div> -->
								<!-- Pangkat Tab End -->
						    </div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div> 
</div>