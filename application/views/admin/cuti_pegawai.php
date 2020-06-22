<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>DataTable</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">DataTable</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="btn-list">
								<a class="btn btn-primary" href="<?=site_url('Cuti_pegawai/create/')?>" role="button">Tambah Data</a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Export Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h5 class="text-blue">Cuti Pegawai RSUD Syarifah Ambami</h5>
						</div>
					</div>
					<div class="row">
						<table class="stripe hover multiple-select-row data-table-export nowrap">
							<thead>
								<!-- <?php print_r($row->result()) ?> -->
								<tr>
									<th>NO</th>
									<th>Nama</th>
									<th>Jabatan</th>
									<th>Unit Kerja</th>
									<th>NIP</th>
									<th>Masa Kerja</th>
									<th>Jenis Cuti</th>
									<th>Alasan Cuti</th>
									<th>Lama Cuti</th>
									<th>Dimulai Tanggal</th>
									<th>Sampai Tanggal</th>
									<th>Catatan Cuti</th>
									<th>Alamat Selama Cuti</th>
									<th>Pertimbangan Atasan Langsung</th>
									<th>Keputuan Pejabat Berwenang</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i=1;
								foreach($row->result() as $key => $data) { ?>
								<tr>
									<td><?=$i?></td>
									<td><?=$data->nama?></td>
									<td><?=$data->jabatan?></td>
									<td><?=$data->unit_kerja?></td>
									<td><?=$data->nip?></td>
									<td><?=$data->masa_kerja?></td>
									<td><?=$data->jenis_cuti?></td>
									<td><?=$data->alasan_cuti?></td>
									<td><?=$data->lama_cuti?></td>
									<td><?=$data->mulai_tanggal?></td>
									<td><?=$data->sampai_tanggal?></td>
									<td><?=$data->catatan_cuti?></td>
									<td><?=$data->alamat_cuti?></td>
									<td><?=$data->pertimbangan_atasan?></td>
									<td><?=$data->keputusan_berwenang?></td>
									<td>
										<!-- <a href="" class="btn btn-primary my-3">Detail</a> -->
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="<?=site_url('Cuti_pegawai/edit/'.$data->cuti_id)?>" ><i class="fa fa-pencil"></i> Edit</a>
												<a class="dropdown-item" href="<?=site_url('Cuti_pegawai/delete/'.$data->cuti_id)?>" onclick="return confirm ('yakin dihapus ?')"><i class="fa fa-trash"></i> Hapus</a>
											</div>
										</div>
									</td>
								</tr>
								<?php
								$i++;
								} ?>
							</tbody>
						</table>
					</div>
				</div>
				<!-- Export Datatable End -->
			</div>
			<!-- <div class="footer-wrap bg-white pd-20 mb-20 border-radius-5 box-shadow">
                E-DOKAR RSUD SYAMRABU || creat By : <a target="_blank">Unit SIMRS</a></div>
            </div> -->
		</div>