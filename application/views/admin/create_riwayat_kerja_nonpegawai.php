<div class="pd-ltr-20 xs-pd-20-10">
	<div class="min-height-200px">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
					<div class="title">
						<h4><?=ucfirst($page)?> Riwayat Pekerjaan Nonpegawai </h4>
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
			<form method="post" action="<?=site_url('Riwayat_kerja_nonpegawai/proses')?>" enctype="multipart/form-data">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Riwayat Pekerjaan Nonpegawai</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Nama :</label>
								<select class="custom-select form-control" id="nik" name="nik" value="<?= $row->nama?>" required>
									<option value="">Pilih NAMA</option>
									<?php foreach($nik->result() as $key =>$data){ ?>
										<option value="<?=$data->nik?>" <?=$data->nik ? "selected" : null?> ><?=$data->nama?></option>
									<?php }?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Ruangan :</label>
								<input type="hidden" name="id" value="<?= $row->riwayat_kerja_id?>">
								<select class="custom-select form-control" id="nama_ruangan" name="nama_ruangan" value="<?= $row->nama_ruangan?>" required>
									<option value="Loket 1">Loket 1</option>
									<option value="Loket 2">Loket 2</option>
									<option value="IGD">IGD</option>
									<option value="IRNA A">IRNA A</option>
									<option value="IRNA B bawah">IRNA B bawah</option>
									<option value="IRNA B atas">IRNA B atas</option>
									<option value="IRNA B kelas 1">IRNA B kelas 1</option>
									<option value="IRNA C atas (nivas)">IRNA C atas (nivas)</option>
									<option value="IRNA C bawah (CK)">IRNA C bawah (CK)</option>
									<option value="IRNA D (pavillium)">IRNA D (pavillium)</option>
									<option value="IRNA E">IRNA E</option>
									<option value="IRNA F (isolasi)">IRNA F (isolasi)</option>
									<option value="IRNA G (neonatus)">IRNA G (neonatus)</option>
									<option value="ICU">ICU</option>
									<option value="Education Center">Education Center</option>
									<option value="IRJA">IRJA</option>
									<option value="Farmasi">Farmasi</option>
									<option value="Kaseling">Kaseling</option>
									<option value="CS">CS</option>
									<option value="Radiologi">Radiologi</option>
									<option value="Lab & Bank Darah">Lab & Bank Darah</option>
									<option value="Linen">Linen</option>
									<option value="CSSD">CSSD</option>
									<option value="IPS">IPS</option>
									<option value="IT">IT</option>
									<option value="Instalasi Pemulasaran Jenazah">Instalasi Pemulasaran Jenazah</option>
									<option value="Gizi">Gizi</option>
									<option value="Sungram & Rekam Medik">Sungram & Rekam Medik</option>
									<option value="Yankeb">Yankeb</option>
									<option value="Yanmed">Yanmed</option>
									<option value="Promkes">Promkes</option>
									<option value="Umum">Umum</option>
									<option value="Perlengkapan">Perlengkapan</option>
									<option value="Kenonpegawaian">Kenonpegawaian</option>
									<option value="Keuangan">Keuangan</option>
									<option value="Perkir">Parkir</option>
									<option value="Satpam">Satpam</option>
									<option value="Komite Medik">Komite Medik</option>
									<option value="TPBJ">TPBJ</option>
									<option value="SPI">SPI</option>
									<option value="Gas Medik">Gas Medik</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>NO SK :</label>
								<input type="text" class="form-control" id="no_sk" name="no_sk" value="<?= $row->no_sk?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Tanggal Pindah :</label>
								<input type="date" class="form-control" id="tanggal_pindah" placeholder="Select Date" name="tanggal_pindah" value="<?= $row->tanggal_pindah?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Nama_pemimpin :</label>
								<input type="text" class="form-control" id="nama_pemimpin" name="nama_pemimpin" value="<?= $row->nama_pemimpin?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Tahun :</label>
								<input type="text" class="form-control" id="tahun" name="tahun" value="<?= $row->tahun?>" required>
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
