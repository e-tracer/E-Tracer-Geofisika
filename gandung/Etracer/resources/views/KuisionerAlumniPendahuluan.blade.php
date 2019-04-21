<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kuisioner Pendahuluan E-Tracer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
   
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('css/refo/main1.css')}}">
    <link rel="stylesheet" href="{{asset('css/refo/util.css')}}">

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
    <link rel="stylesheet" href="{{asset('demo-files/demo.css')}}">
    
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
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">KUISIONER</h1>
            @foreach($pengguna as $p)
            <h3 class="text-white font-weight-light text-uppercase font-weight-bold">{{ $p->nama }}</h3>
            @endforeach
          </div>
        </div>
      </div>
    </div> 

  <div class="container">
    <div class="wrap-contact100">
      <form action="{{ url('/KuisionerPendahuluan/simpanPendahuluan') }}"  method="get" class="contact100-form validate-form">
         <h2>Kuesioner Pendahuluan</h2> 
         <br/>
         <p>* = wajib diisi</p>
         <div class="wrap-input100 validate-input " data-validate="Please Type Your Name">
          <span class="label-input300">Nama Lengkap *</span>
          <input class="input100" type="text" name="nama" placeholder="Enter Your Name" required>
        </div>
        
      <div class="wrap-input100 ">
          <span class="label-input300">Jenis Kelamin*</span>
          <div>
          <br>

            <tr>
              <td><input type="radio" name="jk" value="Laki-laki"></td> Laki-laki<br>
              <td><input type="radio" name="jk" value="Perempuan"></td> Perempuan<br>

            </tr>
        </div>  
        </div>


        <div class="wrap-input100 validate-input " data-validate="Input angkatan anda">
          <span class="label-input300">Angkatan *</span>
          <input class="input100" type="number" name="angkatan" placeholder="Angkatan" required>
        </div>

        <div class="wrap-input100 input100-select ">
          <span class="label-input300">Program Studi / Jurusan *</span>
          <div>
              <input value="Teknik Geofisika" name="prodi" />
            <div class="dropDownSelect2"></div>
          </div>
        </div>

        <div class="wrap-input100 validate-input " data-validate="Input IPK anda">
          <span class="label-input300">IPK</span>
          <p>contoh : 4.00</p>
          <input class="input100" type="number" name="ipk" placeholder="IPK" step="0.01" required>
        </div>


        <div class="wrap-input100 validate-input " data-validate="Input tahun masuk anda">
          <span class="label-input300">Tahun Masuk *</span>
          <input class="input100" type="number" name="TahunMasuk" placeholder="Tahun Masuk" required>
        </div>

        <div class="wrap-input100 validate-input " data-validate="Input tahun masuk anda">
          <span class="label-input300">Tahun Lulus *</span>
          <input class="input100" type="number" name="TahunKeluar" placeholder="Tahun Keluar" required>
        </div>


        <div class="wrap-input100 validate-input " data-validate="Input alamat anda">
          <span class="label-input300">Alamat *</span>
          <input class="input100" type="text" name="alamat" placeholder="Alamat" required>
        </div>

        <div class="wrap-input100 validate-input " data-validate="Input kota anda">
          <span class="label-input300">Kabupaten/Kota *</span>
          <input class="input100" type="text" name="kota" placeholder="Kota" required>
        </div>

        <div class="wrap-input100 validate-input " data-validate="Input provinsi anda">
          <span class="label-input300">Provinsi *</span>
          <input class="input100" type="text" name="Provinsi" placeholder="Provinsi" required>
        </div>
  
        <div class="wrap-input100 validate-input " data-validate="Input kode pos anda">
          <span class="label-input300">Kode pos *</span>
          <input class="input100" type="number" name="kodepos" placeholder="Kode Pos" required>
        </div>

        <div class="wrap-input100 validate-input " data-validate="Input nomer telpon anda/HP">
          <span class="label-input300">Nomor telpon/hp *</span>
          <p>contoh : 0831897xxx</p>
          <input class="input100" type="number" name="nomer" placeholder="Nomor telpon/HP" required>
        </div>


      <div class="wrap-input100 ">
          <span class="label-input300">Status saat ini*</span>
          <div>
          <br>

            <tr>
              <td><input type="radio" name="Status" value="Wiraswasta"></td> Wiraswasta<br>
              <td><input type="radio" name="Status" value="Bekerja dan wiraswasta"></td> Bekerja dan wiraswasta<br>
              <td><input type="radio" name="Status" value="Bekerja"></td> Bekerja<br>
              <td><input type="radio" name="Status" value="Tidak Bekerja"></td> Tidak Bekerja/Melanjutkan Kuliah<br>


            </tr>
        </div>  
      </div>

      <h3>Isi sesuai status yang dipilih</h3>
      <div class="contact100-form">

      <h5>1. Wiraswasta</h5>
      <div class="wrap-input100 validate-input" data-validate="Please Type Your Name">
          <span class="label-input300">Apakah anda pernah bekerja sebelumnya? </span>
          <input class="input100" type="text" name="pernahWir" placeholder="Answer Here....">
        </div>
        
        <div class="wrap-input100 validate-input" data-validate="Please Type Your Name">
          <span class="label-input300">Berapa lama Anda bekerja setelah lulus kuliah (dengan kata lain pekerjaan pertama) sebelum memutuskan untuk wirausaha? </span>
          <input class="input100" type="text" name="brplamaWir" placeholder="Answer Here....">
        </div>


        <div class="wrap-input100 validate-input" data-validate="Please Type Your Name">
          <span class="label-input300">Apa alasan anda memutuskan wirausaha? </span>
          <input class="input100" type="text" name="alasanWir" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 validate-input" data-validate="Please Type Your Name">
          <span class="label-input300">Jenis usaha apa yang Anda kembangkan saat ini? </span>
          <input class="input100" type="text" name="jenisWir" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 validate-input" data-validate="Please Type Your Name">
          <span class="label-input300">Berasal dari mana modal yang Anda gunakan untuk membangun usaha pertama kali? </span>
          <input class="input100" type="text" name="modalWir" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 validate-input" data-validate="Please Type Your Name">
          <span class="label-input300">Berapa omset rata-rata perbulan? </span>
          <input class="input100" type="text" name="omsetWir" placeholder="Answer Here....">
        </div>

      <h5>2. Bekerja dan wiraswasta</h5>
        <div class="wrap-input100 validate-input" data-validate="Please Type Your Name">
          <span class="label-input300">Jenis usaha apa yang Anda kembangkan saat ini? </span>
          <input class="input100" type="text" name="jenisBWir" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 validate-input" data-validate="Please Type Your Name">
          <span class="label-input300">Berasal dari mana modal yang Anda gunakan untuk membangun usaha pertama kali? </span>
          <input class="input100" type="text" name="modalBWir" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 validate-input" data-validate="Please Type Your Name">
          <span class="label-input300">Berapa omset rata-rata perbulan? </span>
          <input class="input100" type="text" name="omsetBWir" placeholder="Answer Here....">
        </div>
      <h5>3. Bekerja</h5>
        <div class="wrap-input100 validate-input" data-validate="Tolong jawab pertanyaan ini">
          <span class="label-input300">Apakah kategori perusahaan tempat Anda bekerja?</span>
          <input class="input100" type="text" name="kategoriBer" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 validate-input" data-validate="Tolong jawab pertanyaan ini">
          <span class="label-input300">Apakah pekerjaan Anda saat ini sesuai dengan bidang kuliah? </span>
          <input class="input100" type="text" name="sesuaiBer" placeholder="Answer Here....">
        </div>
      <h5>4. Tidak bekerja/melanjutkan kuliah</h5>
         <div class="wrap-input100 validate-input " data-validate="Tolong jawab pertanyaan ini">
          <span class="label-input300">Apakah Anda pernah bekerja sebelumnya?</span>
          <input class="input100" type="text" name="pernahSe" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 validate-input " data-validate="Tolong jawab pertanyaan ini">
          <span class="label-input300">Berapa lama Anda bekerja setela lulus kuliah(dengan kata lain pekerjaan pertama) sebelum memutuskan untuk berhenti atau tidak bekerja lagi?* </span>
          <input class="input100" type="text" name="brplamaSe" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 validate-input " data-validate="Tolong jawab pertanyaan ini">
          <span class="label-input300">Apa alasan Anda tidak bekerja (lagi)?  </span>
          <input class="input100" type="text" name="alasanSe" placeholder="Answer Here....">
        </div>
      </div>

      <h4>Pekerjaan Utama</h4>
        <div class="wrap-input100">
          <span class="label-input300">Nama Kantor</span>
          <input class="input100" type="text" name="namaKantor" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100">
          <span class="label-input300">Bidang Usaha </span>
          <input class="input100" type="text" name="bidangUsaha" placeholder="Answer Here....">
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
          <span class="label-input300">Email Kantor  </span>
          <input class="input100" type="email" name="emailKantor" placeholder="Answer Here....">
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
          <input class="input100" type="text" name="namaKantor2" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100  ">
          <span class="label-input300">Bidang Usaha  </span>
          <input class="input100" type="text" name="bidangUsaha2" placeholder="Answer Here....">
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
          <span class="label-input300">Email Kantor  </span>
          <input class="input100" type="email" name="emailKantor2" placeholder="Answer Here....">
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
          <input class="input100" type="text" name="namaKantor3" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">Bidang Usaha     </span>
          <input class="input100" type="text" name="bidangUsaha3" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">Posisi atau Jabatan     </span>
          <input class="input100" type="text" name="posisi3" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">Deskripsikan alasan pindah kerja     </span>
          <input class="input100" type="text" name="alasanPindah" placeholder="Answer Here....">
        </div>


        <h4>Pekerjaan Ideal</h4>
        <div class="wrap-input100 ">
          <span class="label-input300">Komentar Positif anda terhadap pekerjaan Anda saat ini    </span>
          <input class="input100" type="text" name="komenPositif" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">Komentar Negatif Anda terhadap pekerjaan Anda saat ini     </span>
          <input class="input100" type="text" name="komenNegatif" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">Gambaran pekerjaan ideal yang Anda inginkan     </span>
          <input class="input100" type="text" name="gambaran" placeholder="Answer Here....">
        </div>
       <div class="container-contact100-form-btn">
          <button class="btn btn-secondary btn-lg contact100-form" >
            <span>
              Next
              <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
            </span>
          </button>
        </div>
      </form>
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