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
								<a class="btn btn-primary" href="<?=base_url('index.php/Arsip_pegawai/create/')?>" role="button">Tambah Data</a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Export Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h5 class="text-blue">Arsip Pegawai RSUD Syarifah Ambami</h5>
						</div>
					</div>
					<div class="row">
						<table class="stripe hover multiple-select-row data-table-export nowrap">
							<thead>
								<!-- <?php print_r($row->result()) ?> -->
								<tr>
									<th>NO</th>
									<th class="table-plus datatable-nosort">NIP</th>
									<th>Nama File</th>
									<th>File</th>
									<th>Waktu Upload</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i=1;
								foreach($row->result() as $key => $data) { ?>
								<tr>
									<td><?=$i?></td>
									<td><?=$data->nip?></td>
									<td><?=$data->nama_file?></td>
									<td><?=$data->file_pegawai?></td>
									<td><?=$data->created?></td>
									<td>
										<!-- <a href="" class="btn btn-primary my-3">Detail</a> -->
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="<?=site_url('Arsip_pegawai/download/'.$data->file_id)?>" ><i class="icon-copy ion-arrow-down-c"></i> Download</a>
												<a class="dropdown-item" href="<?=site_url('Arsip_pegawai/edit/'.$data->file_id)?>" ><i class="fa fa-pencil"></i> Edit</a>
												<a class="dropdown-item" href="<?=site_url('Arsip_pegawai/delete/'.$data->file_id)?>" onclick="return confirm ('yakin dihapus ?')"><i class="fa fa-trash"></i> Hapus</a>
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