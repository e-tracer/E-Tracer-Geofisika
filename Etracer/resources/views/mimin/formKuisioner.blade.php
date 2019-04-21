<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Element Form | Admin</title>
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
    <script src="{{asset('deded/js/vendor/modernizr-2.8.3.min.js')}}"></script></head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="deded/img/Logo-TG.jpg" alt="" />
                    </a>
                    <h3>Dediepow</h3>
                    <p>Admin</p>
                    <strong>TG-I</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="{{url('admin')}}" class="dropdown-item">Admin Home</a>
                            </div>
                        </li>
                        
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-bar-chart-o"></i> <span class="mini-dn">Charts</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown  animated flipInX">
                                <a href="{{url('barCharts')}}" class="dropdown-item">Bar Charts</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-table"></i> <span class="mini-dn">User</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="{{url('adminPengaturanUser')}}" class="dropdown-item">Pengaturan User</a>
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
                                <div class="header-top-menu">
                                    <ul class="nav navbar-nav mai-top-nav">
                                        <li class="nav-item"><a href="#" class="nav-link">Admin Form Element</a>
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
                                            <li><span class="bread-blod">Form Element</span>
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
            <!-- Basic Form Start -->
            <div class="basic-form-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list basic-res-b-30 shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Kuesioner Pendahuluan</h1>   
                                    </div>
                                    <div class="static-table-list">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Angkatan</th>
                                                    <th>Prodi</th>
                                                    <th>IPK</th>
                                                    <th>Tahun Masuk</th>
                                                    <th>Alamat</th>
                                                    <th>Kota</th>
                                                    <th>Provinsi</th>
                                                    <th>Kode Pos</th>
                                                    <th>Nomer HP</th>
                                                    

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($formPendahuluan as $p)
                                                <tr>
                                                    <td>{{$p->nama}}</td>
                                                    <td>{{$p->jenis_kel}}</td>
                                                    <td>{{$p->angkatan}}</td>
                                                    <td>{{$p->prodi}}</td>
                                                    <td>{{$p->ipk}}</td>
                                                    <td>{{$p->tahun_masuk}}</td>
                                                    <td>{{$p->almt}}</td>
                                                    <td>{{$p->almt_kota}}</td>
                                                    <td>{{$p->almt_prov}}</td>
                                                    <td>{{$p->almt_kodepos}}</td>
                                                    <td>{{$p->telp}}</td>
                                                    <td><a href="downloadKuisPendahuluan"><i class="fa fa-download" style= font-size:24px></i></a></td>
                                                </tr>
                    
                                                @endforeach
                                                  
                                            </tbody>
                                            
                                        </table>
                                    </div>        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>

            <div class="basic-form-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list basic-res-b-30 shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Kuesioner Pekerjaan Utama</h1>   
                                    </div>
                                    <div class="static-table-list">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nama Kantor</th>
                                                    <th>Bidang Usaha</th>
                                                    <th>Jabatan</th>
                                                    <th>Jenis Pekerjaan</th>
                                                    <th>Bekerja Sejak</th>
                                                    <th>Nomer Kantor</th>
                                                    <th>Web Kantor</th>
                                                    <th>Alamat KAntor</th>
                                                    <th>Penghasilan</th>
                                                    <td>
                                                    <a href="#"><i class="fa fa-download" style= font-size:24px></i></a>
                                                    </td>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($pekerjaan as $p)
                                                <tr>
                                                    <td>{{$p->nama_kantor}}</td>
                                                    <td>{{$p->bidang_usaha}}</td>
                                                    <td>{{$p->jabatan}}</td>
                                                    <td>{{$p->jenis_pekerjaan}}</td>
                                                    <td>{{$p->sejak}}</td>
                                                    <td>{{$p->telp_kantor}}</td>
                                                    <td>{{$p->web_kantor}}</td>
                                                    <td>{{$p->alamat_kantor}}</td>
                                                    <td>{{$p->penghasilan}}</td>

                                                </tr>
                                                @endforeach
 

                                                
                                            </tbody>
                                        </table>
                                    </div>        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>


             <div class="basic-form-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list basic-res-b-30 shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Kuesioner Pekerjaan Lain</h1>   
                                    </div>
                                    <div class="static-table-list">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nama Kantor</th>
                                                    <th>Bidang Usaha</th>
                                                    <th>Jabatan</th>
                                                    <th>Jenis Pekerjaan</th>
                                                    <th>Bekerja Sejak</th>
                                                    <th>Nomer Kantor</th>
                                                    <th>Email Kantor</th>
                                                    <th>Alamat KAntor</th>
                                                    <th>Penghasilan</th>
                                                    <td>
                                                    <a href="#"><i class="fa fa-download" style= font-size:24px></i></a>
                                                    </td>


                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($pekerjaanLain as $p)
                                                <tr>
                                                    <td>{{$p->nama_kantor}}</td>
                                                    <td>{{$p->bidang_usaha}}</td>
                                                    <td>{{$p->jabatan}}</td>
                                                    <td>{{$p->jenis_pekerjaan}}</td>
                                                    <td>{{$p->sejak}}</td>
                                                    <td>{{$p->telp_kantor}}</td>
                                                    <td>{{$p->web_kantor}}</td>
                                                    <td>{{$p->alamat_kantor}}</td>
                                                    <td>{{$p->penghasilan}}</td>
                                                    
                                                </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>

             <div class="basic-form-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list basic-res-b-30 shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Kuisioner Pekerjaan Sebelumnya</h1>   
                                    </div>
                                    <div class="static-table-list">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                    <th>Nama Kantor</th>
                                                    <th>Bidang Usaha</th>
                                                    <th>Jabatan</th>
                                                    <th>Jenis Pekerjaan</th>
                                                    <th>Deskripsi</th>
                                                    <td>
                                                    <a href="#"><i class="fa fa-download" style= font-size:24px></i></a>
                                                    </td>


                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($pekerjaanSebelum as $p)
                                                <tr>
                                                    <td>{{$p->nama_kantor}}</td>
                                                    <td>{{$p->bidang_usaha}}</td>
                                                    <td>{{$p->jabatan}}</td>
                                                    <td>{{$p->deskripsi}}</td>
                                                </tr>
                                                @endforeach
 
                                            </tbody>
                                        </table>
                                    </div>        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>

             <div class="basic-form-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list basic-res-b-30 shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Kuesioner Pekerjaan Wiraswasta</h1>   
                                    </div>
                                    <div class="static-table-list">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Usaha</th>
                                                    <th>Asal Modal</th>
                                                    <th>Omset</th>
                                                    <td>
                                                    <a href="#"><i class="fa fa-download" style= font-size:24px></i></a>
                                                    </td> 
                                               </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($kerjaWiraswasta as $p)
                                                <tr>
                                                    <td>{{$p->jenis}}</td>
                                                    <td>{{$p->asal_modal}}</td>
                                                    <td>{{$p->omset}}</td>

                                                </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>

            <!-- Basic Form End-->

        </div>
    </div>
    <!-- Footer Start-->
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &#169; 2018 Colorlib All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
    <!-- Chat Box Start-->
    <div class="chat-list-wrap">
        <div class="chat-list-adminpro">
            <div class="chat-button">
                <span data-toggle="collapse" data-target="#chat" class="chat-icon-link"><i class="fa fa-comments"></i></span>
            </div>
            <div id="chat" class="collapse chat-box-wrap shadow-reset animated zoomInLeft">
                <div class="chat-main-list">
                    <div class="chat-heading">
                        <h2>Messanger</h2>
                    </div>
                    <div class="chat-content chat-scrollbar">
                        <div class="author-chat">
                            <h3>Monica <span class="chat-date">10:15 am</span></h3>
                            <p>Hi, what you are doing and where are you gay?</p>
                        </div>
                        <div class="client-chat">
                            <h3>Mamun <span class="chat-date">10:10 am</span></h3>
                            <p>Now working in graphic design with coding and you?</p>
                        </div>
                        <div class="author-chat">
                            <h3>Monica <span class="chat-date">10:05 am</span></h3>
                            <p>Practice in programming</p>
                        </div>
                        <div class="client-chat">
                            <h3>Mamun <span class="chat-date">10:02 am</span></h3>
                            <p>That's good man! carry on...</p>
                        </div>
                    </div>
                    <div class="chat-send">
                        <input type="text" placeholder="Type..." />
                        <span><button type="submit">Send</button></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Chat Box End-->
    <!-- jquery
		============================================ -->
    <script src="{{asset('deded/js/vendor/jquery-1.11.3.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset('deded/js/bootstrap.min.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{asset('deded/js/jquery.meanmenu.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('deded/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{asset('deded/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('deded/js/jquery.scrollUp.min.js')}}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{asset('deded/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('deded/js/counterup/waypoints.min.js')}}"></script>
    <!-- modal JS
		============================================ -->
    <script src="{{asset('deded/js/modal-active.js')}}"></script>
    <!-- icheck JS
		============================================ -->
    <script src="{{asset('deded/js/icheck/icheck.min.js')}}"></script>
    <script src="{{asset('deded/js/icheck/icheck-active.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('deded/js/main.js')}}"></script>
</body>

</html>