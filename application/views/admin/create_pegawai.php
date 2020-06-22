<div class="pd-ltr-20 xs-pd-20-10">
	<div class="min-height-200px">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
					<div class="title">
						<h4><?=ucfirst($page)?> Data Pegawai</h4>
					</div>
					<nav aria-label="breadcrumb" role="navigation">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Form </li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<!-- Default Basic Forms Start -->
		<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
			<?php echo form_open_multipart('Pegawai/proses')?>
			<!-- <form method="post" action="<?=base_url('index.php/Pegawai/proses')?>" enctype="multipart/form-data"> -->
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Identitas Pegawai</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label >NIP :</label>
								<input type="text" class="form-control" id="nip" name="nip" value="<?= $row->nip?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label >Nama :</label>
								<!-- <input type="hidden" name="nip" value="<?= $row->nip?>"> -->
								<input type="text" class="form-control" id="nama" name="nama" value="<?= $row->nama?>" required>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label >NIK :</label>
								<input type="text" class="form-control " id="nik" name="nik" value="<?= $row->nik?>" required>
							</div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Suku Bangsa :</label>
								<input type="text" class="form-control" id="suku_bangsa" name="suku_bangsa" value="<?= $row->suku_bangsa?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Alamat :</label>
								<input type="text" class="form-control" id="alamat" name="alamat" value="<?= $row->alamat?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Provinsi :</label>
								<input type="text" class="form-control" id="provinsi" name="provinsi" value="<?= $row->provinsi?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Kabupaten/Kota :</label>
								<input type="text" class="form-control" id="kotakab" name="kotakab" value="<?= $row->kotakab?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Kecamatan :</label>
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $row->kecamatan?>" required>
                            </div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Kelurahan :</label>
								<input type="text" class="form-control" id="kelurahandesa" name="kelurahandesa" value="<?= $row->kelurahandesa?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>RT/RW :</label>
								<input type="text" class="form-control" id="rtrw" name="rtrw" value="<?= $row->rtrw?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Kode Pos :</label>
								<input type="text" class="form-control" id="kodepos" name="kodepos" value="<?= $row->kodepos?>"required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label >Tempat Lahir :</label>
								<input type="text" class="form-control" id="tempatlahir" name="tempatlahir" value="<?= $row->tempatlahir?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label >Tanggal Lahir :</label>
								<input type="date" class="form-control" id="tgl_lahir" placeholder="Select Date" name="tgl_lahir" value="<?= $row->tgl_lahir?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Jenis Kelamin :</label>
								<select class="custom-select form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= $row->jenis_kelamin?>" required>
									<option value="Laki-Laki">Laki-Laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Agama :</label>
								<select class="custom-select form-control" id="agama" name="agama" value="<?= $row->agama?>" required>
									<option value="Islam">Islam</option>
									<option value="Kristen">Kristen</option>
									<option value="Hindu">Hindu</option>
									<option value="Budha">Budha</option>
									<option value="Katolik">Katolik</option>
									<option value="Konghucu">Konghucu</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Status Pernikahan :</label>
								<select class="custom-select form-control" id="status_pernikahan" name="status_pernikahan" value="<?= $row->status_pernikahan?>" required>
									<option value="Menikah">Menikah</option>
									<option value="Belum Menikah">Belum Menikah</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Golongan Darah :</label>
								<input type="text" class="form-control" id="goldarah" name="goldarah" value="<?= $row->goldarah?>" required>
							</div>
						</div>
                        <div class="col-md-6">
							<div class="form-group">
								<label>Pendidikan :</label>
								<select class="custom-select form-control" id="pendidikan" name="pendidikan" value="<?= $row->pendidikan?>" required>
									<option value="Sarjana Kedokteran">Sarjana Kedokteran</option>
									<option value="Sarjana Kedokteran Gigi">Sarjana Kedokteran Gigi</option>
									<option value="Spesialis Anastesi">Spesialis Anastesi</option>
									<option value="Spesialis Bedah">Spesialis Bedah</option>
									<option value="Spesialis Bedah Tulang/Orthopedi">Spesialis Bedah Tulang/Ortopedi</option>
									<option value="Spesialis Forensik">Spesialis Forensik</option>
									<option value="Spesialis Jantung & Pembuluh Darah">Spesialis Jantung & Pembuluh Darah</option>
									<option value="Spesialis Kandungan">Spesialis Kandungan</option>
									<option value="Spesialis Kulit Kelamin">Spesialis Kulit Kelamin</option>
									<option value="Spesialis Anak">Spesialis Anak</option>
									<option value="Spesialis Mata">Spesialis Mata</option>
									<option value="Spesialis Penyakit Dalam">Spesialis Penyakit Dalam</option>
									<option value="Spesialis Paru">Spesialis Paru</option>
									<option value="Spesialis Patologi Klinik">Spesialis Patologi Klinik</option>
									<option value="Spesialis Radiologi">Spesialis Radiologi</option>
									<option value="Spesialis Syaraf">Spesialis Syaraf</option>
									<option value="Spesialis Urologi">Spesialis rologi</option>
									<option value="Spesialis THT">Spesialis THT</option>
									<option value="Spesialis THT-KL">Spesialis THT-KL</option>
									<option value="Spesialis Pathologi Anatomi">Spesialis Patologi Anatomi</option>
									<option value="Spesialis Fisik & Rehabilitas">Spesialis Fisik & Rehabilitas</option>
									<option value="Spesialis Kedokteran Jiwa">Spesialis Kedokteran Jiwa</option>
									<option value="Spesialis Emergency Medicine">Spesialis Emergency Medicine</option>
									<option value="Spesialis Orthodontis">Spesialis Orthodontis</option>
									<option value="Spesialis Periodontis">Spesialis Periodontis</option>
									<option value="Spesialis Konservasi">Spesialis Konservasi</option>
									<option value="Spesialis Bedah Mulut">Spesialis Bedah Mulut</option>
									<option value="Spesialis Penyakit Dalam Konsultan Gastro Enterologi Hepatologi">Spesialis Penyakit Dalam Konsultan Gastro Enterologi Hepatologi</option>
									<option value="Spesialis Ginjal & Hipertensi">Spesialis Ginjal & Hipertensi</option>
									<option value="Spesialis Bedah Konsultan Bedah Anak">Spesialis Bedah Konsultan Bedah Anak</option>
									<option value="Spesialis Patologi Klinik Konsultan">Spesialis Patologi Klinik Konsultan</option>
									<option value="Sub Spesialis Bedah Onkologi Konsultan">Sub Spesialis Bedah Onkologi Konsultan</option>
									<option value="Spesialis Bedah Syaraf">Spesialis Bedah Syaraf</option>
									<option value="Profesi Keperawatan">Profesi Keperawatan</option>
									<option value="Sarjana Keperawatan">Sarjana Keperawatan</option>
									<option value="Sarjana Kebidanan">Sarjana Kebidanan (SST / S.Tr.Keb)</option>
									<option value="Akademi Keperawatan">Akademi Keperawatan</option>
									<option value="Akper Anastesi">Akper Anastesi</option>
									<option value="Akademi Kebidanan">Akademi Kebidanan</option>
									<option value="SPK">SPK</option>
									<option value="Pasca Sarjana Psikologi">Pasca Sarjana Psikologi</option>
									<option value="Pasca Sarjana SKM">Pasca Sarjana SKM</option>
									<option value="Sarjana SKM">Sarjana SKM</option>
									<option value="Pasca Sarjana Farmasi">Pasca Sarjana Farmasi</option>
									<option value="Profesi Apoteker">Profesi Apoteker</option>
									<option value="D-III Farmasi">D-III Farmasi</option>
									<option value="SMF">SMF</option>
									<option value="D-III Perawat Gigi">D-III Perawat Gigi</option>
									<option value="D-IV Teknik Elektro Medik">D-IV Teknik Elektro Medik</option>
									<option value="D-III Teknik Elektro Medik">D-III Teknik Elektro Medik</option>
									<option value="Sarjana Science">Sarjana Science/S.Si</option>
									<option value="D-III Analis Kesehatan">D-III Analis Kesehatan</option>
									<option value="D-IV Rekam Medik">D-IV Rekam Medik</option>
									<option value="D-III Rekam Medik">D-III Rekam Medik</option>
									<option value="D-III AKL">D-III AKL</option>
									<option value="D-III Fisioterapi">D-III Fisioterapi</option>
									<option value="D-IV Fisioterapi">D-IV Fisioterapi</option>
									<option value="S1 Gizi">S1 Gizi</option>
									<option value="D-III Gizi">D-III Gizi</option>
									<option value="SPRG">SPRG</option>
									<option value="D-III Akupuntur">D-III Akupuntur</option>
									<option value="D-III Radiologi">D-III Radiologi</option>
									<option value="Pasca Sarjana Manajemen">Pasca Sarjana Manajemen</option>
									<option value="Pasca Sarjana Manajemen Kes">Pasca Sarjana Manajemen Kes </option>
									<option value="Pasca Sarjana Science">Pasca Sarjana Science</option>
									<option value="Sarjana Psikologi">Sarjana Psikologi</option>
									<option value="Sarjana Sosial">Sarjana Sosial</option>
									<option value="Sarjana Hukum">Sarjana Hukum</option>
									<option value="Sarjana Ekonomi">Sarjana Ekonomi</option>
									<option value="Sarjana Akuntansi">Sarjana Akuntansi</option>
									<option value="Sarjana Komputer">Sarjana Komputer</option>
									<option value="Sarjana Informatika">Sarjana Informatika </option>
									<option value="Sarjana Teknik Elektro">Sarjana Teknik Elektro</option>
									<option value="Sarjana Teknik Lingkungan">Sarjana Teknik Lingkungan</option>
									<option value="Sarjana Pendidikan">Sarjana Pendidikan </option>
									<option value="Sarjana Ked.Gigi">Sarjana Ked.Gigi</option>
									<option value="D-III Manajenen Administrasi/BPA">D-III Manajemen Administrasi/BPA</option>
									<option value="D-III Manajemen Akuntansi">D-III Manajemen Akuntansi</option>
									<option value="D-III Tkg">D-III Tkg</option>
									<option value="SPPH">SPPH</option>
									<option value="SMA/SMK">SMA/SMK</option>
									<option value="SMP">SMP</option>
									<option value="SD">SD</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>SD :</label>
								<input type="text" class="form-control" id="sd" name="sd" value="<?= $row->sd?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>No Ijasah :</label>
								<input type="text" class="form-control" id="no_ijasah_sd" name="no_ijasah_sd" value="<?= $row->no_ijasah_sd?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>SMP :</label>
								<input type="text" class="form-control" id="smp" name="smp" value="<?= $row->smp?>" >
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>No Ijasah :</label>
								<input type="text" class="form-control" id="no_ijasah_smp" name="no_ijasah_smp" value="<?= $row->no_ijasah_smp?>" >
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>SMA :</label>
								<input type="text" class="form-control" id="sma" name="sma" value="<?= $row->sma?>" >
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>No Ijasah :</label>
								<input type="text" class="form-control" id="no_ijasah_sma" name="no_ijasah_sma" value="<?= $row->no_ijasah_sma?>" >
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>S1 :</label>
								<input type="text" class="form-control" id="s1" name="s1" value="<?= $row->s1?>" >
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>No Ijasah :</label>
								<input type="text" class="form-control" id="no_ijasah_s1" name="no_ijasah_s1" value="<?= $row->no_ijasah_s1?>" >
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>S2 :</label>
								<input type="text" class="form-control" id="s2" name="s2" value="<?= $row->s2?>" >
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>No Ijasah :</label>
								<input type="text" class="form-control" id="no_ijasah_s2" name="no_ijasah_s2" value="<?= $row->no_ijasah_s2?>" >
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>S3 :</label>
								<input type="text" class="form-control" id="s3" name="s3" value="<?= $row->s3?>" >
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>No Ijasah :</label>
								<input type="text" class="form-control" id="no_ijasah_s3" name="no_ijasah_s3" value="<?= $row->no_ijasah_s3?>" >
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Masukkan Foto :</label>
								<?php if($page == 'edit') {
									if($row->foto_pegawai != null){ ?>
										<div>
											<img src="<?=base_url('uploads/foto_pegawai/'.$row->foto_pegawai)?>" alt="" class="avatar-photo">
										</div>
									<?php
									}
								} ?>
								<input type="file" class="form-control-file form-control height-auto" id="foto_pegawai" name="foto_pegawai" value="">
								<!-- <input type="file" class="form-control-file form-control height-auto" id="foto_dokter_pegawai" name="foto_dokter_pegawai" value="<?= $row->foto_dokter_pegawai?>"> -->
                            </div>
                        </div>
					</div>

					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Informasi Kontak</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>No Telp :</label>
								<input type="text" class="form-control" id="nohp" name="nohp" value="<?= $row->nohp?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Email</label>
								<input class="form-control" type="email" id="email" name="email" value="<?= $row->email?>" required>
							</div>
						</div>
					</div>
						
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Kepegawai</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Unit Kerja :</label>
								<input type="text" class="form-control" id="unit_kerja" name="unit_kerja" value="<?= $row->unit_kerja?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Nama Jabatan :</label>
								<input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $row->jabatan?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Status Karyawan :</label>
								<input type="text" class="form-control" id="status_pegawai" name="status_pegawai" value="<?= $row->status_pegawai?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Prediksi Pensiun :</label>
								<input type="text" class="form-control" id="masa_kerja" name="masa_kerja" value="<?= $row->masa_kerja?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Pangkat Terakhir :</label>
								<input type="text" class="form-control" id="pangkat_terakhir" name="pangkat_terakhir" value="<?= $row->pangkat_terakhir?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Eselon :</label>
								<input type="text" class="form-control" id="eselon" name="eselon" value="<?= $row->eselon?>" required>
							</div>
						</div>
						<div class="col-md-6">
								<div class="form-group">
								<label>Jenis Tenaga :</label>
								<select class="custom-select form-control" id="jenis_tenaga" name="jenis_tenaga" value="<?= $row->jenis_tenaga?>" required>
									<option value="dokter umum">Dokter umum</option>
									<option value="dokter gigi.">Dokter gigi</option>
									<option value="dokter spesialis">Dokter spesialis</option>
									<option value="dokter gigi spesialis">dokter gigi spesialis</option>
									<option value="dokter sub.spesialis">dokter sub.spesialis</option>
									<option value="keperawatan">Keperawatan</option>
									<option value="nakes lainnya">Nakes lainnya</option>
									<option value="manajemen">Manajemen</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Jenis Pelayanan {Untuk Dokter} :</label>
								<select class="custom-select form-control" id="jenis_pelayanan" name="jenis_pelayanan" value="<?= $row->jenis_pelayanan?>" required>
									<option value=" "> </option>
									<option value="Dokter Pelayanan Medis Dasar dokter umum">Dokter Pelayanan Medis Dasar dokter umum</option>
									<option value="Dokter Pelayanan Medis Dasar dokter gigi umum">Dokter Pelayanan Medis Dasar dokter gigi umum</option>
									<option value="Dokter Pelayanan Medis Spesialis Dasar">Dokter Pelayanan Medis Spesialis Dasar</option>
									<option value="Dokter Pelayanan Medis Spesialis Lain">Dokter Pelayanan Medis Spesialis Lain</option>
									<option value="Dokter Pelayanan Medis Spesialis Penunjang">Dokter Pelayanan Medis Spesialis Penunjang</option>
									<option value="Dokter Pelayanan Medis Spesialis Sub Spesialis">Dokter Pelayanan Medis Spesialis Sub Spesialis</option>
									<option value="Dokter Pelayanan Medis Spesialis Gigi & Mulut">Dokter Pelayanan Medis Spesialis Gigi & Mulut</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Gaji :</label>
								<input type="text" class="form-control" id="gaji" name="gaji" value="<?= $row->gaji?>" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>No.SIP :</label>
								<input type="text" class="form-control" id="no_sip" name="no_sip" value="<?= $row->no_sip?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>No.STR :</label>
								<input type="text" class="form-control" id="no_str" name="no_str" value="<?= $row->no_str?>" >
							</div>
						</div>
					</div>

					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Validasi</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label >Masa Berlaku STR/SIP :</label>
								<input type="date" class="form-control" id="masa_berlaku_sip_str" placeholder="Select Date" name="masa_berlaku_sip_str" value="<?= $row->masa_berlaku_sip_str?>">
                            </div>
                        </div>
                    </div>
					<div class="col-sm-12">
                        <div class="icon-button-demo">
                            <button type="submit" name="<?=$page?>" class="btn btn-primary"> SAVE</button>
                        </div>
                    </div>
				<!-- </form> -->
				<?php echo form_close() ?>
		</div>
		<!-- Default Basic Forms End -->
	</div>
</div>
