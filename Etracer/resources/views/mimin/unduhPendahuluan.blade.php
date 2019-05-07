<!DOCTYPE HTML>
<html>
<head>
    <title>Kuisioner Pendahuluan</title>
        <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HOME | Admin</title>
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
</head>
<body>
	<div class="basic-form-area mg-b-15">
                <div class="container-fluid">
	                         <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset mg-t-30">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Tabel Berita</h1>
                                        <div class="sparkline8-outline-icon">
                                            <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline8-graph">
                                    <div class="static-table-list">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>nama</th>
                                                    <th>Judul</th>
                                                    <th>Tanggal</th>
                                                    <th>Penulis</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                <tr>
                                                    <td>$p->id_berita</td>
                                                    <td>$p->judul</td>
                                                    <td>$p->tanggal</td>
                                                    <td>$p->nama</td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                         </div>

                     </div>
                 </div>
</body>
</html>