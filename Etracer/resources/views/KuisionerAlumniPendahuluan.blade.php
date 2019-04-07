<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kuisioner Pendahuluan E-Tracer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.8.1/css/all.css')}}" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700')}}"> 
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('css/refo/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/refo/util.css')}}">

    <link rel="stylesheet" type="{{asset('text/css" href="fonts/refo/fonts/font-awesome-4.7.0/css/font-awesome.css')}}">

    <link rel="stylesheet" type="{{asset('text/css" href="fonts/refo/fonts/iconic/css/material-design-iconic-font.css')}}">

    <link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>

    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/noui/nouislider.min.css')}}">

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
          <img src="images/logo.png" alt="Image" class="img-fluid" width="100" height="100">          
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li><a href="{{ url('beranda')}}">BERANDA</a></li>
                <li><a href="{{ url('berita')}}">BERITA</a></li>
                <li><a href="{{ url('buatBerita')}}">BUAT BERITA</a></li>
                <li class="active"><a href="{{ url('KuisionerPendahuluan')}}">KUISIONER</a></li>
                <li><a href=" ">KONTAK</a></li>
                <li><a href=" ">TENTANG</a></li>
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
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">KUISIONER ALUMNI</h1>
            <h3 class="text-white font-weight-light text-uppercase font-weight-bold">Kuisioner Pendahuluan</h3>
          </div>
        </div>
      </div>
    </div> 

  <div class="container">
    <div class="wrap-contact100">
      <form class="contact100-form validate-form">
         <h2>Kuesioner Pendahuluan</h2> 
         <div class="wrap-input100 validate-input " data-validate="Please Type Your Name">
          <span class="label-input300">Nama Lengkap *</span>
          <input class="input100" type="text" name="name" placeholder="Enter Your Name">
        </div>
        
      <div class="wrap-input100 ">
          <span class="label-input300">Jenis Kelamin</span>
          <div>
          <br>

            <tr>
              <td><input type="radio" name="Gender" value="1"></td> Laki-laki<br>
              <td><input type="radio" name="Gender" value="2"></td> Perempuan<br>

            </tr>
        </div>  
        </div>


        <div class="wrap-input100 validate-input " data-validate="Input angkatan anda">
          <span class="label-input300">Angkatan *</span>
          <input class="input100" type="number" name="angkatan" placeholder="Angkatan">
        </div>

        <div class="wrap-input100 input100-select ">
          <span class="label-input300">Program Studi / Jurusan *</span>
          <div>
            <select class="js-select2" name="Prodi">
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


      <div class="wrap-input100 ">
          <span class="label-input300">Status saat ini</span>
          <div>
          <br>

            <tr>
              <td><input type="radio" name="Status" value="1"></td> Wiraswasta<br>
              <td><input type="radio" name="Status" value="2"></td> Bekerja dan wiraswasta<br>
              <td><input type="radio" name="Status" value="3"></td> Bekerja<br>
              <td><input type="radio" name="Status" value="4"></td> Tidak Bekerja/Melanjutkan Kuliah<br>


            </tr>
        </div>  
      </div>
      <h5>Wiraswasta</h5>
      <div class="wrap-input100 validate-input" data-validate="Please Type Your Name">
          <span class="label-input300">Apakah anda pernah bekerja sebelumnya? *</span>
          <input class="input100" type="text" name="pernah" placeholder="Answer Here....">
        </div>
        
        <div class="wrap-input100 validate-input" data-validate="Please Type Your Name">
          <span class="label-input300">Berapa lama Anda bekerja setelah lulus kuliah (dengan kata lain pekerjaan pertama) sebelum memutuskan untuk wirausaha? *</span>
          <input class="input100" type="text" name="brplama" placeholder="Answer Here....">
        </div>


        <div class="wrap-input100 validate-input" data-validate="Please Type Your Name">
          <span class="label-input300">Apa alasan anda memutuskan wirausaha? *</span>
          <input class="input100" type="text" name="alasan" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 validate-input" data-validate="Please Type Your Name">
          <span class="label-input300">Jenis usaha apa yang Anda kembangkan saat ini? *</span>
          <input class="input100" type="text" name="jenis" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 validate-input" data-validate="Please Type Your Name">
          <span class="label-input300">Berasal dari mana modal yang Anda gunakan untuk membangun usaha pertama kali? *</span>
          <input class="input100" type="text" name="modal" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 validate-input" data-validate="Please Type Your Name">
          <span class="label-input300">Berapa omset rata-rata perbulan? *</span>
          <input class="input100" type="text" name="omset" placeholder="Answer Here....">
        </div>

      <h5>Bekerja dan wiraswasta</h5>
        <div class="wrap-input100 validate-input" data-validate="Please Type Your Name">
          <span class="label-input300">Jenis usaha apa yang Anda kembangkan saat ini? *</span>
          <input class="input100" type="text" name="jenis" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 validate-input" data-validate="Please Type Your Name">
          <span class="label-input300">Berasal dari mana modal yang Anda gunakan untuk membangun usaha pertama kali? *</span>
          <input class="input100" type="text" name="modal" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 validate-input" data-validate="Please Type Your Name">
          <span class="label-input300">Berapa omset rata-rata perbulan? *</span>
          <input class="input100" type="text" name="omset" placeholder="Answer Here....">
        </div>
      <h5>Bekerja</h5>
        <div class="wrap-input100 validate-input" data-validate="Tolong jawab pertanyaan ini">
          <span class="label-input300">Apakah kategori perusahaan tempat Anda bekerja?*</span>
          <input class="input100" type="text" name="kategori" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 validate-input" data-validate="Tolong jawab pertanyaan ini">
          <span class="label-input300">Apakah pekerjaan Anda saat ini sesuai dengan bidang kuliah?* </span>
          <input class="input100" type="text" name="sesuai" placeholder="Answer Here....">
        </div>
      <h5>Tidak bekerja/melanjutkan kuliah</h5>
         <div class="wrap-input100 validate-input " data-validate="Tolong jawab pertanyaan ini">
          <span class="label-input300">Apakah Anda pernah bekerja sebelumnya?*</span>
          <input class="input100" type="text" name="pernah" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 validate-input " data-validate="Tolong jawab pertanyaan ini">
          <span class="label-input300">Berapa lama Anda bekerja setela lulus kuliah(dengan kata lain pekerjaan pertama) sebelum memutuskan untuk berhenti atau tidak bekerja lagi?* </span>
          <input class="input100" type="text" name="brplama" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 validate-input " data-validate="Tolong jawab pertanyaan ini">
          <span class="label-input300">Apa alasan Anda tidak bekerja (lagi)? * </span>
          <input class="input100" type="text" name="alasan" placeholder="Answer Here....">
        </div>
      <h4>Pekerjaan Utama</h4>
        <div class="wrap-input100">
          <span class="label-input300">Nama Kantor</span>
          <input class="input100" type="text" name="nama-kantor" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100">
          <span class="label-input300">Bidang Usaha </span>
          <input class="input100" type="text" name="bidangusha" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100">
          <span class="label-input300">Posisi atau Jabatan </span>
          <input class="input100" type="text" name="posisi" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100">
          <span class="label-input300">Jenis Pekerjaan </span>
          <input class="input100" type="text" name="jenispekerjaan" placeholder="Answer Here....">
        </div>                
        <div class="wrap-input100 ">
          <span class="label-input300">Sejak </span>
          <input class="input100" type="text" name="sejak" placeholder="Answer Here....">
        </div>
        <div class="wrap-input100 ">
          <span class="label-input300">Telpon Kantor </span>
          <input class="input100" type="number" name="nokantor" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">Website Kantor  </span>
          <input class="input100" type="text" name="webkantor" placeholder="Answer Here....">
        </div>
        <div class="wrap-input100 ">
          <span class="label-input300">Alamat Kantor  </span>
          <input class="input100" type="text" name="alamatkantor" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">Perkiraan penghasilan per-bulan  </span>
          <input class="input100" type="text" name="penghasilan" placeholder="Answer Here....">
        </div>        

        <h4>Pekerjaan Lain (Jika ada, termasuk pekerjaan paruh waktu)</h4>         
        <div class="wrap-input100 ">
          <span class="label-input300">Nama Kantor </span>
          <input class="input100" type="text" name="nama-kantor2" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100  ">
          <span class="label-input300">Bidang Usaha  </span>
          <input class="input100" type="text" name="bidangusha2" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100  ">
          <span class="label-input300">Posisi atau Jabatan </span>
          <input class="input100" type="text" name="posisi2" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">Jenis Pekerjaan  </span>
          <input class="input100" type="text" name="jenispekerjaan2" placeholder="Answer Here....">
        </div>                
        <div class="wrap-input100  ">
          <span class="label-input300">Sejak  </span>
          <input class="input100" type="text" name="sejak2" placeholder="Answer Here....">
        </div>
        <div class="wrap-input100 ">
          <span class="label-input300">Telpon Kantor  </span>
          <input class="input100" type="number" name="nokantor2" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">Website Kantor  </span>
          <input class="input100" type="text" name="webkantor2" placeholder="Answer Here....">
        </div>
        <div class="wrap-input100 ">
          <span class="label-input300">Alamat Kantor  </span>
          <input class="input100" type="text" name="alamatkantor2" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">Perkiraan penghasilan per-bulan  </span>
          <input class="input100" type="text" name="penghasilan2" placeholder="Answer Here....">
        </div>        


        <h4>Pekerjaan Sebelumnya(Jika ada)</h4>
        <div class="wrap-input100 ">
          <span class="label-input300">Nama Kantor    </span>
          <input class="input100" type="text" name="nama-kantor3" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">Bidang Usaha     </span>
          <input class="input100" type="text" name="bidangusha3" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">Posisi atau Jabatan     </span>
          <input class="input100" type="text" name="posisi3" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">Deskripsikan alasan pindah kerja     </span>
          <input class="input100" type="text" name="alasanpindah" placeholder="Answer Here....">
        </div>


        <h4>Pekerjaan Ideal</h4>
        <div class="wrap-input100 ">
          <span class="label-input300">Komentar Positif anda terhadap pekerjaan Anda saat ini    </span>
          <input class="input100" type="text" name="nama-kantor3" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">Komentar Negatif Anda terhadap pekerjaan Anda saat ini     </span>
          <input class="input100" type="text" name="bidangusha3" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">Gambaran pekerjaan ideal yang Anda inginkan     </span>
          <input class="input100" type="text" name="posisi3" placeholder="Answer Here....">
        </div>
       <div class="container-contact100-form-btn">
          <a href="{{ url('KuisionerUtama')}}" class="btn btn-secondary btn-lg contact100-form" >
            <span>
              Next
              <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
            </span>
          </a>
        </div>
      </form>
    
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by Kame</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
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