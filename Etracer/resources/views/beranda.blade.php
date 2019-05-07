 <!DOCTYPE html><html lang="en">
  <head>
    <title>Beranda E-Tracer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"  rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style1.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/demo-files/demo.css')}}">

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
                <li class="active"><a href="{{ url('beranda')}}">BERANDA</a></li>
                <li><a href="{{ url('beritaUnlogin')}}">BERITA</a></li>
              </ul>
            </nav>
          </div>

          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="fas fa-bars "></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

  

    <div class="site-blocks-cover overlay" style="background-image: url(images/tangan.png);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            

            <h1 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">E-TRACER</h1>
            <h1 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">TEKNIK GEOFISIKA</h1>
            <h3 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">INSTITUT TEKNOLOGI SUMATERA</h3>

          </div>
        </div>
      </div>
    </div>  

    <div class="container">
      <div class="row row-centered no-gutters align-items-stretch overlap-section">

        <div class="col-md-8 col-centered">
          <div class="free-quote bg-dark h-100">
            <h2 class="my-4 heading  text-center">SIGN IN</h2>

            <form action="{{ url('/beranda/proses') }} " method="get">
              <div class="form-group">
                <label for="fq_name">EMAIL</label>
                <input type="text" class="form-control btn-block" id="email" name="email" placeholder="Masukkan Email" required>
              </div>
              <div class="form-group mb-4">
                <label for="fq_email">NIM</label>
                <input type="password" class="form-control btn-block" id="nim" name="nim" placeholder="Masukkan NIM" required>
              </div>
              <div class="form-group">
                <button class="btn btn-primary btn-lg text-white py-2 px-4 btn-block" type="submit" aria-pressed="true">LOGIN</a>
              </div>
            </form>
          </div>
        </div>

       	
        <div class="col-md-4">
          <div class="feature-3 pricing h-100 text-center">
            <div class="icon">
              <span class="fas fa-phone"></span>
            </div>
            <h2 class="my-4 heading">Servis</h2>
            <p>(021) 123456 Teknik Geofisika</p>
          </div>
        </div>
      </div>
  </div>

  <div class="site-section">
    <div class="container border border-warning ">
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
    <div class="site-section">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">QUOTES</h2>
          </div>
        </div>

        <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-3">
                <p>John Smith</p>
              </figure>
              <blockquote>
                <p>&ldquo;Cinta sejati, dari siapapun itu baik keluarga, kekasih, teman, atau orang-orang penting lainnya, seharusnya tidak membuat Anda menjadi terhambat untuk mengejar takdir Anda, mengejar mimpi-mimpi Anda.rdquo;</p>
              </blockquote>
            </div>
          </div>
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-3">
                <p>Christine Aguilar</p>
              </figure>
              <blockquote>
                <p>&ldquo;Rasa takut dalam kenyataannya lebih banyak menghambat kita dalam hidup. Rasa takut akan kegagalan, penolakan, hingga terjatuh dan terjatuh lagi hanya akan menjadi bentuk kegagalan yang bahkan tidak pernah kita coba untuk memulai perjuangan itu sendiri.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_4.jpg" alt="Image" class="img-fluid mb-3">
                <p>Robert Spears</p>
              </figure>
              <blockquote>
                <p>&ldquo;Tak ada hal semacam “terlalu tua” atau “terlalu muda” untuk mengejar impian. Tak ada pula hal yang benar atau hal yang salah, semuanya memiliki porsi masing-masing dalam kehidupan, dan yang terpenting, dalam perjuangan.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_5.jpg" alt="Image" class="img-fluid mb-3">
                <p>Bruce Rogers</p>
              </figure>
              <blockquote>
                <p>&ldquo;Ketakutan akan penderitaan lebih buruk daripada penderitaan itu sendiri… tidak ada hati yang menderita ketika berada dalam pencarian akan mimpi-mimpinya.&rdquo;</p>
              </blockquote>
            </div>
          </div>

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