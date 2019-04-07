<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('fonts/icomoon/style1.css')}}"> 

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">

   <link rel="stylesheet" href="f{{asset('onts/flaticon/font/flaticon.css')}}"> 


    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>

    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/noui/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/refo/main1.css')}}">

    <link rel="stylesheet" href="{{asset('css/refo/util.css')}}">

    
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
          <img src="images/logo.png" alt="Image" class="img-fluid" width="100" height="100">
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li><a href="{{ url('berandaLogin')}}">BERANDA</a></li>
                <li><a href="{{ url('berita')}}">BERITA</a></li>
                <li><a href="{{ url('buatBerita')}}">BUAT BERITA</a></li>                
                <li><a href="{{ url('KuisionerPendahuluan')}}">KUISIONER</a></li>
                <li class="active"><a href="{{ url('profile')}}">PROFIL</a></li>
                <li><a href="">KONTAK</a></li>
                <li><a href="">TENTANG</a></li>
                <li><a href="{{ url('beranda')}}">KELUAR</a></li>              
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

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
                <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-3" height="200%" width="200%" >
                <p class="text-white" style="font-size: 36px; font-family: Poppins">Letfi Wahyu</p>
                <div class="meta mb-4 text-white font-weight-light">Angkatan 2016 <span class="mx-2">&bullet;</span> Tahun lulus 2020</div>
                </figure>
              </div>
  
           </div>
        </div>
      </div>
    </div> 

    <div class="container">
       <div class="wrap-contact100">

      <form class="contact100-form validate-form">
        <div class="wrap-input100 validate-input " data-validate="Please Type Your Name">
          <span class="label-input300">Nama Lengkap *</span>
          <input class="input100" type="text" name="name" placeholder="Enter Your Name">
        </div>
        
        <div class="wrap-input100 input100-select ">
          <span class="label-input300">Jenis Kelamin *</span>
          <div>
            <select class="js-select2" name="Jenis Kelamin">
              <option>Laki-laki</option>
              <option>Perempuan</option>
            </select>
            <div class="dropDownSelect2"></div>
          </div>
        </div>


        <div class="wrap-input100 validate-input " data-validate="Input angkatan anda">
          <span class="label-input300">Angkatan *</span>
          <input class="input100" type="number" name="angkatan" placeholder="Angkatan">
        </div>

        <div class="wrap-input100 input100-select ">
          <span class="label-input300">Program Studi / Jurusan *</span>
          <div>
            <select class="js-select2" name="Jenis Kelamin">
              <option>Teknik Geofisika</option>
            </select>
            <div class="dropDownSelect2"></div>
          </div>
        </div>

        <div class="wrap-input100 validate-input " data-validate="Input IPK anda">
          <span class="label-input300">IPK *</span>
          <input class="input100" type="number" name="IPK" placeholder="IPK">
        </div>


        <div class="wrap-input100 validate-input " data-validate="Input tahun masuk anda">
          <span class="label-input300">Tahun Masuk *</span>
          <input class="input100" type="number" name="TahunMasuk" placeholder="Tahun Masuk">
        </div>

        <div class="wrap-input100 validate-input " data-validate="Input alamat anda">
          <span class="label-input300">Alamat *</span>
          <input class="input100" type="text" name="alamat" placeholder="Alamat">
        </div>

        <div class="wrap-input100 validate-input " data-validate="Input kota anda">
          <span class="label-input300">Kota *</span>
          <input class="input100" type="text" name="kota" placeholder="Kota">
        </div>

        <div class="wrap-input100 validate-input " data-validate="Input provinsi anda">
          <span class="label-input300">Provinsi *</span>
          <input class="input100" type="text" name="Provinsi" placeholder="Provinsi">
        </div>
  
        <div class="wrap-input100 validate-input " data-validate="Input kode pos anda">
          <span class="label-input300">Kode pos *</span>
          <input class="input100" type="number" name="kodepos" placeholder="Kode Pos">
        </div>

        <div class="wrap-input100 validate-input " data-validate="Input nomer telpon anda/HP">
          <span class="label-input300">Nomor telpon/hp *</span>
          <input class="input100" type="number" name="nomer" placeholder="Nomor telpon/HP">
        </div>
        <div class="wrap-input100 input100-select ">
          <span class="label-input300">Status saat ini *</span>
          <div>
            <select class="js-select2" name="service">
              <option>Wiraswasta</option>
              <option>Bekerja dan Wiraswasta</option>
              <option>Bekerja</option>
              <option>Tidak bekerja/Melanjutkan Kuliah</option>
            </select>
            <div class="dropDownSelect2"></div>
          </div>
        </div>
        <div class="container-contact100-form-btn">
          <button class="contact100-form-btn">
            <span>
              Update
              <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
            </span>
          </button>
        </div>
      </form>
    </div>
  </div>

    <div class="row pt-5 mt-5 text-center">
      <div class="col-md-12">
        <div class="border-top pt-5">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by Kame</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
       </div>
          
      </div>
    </div>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
