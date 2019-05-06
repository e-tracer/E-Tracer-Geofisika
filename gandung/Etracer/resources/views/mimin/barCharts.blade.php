<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bar Charts | Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('deded/img/favicon.ico')}}">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('deded/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('deded/css/font-awesome.min.css')}}">
    <!-- adminpro icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('deded/css/adminpro-custon-icon.css')}}">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('deded/css/meanmenu.min.css')}}">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('deded/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('deded/css/animate.css')}}">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('deded/css/normalize.css')}}">
    <!-- tab CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('deded/css/tab-menus.css')}}">
    <!-- tabs CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('deded/css/tabs.css')}}">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('deded/style.css')}}">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('deded/css/responsive.css')}}">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{asset('deded/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="img/Logo-TG.jpg" alt="" />
                    </a>
                    <h3>Dediepow</h3>
                    <p>Admin</p>
                    <strong>TG-I</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                <i class="fa big-icon fa-home"></i> <span class="mini-dn">Admin Home</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span>
                            </a>

                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="admin" class="dropdown-item"> Admin Home </a>
                            </div>
                        </li>
        
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-table"></i> <span class="mini-dn">Data Tables</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span>
                            </a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="adminPengaturanUser" class="dropdown-item">Pengaturan User</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                <i class="fa big-icon fa-edit"></i> <span class="mini-dn">Forms Elements</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span>
                            </a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="adminShowForm" class="dropdown-item">Form Kuisioner</a>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Header top area start-->
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="img/logo/log.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                    <ul class="nav navbar-nav mai-top-nav">
                                        <li class="nav-item"><a href="#" class="nav-link">Admin Bar-Chart</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">

                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                                <span class="admin-name">Dediepow</span>
                                                <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                                <li><a href="#"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
												<input type="text" placeholder="Search..." class="form-control">
												<a href=""><i class="fa fa-search"></i></a>
											</form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Admin</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Bar Charts</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 des-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
												<input type="text" placeholder="Search..." class="form-control">
												<a href=""><i class="fa fa-search"></i></a>
											</form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- Charts Start-->


      
      <div class="charts-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-lg-6">
                            <div class="charts-single-pro shadow-reset nt-mg-b-30">
                                <div class="alert-title">
                                    <h2>Kuisioner pertama</h2>
                                    <p>Seberapa besar alasan-alasan di bawah ini menyebabkan ketidaktepatan masa studi anda?  </p>
                                </div>
                                <div id="bar4-chart">
                                    <canvas id="bc1"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="charts-single-pro shadow-reset nt-mg-b-30">
                                <div class="alert-title">
                                    <h2>Kuisioner  kedua</h2>
                                    <p>Menurut Anda seberapa besar penekanan pada aspek-aspek pembelajaran di bawah ini dilaksanakan di program studi anda </p>
                                </div>
                                <div id="bar4-chart">
                                    <canvas id="bc2"></canvas>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="charts-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-lg-6">
                            <div class="charts-single-pro shadow-reset nt-mg-b-30">
                                <div class="alert-title">
                                    <h2>Kuisioner ketujuh</h2>
                                    <p>Dalam skala 1 sampai 5, bagaimana penilaian Anda terhadap aspek belajar mengajar di bawah ini? </p>
                                </div>
                                <div id="bar4-chart">
                                    <canvas id="bc7"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="charts-single-pro shadow-reset nt-mg-b-30">
                                <div class="alert-title">
                                    <h2>Kuisioner  kedelapan</h2>
                                    <p>Bagaimana penilaian Anda terhadap kondisi fasilitas belajar di bawah ini? </p>
                                </div>
                                <div id="bar4-chart">
                                    <canvas id="bc8"></canvas>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="charts-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-lg-6">
                            <div class="charts-single-pro shadow-reset nt-mg-b-30">
                                <div class="alert-title">
                                    <h2>Kuisioner ke sebelas </h2>
                                    <p>Berdasarkan persepsi Anda, seberapa pentingkah aspek-aspek dibawah ini bagi perusahaan/instansi dalam melakukan penerimaan pegawai?  </p>
                                </div>
                                <div id="bar4-chart">
                                    <canvas id="bc11"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="charts-single-pro shadow-reset nt-mg-b-30">
                                <div class="alert-title">
                                    <h2>Kuisioner  ke dua puluh empat </h2>
                                    <p>Pada saat lulus, bagaimana kontribusi perguruan tinggi dalam hal kompetensi di bawah ini? Dalam skala 1 sampai 5, pada tingkat mana kompetensi di bawah ini Anda kuasai?</p>
                                </div>
                                <div id="bar4-chart">
                                    <canvas id="bc24"></canvas>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div> 
            <div class="charts-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-lg-6">
                            <div class="charts-single-pro shadow-reset nt-mg-b-30">
                                <div class="alert-title">
                                    <h2>Kuisioner ke dua puluh lima </h2>
                                    <p>Bagaimana kontribusi perguruan tinggi dalam hal kompetensi di bawah ini?   </p>
                                </div>
                                <div id="bar4-chart">
                                    <canvas id="bc25"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="charts-single-pro shadow-reset nt-mg-b-30">
                                <div class="alert-title">
                                    <h2>Kuisioner  ke dua puluh enam </h2>
                                    <p>Seberapa besar peran kompetensi yang diperoleh di perguruantinggi berikut ini dalam melaksanakan pekerjaan anda</p>
                                </div>
                                <div id="bar4-chart">
                                    <canvas id="bc26"></canvas>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>

            <div class="charts-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-lg-6">
                            <div class="charts-single-pro shadow-reset nt-mg-b-30">
                                <div class="alert-title">
                                    <h2>Kuisioner ke dua puluh sembilan </h2>
                                    <p> Sejauh mana program studi anda bermanfaat untuk hal-hal di bawah ini?    </p>
                                </div>
                                <div id="bar4-chart">
                                    <canvas id="bc29"></canvas>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>


      
      

 <!-- Static Table End -->


            
            <!-- Charts End-->

        </div>
    </div>
    <!-- Footer Start-->
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &#169; 2019 by E-Tracer Geofisika Itera </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
    <!-- jquery
        ============================================ -->
    <script src="{{asset('deded/js/vendor/jquery-1.11.3.min.js')}}"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{asset('deded/js/bootstrap.min.js')}}"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{asset('deded/js/jquery.meanmenu.js')}}"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="{{asset('deded/js/jquery.sticky.js')}}"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{asset('deded/js/jquery.mCustomScrollbar.concat.min.js')}}')}}"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{asset('deded/js/jquery.scrollUp.min.js')}}"></script>
    <!-- Charts JS
        ============================================ -->
    <script src="{{asset('deded/js/charts/Chart.js')}}"></script>
    <script src="{{asset('deded/js/charts/bar-chart.js')}}"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{asset('deded/js/main.js')}}"></script>

    <script>    



    var data291 = <?php foreach($user29 as $p) echo $p->pertanyaan291 ?>;
    var data292 = <?php foreach($user29 as $p) echo $p->pertanyaan292 ?>;
    var data293 = <?php foreach($user29 as $p) echo $p->pertanyaan293 ?>;
    var data294 = <?php foreach($user29 as $p) echo $p->pertanyaan294?>;
    var data295 = <?php foreach($user29 as $p) echo $p->pertanyaan295 ?>;
    var data296 = <?php foreach($user29 as $p) echo $p->pertanyaan296 ?>;
    

    </script>

    


    <script>
    var ctx = document.getElementById("bc1");
    var data1 = <?php foreach($user as $p) echo $p->pertanyaan11 ?>;
    var data2 = <?php foreach($user as $p) echo $p->pertanyaan12 ?>;
    var data3 = <?php foreach($user as $p) echo $p->pertanyaan13 ?>;
    var data4 = <?php foreach($user as $p) echo $p->pertanyaan14 ?>;
    var data5 = <?php foreach($user as $p) echo $p->pertanyaan15 ?>;
    var data6 = <?php foreach($user as $p) echo $p->pertanyaan16 ?>;
    var data7 = <?php foreach($user as $p) echo $p->pertanyaan17 ?>;
	var barchart1 = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["p1", "p2", "p3", "p4", "p5", "p6", "p7"],
			datasets: [{
				label: 'Bar Chart',
				data: [data1, data2, data3, data4, data5, data6, data7],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(255, 99, 132, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(255,99,132,1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				xAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}],
				yAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}]
			}
		}
	});
    </script>

<script>
    var ctx = document.getElementById("bc2");
    var data21 = <?php foreach($user2 as $p) echo $p->pertanyaan21 ?>;
    var data22 = <?php foreach($user2 as $p) echo $p->pertanyaan22 ?>;
    var data23 = <?php foreach($user2 as $p) echo $p->pertanyaan23 ?>;
    var data24 = <?php foreach($user2 as $p) echo $p->pertanyaan24 ?>;
    var data25 = <?php foreach($user2 as $p) echo $p->pertanyaan25 ?>;
    var data26 = <?php foreach($user2 as $p) echo $p->pertanyaan26 ?>;
	var barchart1 = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["p1", "p2", "p3", "p4", "p5", "p6"],
			datasets: [{
				label: 'Bar Chart',
				data: [data21, data22, data23, data24, data25, data26],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				xAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}],
				yAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}]
			}
		}
	});
    </script>

    
<script>
    var ctx = document.getElementById("bc7");
    var data71 = <?php foreach($user7 as $p) echo $p->pertanyaan71 ?>;
    var data72 = <?php foreach($user7 as $p) echo $p->pertanyaan72 ?>;
    var data73 = <?php foreach($user7 as $p) echo $p->pertanyaan73 ?>;
    var data74 = <?php foreach($user7 as $p) echo $p->pertanyaan74 ?>;
    var data75 = <?php foreach($user7 as $p) echo $p->pertanyaan75 ?>;
    var data76 = <?php foreach($user7 as $p) echo $p->pertanyaan76 ?>;
	var barchart1 = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["p1", "p2", "p3", "p4", "p5", "p6"],
			datasets: [{
				label: 'Bar Chart',
				data: [data71, data72, data73, data74, data75, data76],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				xAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}],
				yAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}]
			}
		}
	});
    </script>

<script>
    var ctx = document.getElementById("bc8");
    var data81 = <?php foreach($user8 as $p) echo $p->pertanyaan81 ?>;
    var data82 = <?php foreach($user8 as $p) echo $p->pertanyaan82 ?>;
    var data83 = <?php foreach($user8 as $p) echo $p->pertanyaan83 ?>;
    var data84 = <?php foreach($user8 as $p) echo $p->pertanyaan84 ?>;
    var data85 = <?php foreach($user8 as $p) echo $p->pertanyaan85 ?>;
    var data86 = <?php foreach($user8 as $p) echo $p->pertanyaan86 ?>;
    var data87 = <?php foreach($user8 as $p) echo $p->pertanyaan87 ?>;
    var data88 = <?php foreach($user8 as $p) echo $p->pertanyaan88 ?>;
    var data89 = <?php foreach($user8 as $p) echo $p->pertanyaan89 ?>;
	var barchart1 = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["p1", "p2", "p3", "p4", "p5", "p6","p7","p8","p9"],
			datasets: [{
				label: 'Bar Chart',
				data: [data81, data82, data83, data84, data85, data86,data87, data88, data89],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				xAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}],
				yAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}]
			}
		}
	});
    </script>

<script>
    var ctx = document.getElementById("bc11");
    var data1 = <?php foreach($user11 as $p) echo $p->pertanyaan111 ?>;
    var data2 = <?php foreach($user11 as $p) echo $p->pertanyaan112 ?>;
    var data3 = <?php foreach($user11 as $p) echo $p->pertanyaan113 ?>;
    var data4 = <?php foreach($user11 as $p) echo $p->pertanyaan114 ?>;
    var data5 = <?php foreach($user11 as $p) echo $p->pertanyaan115 ?>;
    var data6 = <?php foreach($user11 as $p) echo $p->pertanyaan116 ?>;
    var data7 = <?php foreach($user11 as $p) echo $p->pertanyaan117 ?>;
    var data8 = <?php foreach($user11 as $p) echo $p->pertanyaan118 ?>;
    var data9 = <?php foreach($user11 as $p) echo $p->pertanyaan119 ?>;
    var data10 = <?php foreach($user11 as $p) echo $p->pertanyaan1110 ?>;
    var data11 = <?php foreach($user11 as $p) echo $p->pertanyaan1111 ?>;
	var barchart1 = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["p1", "p2", "p3", "p4", "p5", "p6", "p7","p8","p9","p10","p11"],
			datasets: [{
				label: 'Bar Chart',
				data: [data1, data2, data3, data4, data5, data6,data7,data8,data9,data10,data11],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				xAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}],
				yAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}]
			}
		}
	});
    </script>

    <script>

var ctx = document.getElementById("bc24");
var data1 = <?php foreach($user24 as $p) echo $p->pertanyaan241 ?>;
var data2 = <?php foreach($user24 as $p) echo $p->pertanyaan242 ?>;
var data3 = <?php foreach($user24 as $p) echo $p->pertanyaan243 ?>;
var data4 = <?php foreach($user24 as $p) echo $p->pertanyaan244 ?>;
var data5 = <?php foreach($user24 as $p) echo $p->pertanyaan245 ?>;
var data6 = <?php foreach($user24 as $p) echo $p->pertanyaan246 ?>;
var data7 = <?php foreach($user24 as $p) echo $p->pertanyaan247 ?>;
var data8 = <?php foreach($user24 as $p) echo $p->pertanyaan248 ?>;
var data9 = <?php foreach($user24 as $p) echo $p->pertanyaan249 ?>;
var data10 = <?php foreach($user24 as $p) echo $p->pertanyaan2410 ?>;
var data11 = <?php foreach($user24 as $p) echo $p->pertanyaan2411 ?>;
var data12 = <?php foreach($user24 as $p) echo $p->pertanyaan2412 ?>;
var data13 = <?php foreach($user24 as $p) echo $p->pertanyaan2413 ?>;
var data14 = <?php foreach($user24 as $p) echo $p->pertanyaan2414 ?>;
var data15 = <?php foreach($user24 as $p) echo $p->pertanyaan2415 ?>;
var data16 = <?php foreach($user24 as $p) echo $p->pertanyaan2416 ?>;
var data17 = <?php foreach($user24 as $p) echo $p->pertanyaan2417 ?>;
var data18 = <?php foreach($user24 as $p) echo $p->pertanyaan2418 ?>;
var data19 = <?php foreach($user24 as $p) echo $p->pertanyaan2419 ?>;
var data20 = <?php foreach($user24 as $p) echo $p->pertanyaan2420 ?>;
var data21 = <?php foreach($user24 as $p) echo $p->pertanyaan2421 ?>;
var data22 = <?php foreach($user24 as $p) echo $p->pertanyaan2422 ?>;
var data23 = <?php foreach($user24 as $p) echo $p->pertanyaan2423 ?>;
var data24 = <?php foreach($user24 as $p) echo $p->pertanyaan2424 ?>;
var data25 = <?php foreach($user24 as $p) echo $p->pertanyaan2425 ?>;
var data26 = <?php foreach($user24 as $p) echo $p->pertanyaan2426 ?>;
var data27 = <?php foreach($user24 as $p) echo $p->pertanyaan2427 ?>;
	var barchart4 = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["p1", "p2", "p3", "p4", "p5", "p6", "p7","p8","p9","p10","p11","p12","p13","p14","p15","p16","p17","p18","p19","p20","p21","p22","p23","p24","p25","p26","p27"],
			datasets: [{
                label: 'Dataset 1',
				data: [data1, data2, data3, data4, data5, data6, data7, data8, data9,data10,data11, data12, data13, data14, data15, data16, data17, data18, data19, data20,data21, data22, data23, data24, data25, data26, data27],
				borderWidth: 1,
				yAxisID: "y-axis-1",
                backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'
				],
            } 
          ]
		},
		options: {
			responsive: true,
			title:{
				display:true,
				text:"Bar Chart Multi Axis"
			},
			tooltips: {
				mode: 'index',
				intersect: true
			},
			scales: {
				yAxes: [{
					type: "linear",
					display: true,
					position: "left",
					id: "y-axis-1",
				}, {
					type: "linear",
					display: false,
					position: "right",
					id: "y-axis-2",
					gridLines: {
						drawOnChartArea: false
					}
				}],
			}
		}
	});
    </script>

<script>

var ctx = document.getElementById("bc25");
var data1 = <?php foreach($user25 as $p) echo $p->pertanyaan251 ?>;
var data2 = <?php foreach($user25 as $p) echo $p->pertanyaan252 ?>;
var data3 = <?php foreach($user25 as $p) echo $p->pertanyaan253 ?>;
var data4 = <?php foreach($user25 as $p) echo $p->pertanyaan254 ?>;
var data5 = <?php foreach($user25 as $p) echo $p->pertanyaan255 ?>;
var data6 = <?php foreach($user25 as $p) echo $p->pertanyaan256 ?>;
var data7 = <?php foreach($user25 as $p) echo $p->pertanyaan257 ?>;
var data8 = <?php foreach($user25 as $p) echo $p->pertanyaan258 ?>;
var data9 = <?php foreach($user25 as $p) echo $p->pertanyaan259 ?>;
var data10 = <?php foreach($user25 as $p) echo $p->pertanyaan2510 ?>;
var data11 = <?php foreach($user25 as $p) echo $p->pertanyaan2511 ?>;
var data12 = <?php foreach($user25 as $p) echo $p->pertanyaan2512 ?>;
var data13 = <?php foreach($user25 as $p) echo $p->pertanyaan2513 ?>;
var data14 = <?php foreach($user25 as $p) echo $p->pertanyaan2514 ?>;
var data15 = <?php foreach($user25 as $p) echo $p->pertanyaan2515 ?>;
var data16 = <?php foreach($user25 as $p) echo $p->pertanyaan2516 ?>;
var data17 = <?php foreach($user25 as $p) echo $p->pertanyaan2517 ?>;
var data18 = <?php foreach($user25 as $p) echo $p->pertanyaan2518 ?>;
var data19 = <?php foreach($user25 as $p) echo $p->pertanyaan2519 ?>;
var data20 = <?php foreach($user25 as $p) echo $p->pertanyaan2520 ?>;
var data21 = <?php foreach($user25 as $p) echo $p->pertanyaan2521 ?>;
var data22 = <?php foreach($user25 as $p) echo $p->pertanyaan2522 ?>;
var data23 = <?php foreach($user25 as $p) echo $p->pertanyaan2523 ?>;
var data24 = <?php foreach($user25 as $p) echo $p->pertanyaan2524 ?>;
var data25 = <?php foreach($user25 as $p) echo $p->pertanyaan2525 ?>;
var data26 = <?php foreach($user25 as $p) echo $p->pertanyaan2526 ?>;
var data27 = <?php foreach($user25 as $p) echo $p->pertanyaan2527 ?>;
	var barchart4 = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["p1", "p2", "p3", "p4", "p5", "p6", "p7","p8","p9","p10","p11","p12","p13","p14","p15","p16","p17","p18","p19","p20","p21","p22","p23","p24","p25","p26","p27"],
			datasets: [{
                label: 'Dataset 1',
				data: [data1, data2, data3, data4, data5, data6, data7, data8, data9,data10,data11, data12, data13, data14, data15, data16, data17, data18, data19, data20,data21, data22, data23, data24, data25, data26, data27],
				borderWidth: 1,
				yAxisID: "y-axis-1",
                backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'
				],
            } 
          ]
		},
		options: {
			responsive: true,
			title:{
				display:true,
				text:"Bar Chart Multi Axis"
			},
			tooltips: {
				mode: 'index',
				intersect: true
			},
			scales: {
				yAxes: [{
					type: "linear",
					display: true,
					position: "left",
					id: "y-axis-1",
				}, {
					type: "linear",
					display: false,
					position: "right",
					id: "y-axis-2",
					gridLines: {
						drawOnChartArea: false
					}
				}],
			}
		}
	});
    </script>

    
<script>

var ctx = document.getElementById("bc26");
var data1 = <?php foreach($user26 as $p) echo $p->pertanyaan261 ?>;
var data2 = <?php foreach($user26 as $p) echo $p->pertanyaan262 ?>;
var data3 = <?php foreach($user26 as $p) echo $p->pertanyaan263 ?>;
var data4 = <?php foreach($user26 as $p) echo $p->pertanyaan264 ?>;
var data5 = <?php foreach($user26 as $p) echo $p->pertanyaan265 ?>;
var data6 = <?php foreach($user26 as $p) echo $p->pertanyaan266 ?>;
var data7 = <?php foreach($user26 as $p) echo $p->pertanyaan267 ?>;
var data8 = <?php foreach($user26 as $p) echo $p->pertanyaan268 ?>;
var data9 = <?php foreach($user26 as $p) echo $p->pertanyaan269 ?>;
var data10 = <?php foreach($user26 as $p) echo $p->pertanyaan2610 ?>;
var data11 = <?php foreach($user26 as $p) echo $p->pertanyaan2611 ?>;
var data12 = <?php foreach($user26 as $p) echo $p->pertanyaan2612 ?>;
var data13 = <?php foreach($user26 as $p) echo $p->pertanyaan2613 ?>;
var data14 = <?php foreach($user26 as $p) echo $p->pertanyaan2614 ?>;
var data15 = <?php foreach($user26 as $p) echo $p->pertanyaan2615 ?>;
var data16 = <?php foreach($user26 as $p) echo $p->pertanyaan2616 ?>;
var data17 = <?php foreach($user26 as $p) echo $p->pertanyaan2617 ?>;
var data18 = <?php foreach($user26 as $p) echo $p->pertanyaan2618 ?>;
var data19 = <?php foreach($user26 as $p) echo $p->pertanyaan2619 ?>;
var data20 = <?php foreach($user26 as $p) echo $p->pertanyaan2620 ?>;
var data21 = <?php foreach($user26 as $p) echo $p->pertanyaan2621 ?>;
var data22 = <?php foreach($user26 as $p) echo $p->pertanyaan2622 ?>;
var data23 = <?php foreach($user26 as $p) echo $p->pertanyaan2623 ?>;
var data24 = <?php foreach($user26 as $p) echo $p->pertanyaan2624 ?>;
var data25 = <?php foreach($user26 as $p) echo $p->pertanyaan2625 ?>;
var data26 = <?php foreach($user26 as $p) echo $p->pertanyaan2626 ?>;
var data27 = <?php foreach($user26 as $p) echo $p->pertanyaan2627 ?>;
	var barchart4 = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["p1", "p2", "p3", "p4", "p5", "p6", "p7","p8","p9","p10","p11","p12","p13","p14","p15","p16","p17","p18","p19","p20","p21","p22","p23","p24","p25","p26","p27"],
			datasets: [{
                label: 'Dataset 1',
				data: [data1, data2, data3, data4, data5, data6, data7, data8, data9,data10,data11, data12, data13, data14, data15, data16, data17, data18, data19, data20,data21, data22, data23, data24, data25, data26, data27],
				borderWidth: 1,
				yAxisID: "y-axis-1",
                backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'
				],
            } 
          ]
		},
		options: {
			responsive: true,
			title:{
				display:true,
				text:"Bar Chart Multi Axis"
			},
			tooltips: {
				mode: 'index',
				intersect: true
			},
			scales: {
				yAxes: [{
					type: "linear",
					display: true,
					position: "left",
					id: "y-axis-1",
				}, {
					type: "linear",
					display: false,
					position: "right",
					id: "y-axis-2",
					gridLines: {
						drawOnChartArea: false
					}
				}],
			}
		}
	});
    </script>

    
<script>

var ctx = document.getElementById("bc29");
var data1 = <?php foreach($user29 as $p) echo $p->pertanyaan291 ?>;
var data2 = <?php foreach($user29 as $p) echo $p->pertanyaan292 ?>;
var data3 = <?php foreach($user29 as $p) echo $p->pertanyaan293 ?>;
var data4 = <?php foreach($user29 as $p) echo $p->pertanyaan294 ?>;
var data5 = <?php foreach($user29 as $p) echo $p->pertanyaan295 ?>;
var data6 = <?php foreach($user29 as $p) echo $p->pertanyaan296 ?>;
	var barchart4 = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["p1", "p2", "p3", "p4", "p5", "p6"],
			datasets: [{
                label: 'Dataset 1',
				data: [data1, data2, data3, data4, data5, data6],
				borderWidth: 1,
				yAxisID: "y-axis-1",
                backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
				],
            } 
          ]
		},
		options: {
			responsive: true,
			title:{
				display:true,
				text:"Bar Chart Multi Axis"
			},
			tooltips: {
				mode: 'index',
				intersect: true
			},
			scales: {
				yAxes: [{
					type: "linear",
					display: true,
					position: "left",
					id: "y-axis-1",
				}, {
					type: "linear",
					display: false,
					position: "right",
					id: "y-axis-2",
					gridLines: {
						drawOnChartArea: false
					}
				}],
			}
		}
	});
    </script>
    
</body>

</html>