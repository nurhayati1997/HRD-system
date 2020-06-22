<div class="pd-ltr-20 xs-pd-20-10">
	<div class="min-height-200px">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
					<div class="title">
						<h4><?=ucfirst($page)?> Arsip Pegawai </h4>
					</div>
					<nav aria-label="breadcrumb" role="navigation">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="dasboard.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Form Basic</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<!-- Default Basic Forms Start -->
		<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
			<form method="post" action="<?=site_url('Arsip_pegawai/proses')?>" enctype="multipart/form-data">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Arsip Pegawai</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Nama :</label>
								<select class="custom-select form-control" id="nip" name="nip" value="<?= $row->nama?>" required>
									<option value="">Pilih NAMA</option>
									<?php foreach($nip->result() as $key =>$data){ ?>
										<option value="<?=$data->nip?>" <?=$data->nip ? "selected" : null?> ><?=$data->nama?></option>
									<?php }?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label >Jenis File :</label>
								<input type="hidden" name="id" value="<?= $row->file_id?>">
								<select class="custom-select form-control" id="nama_file" name="nama_file" value="<?= $row->nama_file?>" required>
									<option value="Pendidikan">Pendidikan (Ijazah)</option>
									<option value="Kelengkapan Dokumen ">Kelengkapan Dokumen (STR/SIP/Sertifikat/Transkip)</option>
									<option value="Kenaikan Pangkat">Kenaikan Pangkat </option>
									<option value="Cuti">Cuti</option>
									<option value="Riwayat Kerja">Riwayat Kerja</option>
								</select>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Masukkan File :</label>
								<?php if($page == 'edit') {
									if($row->file_pegawai != null){ ?>
										<div>
											<a href="<?=site_url('uploads/file_pegawai/'.$row->file_pegawai)?>"><?= $row->file_pegawai?></a>
										</div>
									<?php
									}
								} ?>
								<input type="file" class="form-control-file form-control height-auto" id="file_pegawai" name="file_pegawai" value="<?= $row->file_pegawai?>">
                            </div>
                        </div>
					</div>
					<div class="col-md-12">
                        <div class="icon-button-demo">
                            <button type="submit" name="<?=$page?>" class="btn btn-primary"> SAVE</button>
                        </div>
                    </div>
				</form>
		</div>
		<!-- Default Basic Forms End -->
	</div>
</div>
