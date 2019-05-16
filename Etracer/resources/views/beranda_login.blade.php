 <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Branda E-Tracer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"  rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('demo-files/demo.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-3" role="banner">

      <div class="container">
        <div class="row align-items-center">          
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <img src="images/logo.png" alt="Image" class="img-fluid float-left " width="100" height="100">
              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="{{ url('berandaLogin')}}">BERANDA</a></li>
                <li><a href="{{ url('berita')}}">BERITA</a></li>
                <li><a href="{{ url('buatBerita')}}">BUAT BERITA</a></li>                
                <li><a href="{{ url('profile')}}">PROFIL</a></li>
                <li><a href="{{ url('beranda')}}">KELUAR</a></li>
              </ul>
            </nav>
          </div>

          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="fas fa-bars"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

  

     <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/tangan.png);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <div class="testimonial">
              <figure class="mb-4">
                @foreach ($dataPengguna as $p)
                <img src="{{ url('uploadGambar')}}/{{ $p->file_gambar2 }}" alt="Image" class="img-fluid mb-3">
                    <p class="text-white">{{ $p->nama }}</p>
                <div class="meta mb-4 text-white font-weight-light">Angkatan {{ $p->angkatan }} <span class="mx-2">&bullet;</span> Tahun Lulus {{ $p->tahun_keluar }}</div>
                @endforeach
                </figure>
              </div>
  
           </div>
        </div>
      </div>
    </div> 


  <div class="site-section">
    <div class="container border border-warning">
      <div class="text-center">
          <h1>Visi</h1>
          <p>“Menjadi penyelenggara pendidikan, pengembangan serta penerapan Teknik Geofisika yang unggul pada tingkat nasional, berdaya saing global, berwawasan lingkungan dan memberdayakan potensi kebumian di wilayah Sumatera dan sekitarnya.”</p>
          <br>
          <h1>Misi</h1>
          <p>Mengembangkan program pendidikan teknik geofisika yang unggul, berdaya bersaing serta mampu membina kemampuan berpikir kritis, kreatif, cerdas dan bertanggung jawab.</p>
          <p>Melaksanakan kegiatan penelitian dan pengabdian kepada masyarakat untuk mendorong peningkatan IPTEK yang menunjang proses pembelajaran melalui penerapan ilmu teknik geofisika yang inovatif, berkualitas, dan tanggap terhadap perkembangan dan tantangan lokal maupun global.</p>
          <p>Memberikan kontribusi nyata terhadap penciptaan, diseminasi IPTEK serta penerapannya bagi peningkatan kesejahteraan masyarakat dan pengembangan sumber daya kebumian wilayah.</p>
          <p>Turut andil dalam pemberdayaan potensi kebumian secara optimal melalui keunggulan dalam pendidikan, penelitian, dan pengabdian kepada masyarakat.</p>
          <p>Menjalin kerja sama dengan pihak pemerintah, perguruan tinggi dalam dan luar negeri, industri, organisasi profesi, serta masyarakat dalam rangka mendukung penyelenggaraan Tridharma Perguruan Tinggi.</p>
      </div>
          </div>
  </div>

  <div class="site-section">
    <div class="site-blocks-cover overlay inner-page-cover site-section" style="background-image: url(images/kuliahLapangan.jpg); background-attachment: fixed;">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="400">            
          </div>
        </div>
      </div>
    </div>  
  </div>

    <div class="row pt-5 mt-5 text-center ">
      <div class="col-md-12">
        <p>
           Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by Kelompok kame                        
        </p>
       </div>
    </div>
  </div>

  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('js/jquery-ui.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('js/aos.js')}}"></script>

  <script src="{{asset('js/main.js')}}"></script>
    
  </body>
</html>