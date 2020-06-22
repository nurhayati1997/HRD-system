<div class="pd-ltr-20 xs-pd-20-10">
	<div class="min-height-200px">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
					<div class="title">
						<h4><?=ucfirst($page)?> Arsip Pegawai Dokter </h4>
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
			<form method="post" action="<?=site_url('Cuti_pegawai/proses')?>" enctype="multipart/form-data">
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
									<option value="">Pilih Nama</option>
									<?php foreach($nip->result() as $key =>$data){ ?>
										<!-- <option value="<?=$data->nip?>" <?=$data->nip == $row->nip ? "selected" : null?> ><?=$data->nama?></option> -->
										<option value="<?=$data->nip?>" <?=$data->nip ? "selected" : null?> ><?=$data->nama?></option>
									<?php }?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label >Jenis Cuti :</label>
								<input type="hidden" name="id" value="<?= $row->cuti_id?>">
								<select class="custom-select form-control" id="jenis_cuti" name="jenis_cuti" value="<?= $row->jenis_cuti?>" required>
									<option value="Cuti Tahunan">Cuti Tahunan</option>
									<option value="Cuti Sakit">Cuti Sakit</option>
									<option value="Cuti Besar">Cuti Besar </option>
									<option value="Cuti Melahirkan">Cuti Melahirkan</option>
									<option value="Cuti Karena Alasan Penting">Cuti Karena Alasan Penting</option>
									<option value="Cuti Diluar Tanggungan Negara">Cuti Diluar Tanggungan Negara</option>
								</select>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label >Alasan Cuti :</label>
								<input type="text" class="form-control" id="alasan_cuti" name="alasan_cuti" value="<?= $row->alasan_cuti?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label >Lama Cuti :</label>
								<input type="text" class="form-control" id="lama_cuti" name="lama_cuti" value="<?= $row->lama_cuti?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Dimulai Tanggal :</label>
								<input type="date" class="form-control" id="mulai_tanggal" placeholder="Select Date" name="mulai_tanggal" value="<?= $row->mulai_tanggal?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Sampai Tanggal :</label>
								<input type="date" class="form-control" id="sampai_tanggal" placeholder="Select Date" name="sampai_tanggal" value="<?= $row->sampai_tanggal?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label >Catatan Cuti :</label>
								<input type="text" class="form-control" id="catatan_cuti" name="catatan_cuti" value="<?= $row->catatan_cuti?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label >Alamat Selama Menjalankan Cuti :</label>
								<input type="text" class="form-control" id="alamat_cuti" name="alamat_cuti" value="<?= $row->alamat_cuti?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Pertimbangan Atasan Langsung:</label>
								<!-- <input type="hidden" name="id" value="<?= $row->cuti_id?>"> -->
								<select class="custom-select form-control" id="pertimbangan_atasan" name="pertimbangan_atasan" value="<?= $row->pertimbangan_atasan?>" required>
									<option value="Disetujui">Disetujui</option>
									<option value="Perubahan">Perubahan</option>
									<option value="Ditangguhkan">Ditangguhkan</option>
									<option value="Tidak Disetujui">Tidak Disetujui</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Keputusan Pejabat Yang Berwenang Memberikan Cuti:</label>
								<!-- <input type="hidden" name="id" value="<?= $row->cuti_id?>"> -->
								<select class="custom-select form-control" id="keputusan_berwenang" name="keputusan_berwenang" value="<?= $row->keputusan_berwenang?>" required>
									<option value="Disetujui">Disetujui</option>
									<option value="Perubahan">Perubahan</option>
									<option value="Ditangguhkan">Ditangguhkan</option>
									<option value="Tidak Disetujui">Tidak Disetujui</option>
								</select>
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
