		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Form</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Notifikasi</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="invoice-wrap">
					<div class="invoice-box">
						<div class="invoice-header">
							<div class="logo text-center">
								<img src="<?=base_url()?>vendors/images/nav.png" alt="">
							</div>
						</div>
						<h4 class="text-center mb-30 weight-600 text-danger">WARNING</h4>
						<div class="row pb-30">
							<div class="col-md-12">
								<h5 class="text-center mb-15">Please Uprage Your STR/SIP file</h5>
								<p class="text-center font-14 mb-5">On: <strong class="weight-600">This Year</strong></p>
								<p class="text-center font-14 mb-5">By: <strong class="weight-600">Bagian Kepegawaian</strong></p>
							</div>
							<!-- <div class="col-md-6">
								<div class="text-right">
									<p class="font-14 mb-5">Your Name </strong></p>
									<p class="font-14 mb-5">Your Address</p>
									<p class="font-14 mb-5">City</p>
									<p class="font-14 mb-5">Postcode</p>
								</div>
							</div> -->
						</div>
						<div class="invoice-desc pb-30">
							<!-- <div class="invoice-desc-head clearfix">
								<div class="invoice-sub">Description</div>
								<div class="invoice-rate">Rate</div>
								<div class="invoice-hours">Hours</div>
								<div class="invoice-subtotal">Subtotal</div>
							</div>
							<div class="invoice-desc-body">
								<ul>
									<li class="clearfix">
										<div class="invoice-sub">Website Design</div>
										<div class="invoice-rate">$20</div>
										<div class="invoice-hours">100</div>
										<div class="invoice-subtotal"><span class="weight-600">$2000</span></div>
									</li>
								</ul>
							</div> -->
							<table class="table table-bordered">
								<thead>
									<tr>
										<th scope="col">NO</th>
										<th scope="col">Nama</th>
										<th scope="col">Ruangan</th>
										<th scope="col">Jenis Tenaga</th>
										<th scope="col">Masa Berlaku</th>
										<th scope="col">Upgrade Berlaku</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$i=1;
									foreach($row->result() as $key => $data) { ?>
									<tr>
										<th scope="row"><?=$i?></th>
										<td><?=$data->nama?></td>
										<td><?=$data->unit_kerja?></td>
										<td><?=$data->jenis_tenaga?></td>
										<td><?=$data->masa_berlaku_sip_str?></td>
										<td><?=$data->notifikasi_masa_berlaku?></td>
									</tr>
									<?php
									$i++;
									} ?>
								</tbody>
							</table>
						</div>
						<h4 class="text-center pb-20">Thank You!!</h4>
					</div>
				</div>
			</div>
		</div>