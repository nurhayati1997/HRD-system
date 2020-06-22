<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>E-DOKAR SYAMRABU</title>

    <!-- Site favicon -->
    <link rel="shortcut icon" href="<?php echo base_url()."vendors/"; ?>images/logo.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="<?=base_url()?>vendors/styles/style.css">
    
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>src/plugins/jquery-steps/build/jquery.steps.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>src/plugins/cropperjs/dist/cropper.css">

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>src/plugins/datatables/media/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>src/plugins/datatables/media/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>src/plugins/datatables/media/css/responsive.dataTables.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-119386393-1');
    </script>
    
    <!-- <link rel="stylesheet" type="text/css" href="{{ url ('src/plugins/datatables/media/css/responsive.dataTables.css') }}"> -->
</head>
<body>
    <!-- header -->
    <!-- <div class="pre-loader"></div> -->
    <div class="header clearfix">
        <div class="header-right">
            <div class="brand-logo">
                <a href="<?=site_url('dashboard')?>">
                    <img src="<?=base_url()?>vendors/images/logo.png" alt="" class="mobile-logo">
                </a>
            </div>
            <div class="menu-icon">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon"><i class="fa fa-user-o"></i></span>
                        <span class="user-name">Kepegawaian</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="<?=site_url('auth/logout')?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- sidebar -->
    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="<?=site_url('dashboard')?>">
                <img src="<?=base_url()?>vendors/images/nav.png" alt="">
            </a>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <li class="dropdown">
                        <a href="<?=site_url('Dashboard')?>" class="dropdown-toggle no-arrow">
                            <span class="fa fa-home"></span><span class="mtext">Dasboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=site_url('Jenis_karyawan')?>" class="dropdown-toggle no-arrow">
                            <span class="fa fa-map-o"></span><span class="mtext">Jenis Karyawan</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=site_url('Arsip_karyawan')?>" class="dropdown-toggle no-arrow">
                            <span class="fa fa-clone"></span><span class="mtext">Arsip Karyawan</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=site_url('Cuti_karyawan')?>" class="dropdown-toggle no-arrow">
                            <span class="fa fa-paint-brush"></span><span class="mtext">Cuti Karyawan</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=site_url('Kenaikan_pangkat_karyawan')?>" class="dropdown-toggle no-arrow">
                            <span class="fa fa-pencil"></span><span class="mtext">Kenaikan Pangkat</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=site_url('Riwayat_kerja_karyawan')?>" class="dropdown-toggle no-arrow">
                            <span class="fa fa-sitemap"></span><span class="mtext">Riwayat Kerja</span>
                        </a>
                    </li>
                    <li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="fa fa-plug"></span><span class="mtext">Notifikasi</span>
						</a>
						<ul class="submenu">
							<li><a href="<?=site_url('Notifikasi_pegawai')?>">Pegawai</a></li>
							<li><a href="<?=site_url('Notifikasi_nonpegawai_thl')?>">THL</a></li>
							<li><a href="<?=site_url('Notifikasi_nonpegawai_kontrak')?>">Kontrak</a></li>
							<li><a href="<?=site_url('Notifikasi_nonpegawai_p3k')?>">P3K</a></li>
						</ul>
					</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="main-container">
        <?php echo $contents ?>
    </div>
    
    <!-- statistik-->
    <script src="<?=base_url()?>vendors/scripts/script.js"></script>
    <script src="<?=base_url()?>src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
    <script src="<?=base_url()?>src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
     <!-- chart-->
    <script type="text/javascript">
		Highcharts.chart('chart4', {
			chart: {
				type: 'column'
			},
			title: {
				text: 'Data Karyawan'
			},
			subtitle: {
				text: 'RSUD Syarifah Ambami Rato ebu'
			},
			xAxis: {
				categories: [
				'Pegawai',
				'THL',
				'Kontrak',
				'P3k'
				],
				crosshair: true
			},
			yAxis: {
				min: 0,
				title: {
					text: 'Orang'
				}
			},
			tooltip: {
				headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
				pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
				'<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
				footerFormat: '</table>',
				shared: true,
				useHTML: true
			},
			plotOptions: {
				column: {
					pointPadding: 0.2,
					borderWidth: 0
				}
			},
			series: [{
				name: 'Dokter',
				data: [49.9,null,106.4,null]

			}, {
				name: 'Keperawatan',
				data: [83.6, 78.8, 98.5, 93.4]

			},{
				name: 'Nakes Lainnya',
				data: [49.9, 71.5, 106.4, 129.2]

			}, {
				name: 'Management',
				data: [83.6, 78.8, 98.5, 93.4]

			}
            ]
		});


		// Device Usage chart
		Highcharts.chart('device-usage', {
			chart: {
				type: 'pie'
			},
			title: {
				text: ''
			},
			subtitle: {
				text: ''
			},
			credits: {
				enabled: false
			},
			plotOptions: {
				series: {
					dataLabels: {
						enabled: false,
						format: '{point.name}: {point.y:.1f}%'
					}
				},
				pie: {
					innerSize: 127,
					depth: 45
				}
			},

			tooltip: {
				headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
				pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
			},
			series: [{
				name: 'Brands',
				colorByPoint: true,
				data: [{
					name: 'IE',
					y: 10,
					color: '#ecc72f'
				}, {
					name: 'Chrome',
					y: 40,
					color: '#46be8a'
				}, {
					name: 'Firefox',
					y: 30,
					color: '#f2a654'
				}, {
					name: 'Safari',
					y: 10,
					color: '#62a8ea'
				}, {
					name: 'Opera',
					y: 10,
					color: '#e14e50'
				}]
			}]
		});

		// gauge chart
		Highcharts.chart('ram', {

			chart: {
				type: 'gauge',
				plotBackgroundColor: null,
				plotBackgroundImage: null,
				plotBorderWidth: 0,
				plotShadow: false
			},
			title: {
				text: ''
			},
			credits: {
				enabled: false
			},
			pane: {
				startAngle: -150,
				endAngle: 150,
				background: [{
					borderWidth: 0,
					outerRadius: '109%'
				}, {
					borderWidth: 0,
					outerRadius: '107%'
				}, {
				}, {
					backgroundColor: '#fff',
					borderWidth: 0,
					outerRadius: '105%',
					innerRadius: '103%'
				}]
			},

			yAxis: {
				min: 0,
				max: 200,

				minorTickInterval: 'auto',
				minorTickWidth: 1,
				minorTickLength: 10,
				minorTickPosition: 'inside',
				minorTickColor: '#666',

				tickPixelInterval: 30,
				tickWidth: 2,
				tickPosition: 'inside',
				tickLength: 10,
				tickColor: '#666',
				labels: {
					step: 2,
					rotation: 'auto'
				},
				title: {
					text: 'RAM'
				},
				plotBands: [{
					from: 0,
					to: 120,
					color: '#55BF3B'
				}, {
					from: 120,
					to: 160,
					color: '#DDDF0D'
				}, {
					from: 160,
					to: 200,
					color: '#DF5353'
				}]
			},

			series: [{
				name: 'Speed',
				data: [80],
				tooltip: {
					valueSuffix: '%'
				}
			}]
		});
		Highcharts.chart('cpu', {

			chart: {
				type: 'gauge',
				plotBackgroundColor: null,
				plotBackgroundImage: null,
				plotBorderWidth: 0,
				plotShadow: false
			},
			title: {
				text: ''
			},
			credits: {
				enabled: false
			},
			pane: {
				startAngle: -150,
				endAngle: 150,
				background: [{
					borderWidth: 0,
					outerRadius: '109%'
				}, {
					borderWidth: 0,
					outerRadius: '107%'
				}, {
				}, {
					backgroundColor: '#fff',
					borderWidth: 0,
					outerRadius: '105%',
					innerRadius: '103%'
				}]
			},

			yAxis: {
				min: 0,
				max: 200,

				minorTickInterval: 'auto',
				minorTickWidth: 1,
				minorTickLength: 10,
				minorTickPosition: 'inside',
				minorTickColor: '#666',

				tickPixelInterval: 30,
				tickWidth: 2,
				tickPosition: 'inside',
				tickLength: 10,
				tickColor: '#666',
				labels: {
					step: 2,
					rotation: 'auto'
				},
				title: {
					text: 'CPU'
				},
				plotBands: [{
					from: 0,
					to: 120,
					color: '#55BF3B'
				}, {
					from: 120,
					to: 160,
					color: '#DDDF0D'
				}, {
					from: 160,
					to: 200,
					color: '#DF5353'
				}]
			},

			series: [{
				name: 'Speed',
				data: [120],
				tooltip: {
					valueSuffix: ' %'
				}
			}]
		});
	</script>

    <!-- Table -->
    <script src="<?=base_url()?>src/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>src/plugins/datatables/media/js/dataTables.bootstrap4.js"></script>
    <script src="<?=base_url()?>src/plugins/datatables/media/js/dataTables.responsive.js"></script>
    <script src="<?=base_url()?>src/plugins/datatables/media/js/responsive.bootstrap4.js"></script>
    <!-- buttons for Export datatable -->
    <script src="<?=base_url()?>src/plugins/datatables/media/js/button/dataTables.buttons.js"></script>
    <script src="<?=base_url()?>src/plugins/datatables/media/js/button/buttons.bootstrap4.js"></script>
    <script src="<?=base_url()?>src/plugins/datatables/media/js/button/buttons.print.js"></script>
    <script src="<?=base_url()?>src/plugins/datatables/media/js/button/buttons.html5.js"></script>
    <script src="<?=base_url()?>src/plugins/datatables/media/js/button/buttons.flash.js"></script>
    <script src="<?=base_url()?>src/plugins/datatables/media/js/button/pdfmake.min.js"></script>
    <script src="<?=base_url()?>src/plugins/datatables/media/js/button/vfs_fonts.js"></script>
    <script>
        $('document').ready(function(){
            $('.data-table').DataTable({
                scrollCollapse: true,
                autoWidth: false,
                responsive: true,
                columnDefs: [{
                    targets: "datatable-nosort",
                    orderable: false,
                }],
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                "language": {
                    "info": "_START_-_END_ of _TOTAL_ entries",
                    searchPlaceholder: "Search"
                },
            });
            $('.data-table-export').DataTable({
                scrollCollapse: true,
                autoWidth: false,
                responsive: true,
                columnDefs: [{
                    targets: "datatable-nosort",
                    orderable: false,
                }],
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                "language": {
                    "info": "_START_-_END_ of _TOTAL_ entries",
                    searchPlaceholder: "Search"
                },
                dom: 'Bfrtip',
                buttons: [
                'copy', 'csv', 'pdf', 'print'
                ]
            });
            var table = $('.select-row').DataTable();
            $('.select-row tbody').on('click', 'tr', function () {
                if ($(this).hasClass('selected')) {
                    $(this).removeClass('selected');
                }
                else {
                    table.$('tr.selected').removeClass('selected');
                    $(this).addClass('selected');
                }
            });
            var multipletable = $('.multiple-select-row').DataTable();
            $('.multiple-select-row tbody').on('click', 'tr', function () {
                $(this).toggleClass('selected');
            });
        });
    </script>
    <!-- Detail -->
    <script src="../src/plugins/cropperjs/dist/cropper.js"></script>
    <script>
        window.addEventListener('DOMContentLoaded', function () {
            var image = document.getElementById('image');
            var cropBoxData;
            var canvasData;
            var cropper;

            $('#modal').on('shown.bs.modal', function () {
                cropper = new Cropper(image, {
                    autoCropArea: 0.5,
                    dragMode: 'move',
                    aspectRatio: 3 / 3,
                    restore: false,
                    guides: false,
                    center: false,
                    highlight: false,
                    cropBoxMovable: false,
                    cropBoxResizable: false,
                    toggleDragModeOnDblclick: false,
                    ready: function () {
                        cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
                    }
                });
            }).on('hidden.bs.modal', function () {
                cropBoxData = cropper.getCropBoxData();
                canvasData = cropper.getCanvasData();
                cropper.destroy();
            });
        });
    </script>
    <!-- add sweet alert js & css in footer -->
	<script src="<?=base_url()?>src/plugins/sweetalert2/sweetalert2.all.js"></script>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?> src/plugins/sweetalert2/sweetalert2.css">
	<script src="<?=base_url()?>src/plugins/sweetalert2/sweet-alert.init.js"></script>
</body>
</html>