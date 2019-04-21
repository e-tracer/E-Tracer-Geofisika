<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kuisioner Perusahaan E-Tracer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700')}}"> 
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('demo-files/demo.css')}}">
    <link rel="stylesheet" href="{{asset('css/refo/main1.css')}}">
    <link rel="stylesheet" href="{{asset('css/refo/util.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('fonts/refo/fonts/font-awesome-4.7.0/css/font-awesome.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('fonts/refo/fonts/iconic/css/material-design-iconic-font.css')}}">

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
           <nav class="site-navigation position-relative text-right" role="navigation">
              <img src="images/logo.png" alt="Image" class="img-fluid float-left " width="100" height="100">
            </nav>
        </div>
      </div>

          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="fas fa-bars"></span></a></div>
      
    </header>

    


    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/tangan.png);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">KUISIONER PERUSAHAAN</h1>
            </div>
        </div>
      </div>
    </div> 

    <div class="container">
    <div class="wrap-contact100">
      <form class="contact100-form validate-form" action="{{ url('/kuisionerPerusahaan/simpanPerusahaan')}}" method="GET">
        <p align="justify">Kuesioner ini dibuat untuk tujuan menilai dan mengidentifikasi kemampuan alumni S1 Program Studi Teknik Geofisika di lingkungan dunia kerja. Diharapkan informasi yang diperoleh dapat menjadi masukan penting untuk mengevaluasi dan mengembangkan kurikulum pendidikan pada masa mendatang.Kami berharap Bapak/Ibu sebagai pengguna tenaga alumni S1 Program Studi Teknik Geofisika Institut Teknologi Sumatera bersedia meluangkan waktu menjawab pertanyaan-pertanyaan berikut ini. Kuesioner yang telah diisi dapat dikirimkan kembali. Terima kasih.
        </p>
      <div>
        <br>
        <span class="label-input300"><b><h6>A.Data Responden (User Alumni)</h6></b></span>
        <br>
      </div>
          <div class="wrap-input100 " data-validate="Please Enter Your Name">
          <span class="label-input300">Nama Lengkap *</span>
          <input class="input100" type="text" name="nama" placeholder="Nama lengkap" required>
        </div>

        <div class="wrap-input100 " data-validate="Bidang Pekerjaan">
          <span class="label-input300">Bidang Pekerjaan *</span>
          <input class="input100" type="text" name="bidang" placeholder="Pendidikan/pemerintahan/konsultasi/dll..."  required>
        </div>

        <div class="wrap-input100 " data-validate="Posisi Pekerjaan">
          <span class="label-input300">Posisi *</span>
          <input class="input100" type="text" name="posisi" placeholder="Staff Divisi/Direktur/Karyawan/Manajer/dll..." required>
        </div>

        <div>
          <br>
          <span class="label-input300"><b><h6>B. Objek Penilaian terhadap Alumni</b></h6></span>
          <br>
        </div>

        <div class="wrap-input100">
            <span class="label-input300">Objek Penilaian</span>
            <textarea class="input100" name="objek" placeholder="Answer Here..." required="Harus diisi"></textarea>
          </div>

          <div>
          <br>
          <span class="label-input300"><b><h6>C. Penilaian terhadap kemampuan lulusan mahasiswa Program Studi Teknik Geofisika Institut Teknologi Sumatera</b></h6></span>
        </div>

        <div>
          <br>
          <table border="2" width="800px" align="center">
            <tr>
              <th width="50" rowspan="2" align="text-center" > <center>No</center></th>
              <th width="400" rowspan="2"><center>Jenis Kemampuan</center></th>
              <th width="200" colspan="4"><center>Tanggapan Pihak Pengguna</center></th>
            </tr>
            <tr align="text-center">
              <th width="80"><center>Sangat Baik</center></th>
              <th width="50"><center>Baik</center></th>
              <th width="50"><center>Cukup</center></th>
              <th width="50"><center>Kurang</center></th>
            </tr>
            <tr align="center">
              <td> 1 </td>
              <td align="left"> Integritas (etika dan moral) </td>
              <td><input type="radio" name="Tanggapan1" value="Sangat Baik"></td>
              <td><input type="radio" name="Tanggapan1" value="Baik"></td>
              <td><input type="radio" name="Tanggapan1" value="Cukup"></td>
              <td><input type="radio" name="Tanggapan1" value="Kurang"></td>
            </tr>
            <tr align="center">
              <td> 2 </td>
              <td align="left"> Keahlian berdasarkan bidang ilmu (profesionalisme) </td>
              <td><input type="radio" name="Tanggapan2" value="Sangat Baik"></td>
              <td><input type="radio" name="Tanggapan2" value="Baik"></td>
              <td><input type="radio" name="Tanggapan2" value="Cukup"></td>
              <td><input type="radio" name="Tanggapan2" value="Kurang"></td>
            </tr>
            <tr align="center">
              <td> 3 </td>
              <td align="left"> Keluasan wawasan antar disiplin ilmu </td>
              <td><input type="radio" name="Tanggapan3" value="Sangat Baik"></td>
              <td><input type="radio" name="Tanggapan3" value="Baik"></td>
              <td><input type="radio" name="Tanggapan3" value="Cukup"></td>
              <td><input type="radio" name="Tanggapan3" value="Kurang"></td>
            </tr>
            <tr align="center">
              <td> 4 </td>
              <td align="left"> Kepemimpinan </td>
              <td><input type="radio" name="Tanggapan4" value="Sangat Baik"></td>
              <td><input type="radio" name="Tanggapan4" value="Baik"></td>
              <td><input type="radio" name="Tanggapan4" value="Cukup"></td>
              <td><input type="radio" name="Tanggapan4" value="Kurang"></td>
            </tr>
            <tr align="center">
              <td> 5 </td>
              <td align="left"> Kerjasama dalam Tim </td>
              <td><input type="radio" name="Tanggapan5" value="Sangat Baik"></td>
              <td><input type="radio" name="Tanggapan5" value="Baik"></td>
              <td><input type="radio" name="Tanggapan5" value="Cukup"></td>
              <td><input type="radio" name="Tanggapan5" value="Kurang"></td>
            </tr>
            <tr align="center">
              <td> 6 </td>
              <td align="left"> Bahasa Asing </td>
              <td><input type="radio" name="Tanggapan6" value="Sangat Baik"></td>
              <td><input type="radio" name="Tanggapan6" value="Baik"></td>
              <td><input type="radio" name="Tanggapan6" value="Cukup"></td>
              <td><input type="radio" name="Tanggapan6" value="Kurang"></td>
            </tr>
            <tr align="center">
              <td> 7 </td>
              <td align="left"> Komunikasi </td>
              <td><input type="radio" name="Tanggapan7" value="Sangat Baik"></td>
              <td><input type="radio" name="Tanggapan7" value="Baik"></td>
              <td><input type="radio" name="Tanggapan7" value="Cukup"></td>
              <td><input type="radio" name="Tanggapan7" value="Kurang"></td>
            </tr>
            <tr align="center">
              <td> 8 </td>
              <td align="left"> Penggunaan Teknologi Informasi </td>
              <td><input type="radio" name="Tanggapan8" value="Sangat Baik"></td>
              <td><input type="radio" name="Tanggapan8" value="Baik"></td>
              <td><input type="radio" name="Tanggapan8" value="Cukup"></td>
              <td><input type="radio" name="Tanggapan8" value="Kurang"></td>
            </tr>
            <tr align="center">
              <td> 9 </td>
              <td align="left"> Pengembangan Diri </td>
              <td><input type="radio" name="Tanggapan9" value="Sangat Baik"></td>
              <td><input type="radio" name="Tanggapan9" value="Baik"></td>
              <td><input type="radio" name="Tanggapan9" value="Cukup"></td>
              <td><input type="radio" name="Tanggapan9" value="Kurang"></td>
            </tr>
          </table>
        </div>

        <div>
          <br>
          <span class="label-input300"><b><h6>Penilaian terhadap kualitas lulusan mahasiswa Program Studi Teknik Geofisika Institut Teknologi Sumatera</b></h6></span><br>
        </div>

        <div class="wrap-input100">
            <span class="label-input300">1. Bagaimana kualitas kinerja Alumni Program Studi Teknik Geofisika Institut Teknologi Sumatera di tempat kerja Anda?</span>
            <textarea class="input100" name="penilaian1" placeholder="Answer Here..." required="Harus diisi"></textarea>
          </div>

          <div class="wrap-input100">
            <span class="label-input300">2. Kelebihan apa saja yang dimiliki oleh Alumni Program Studi Teknik Geofisika Institut Teknologi Sumatera?</span>
            <textarea class="input100" name="penilaian2" placeholder="Answer Here..." required="Harus diisi"></textarea>
          </div>

          <div class="wrap-input100">
            <span class="label-input300">3. Kekurangan apa saja yang dimiliki oleh Alumni Program Studi Teknik Geofisika Institut Teknologi Sumatera?</span>
            <textarea class="input100" name="penilaian3" placeholder="Answer Here..." required="Harus diisi"></textarea>
          </div>

          <div class="wrap-input100">
            <span class="label-input300">4. Apakah kemampuan yang dimiliki Alumni Program Studi Teknik Geofisika Institut Teknologi Sumatera sesuai dengan bidang pekerjaannya dan sesuai dengan kebutuhan di tempat kerja? Jika Ya, bagian apakah yang sesuai dan tidak sesuainya?</span>
            <textarea class="input100" name="penilaian4" placeholder="Answer Here..." required="Harus diisi"></textarea>
          </div>
          <div class="wrap-input100">
            <span class="label-input300">5. Menurut pendapat Anda, kira-kira hal apa yang perlu diperbaiki untuk meningkatkan kualitas Alumni Program Studi Teknik Geofisika Institut Teknologi Sumatera?</span>
            <textarea class="input100" name="penilaian5" placeholder="Answer Here..." required="Harus diisi"></textarea>
          </div>

         <div class="container-contact100-form-btn">
          <button class="btn btn-secondary btn-lg contact100-form" >
            <span>
              Submit
              <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
            </span>
          </button>        </div>
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