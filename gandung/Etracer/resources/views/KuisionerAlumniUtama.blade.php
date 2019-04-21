<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kuisioner Utama E-Tracer</title>
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
    <link rel="stylesheet" href="{{asset('demo-files/demo.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">

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
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">KUISIONER </h1>
            @foreach( $pengguna as $p)
            <h3 class="text-white font-weight-light text-uppercase font-weight-bold">{{ $p -> nama }}</h3>
            @endforeach
          </div>
        </div>
      </div>
    </div> 

  <div class="container">
    <div class="wrap-contact100">
      <form class=" contact100-form validate-form" action="{{ url('/KuisionerUtama/simpanUtama') }}">
        <h2>Kuesioner Utama</h2> 
        <div class="wrap-input100 ">
          <span class="label-input300">1. Seberapa besar alasan-alasan di bawah ini menyebabkan ketidaktepatan masa studi anda?</span>
            <br>
            <table border="2" width="700px">
              <tr align="center">
                <th width="50" rowspan="2"><center>No</center> </th>
                <th width="300" rowspan="2"><center>Alasan</center></th>
                <th width="400" colspan="5"><center>Tanggapan Pihak Pengguna</center></th>
              </tr>
              <tr>
                <th><center>1</center></th>
                <th><center>2</center></th>
                <th><center>3</center></th>
                <th><center>4</center></th>
                <th><center>5</center></th>
              </tr>
              <tr align="center">
                <td> 1 </td>
                <td align="left"> Alasan Keuangan </td>
                <td><input type="radio" name="Tanggapan1a" value="1"></td>
                <td><input type="radio" name="Tanggapan1a" value="2"></td>
                <td><input type="radio" name="Tanggapan1a" value="3"></td>
                <td><input type="radio" name="Tanggapan1a" value="4"></td>
                <td><input type="radio" name="Tanggapan1a" value="5"></td>              
              </tr>
              <tr align="center">
                <td> 2 </td>
                <td align="left"> Tidak lulus ujian</td>
                <td><input type="radio" name="Tanggapan1b" value="1"></td>
                <td><input type="radio" name="Tanggapan1b" value="2"></td>
                <td><input type="radio" name="Tanggapan1b" value="3"></td>
                <td><input type="radio" name="Tanggapan1b" value="4"></td>
                <td><input type="radio" name="Tanggapan1b" value="5"></td>
              </tr>
              <tr align="center">
                <td> 3 </td>
                <td align="left"> Penulisan skripsi lambat </td>
                <td><input type="radio" name="Tanggapan1c" value="1"></td>
                <td><input type="radio" name="Tanggapan1c" value="2"></td>
                <td><input type="radio" name="Tanggapan1c" value="3"></td>
                <td><input type="radio" name="Tanggapan1c" value="4"></td>
                <td><input type="radio" name="Tanggapan1c" value="5"></td>
              </tr>
              <tr align="center">
                <td> 4 </td>
                <td align="left"> Alasan keluarga</td>
                <td><input type="radio" name="Tanggapan1d" value="1"></td>
                <td><input type="radio" name="Tanggapan1d" value="2"></td>
                <td><input type="radio" name="Tanggapan1d" value="3"></td>
                <td><input type="radio" name="Tanggapan1d" value="4"></td>
                <td><input type="radio" name="Tanggapan1d" value="5"></td>
              </tr>
              <tr align="center">
                <td> 5 </td>
                <td align="left"> Kesehatan </td>              
                <td><input type="radio" name="Tanggapan1e" value="1"></td>
                <td><input type="radio" name="Tanggapan1e" value="2"></td>
                <td><input type="radio" name="Tanggapan1e" value="3"></td>
                <td><input type="radio" name="Tanggapan1e" value="4"></td>
                <td><input type="radio" name="Tanggapan1e" value="5"></td>
              </tr>
              <tr align="center">
                <td> 6 </td>
                <td align="left"> Kegiatan Mahasiswa / Ekstrakulikuler</td>        
                <td><input type="radio" name="Tanggapan1f" value="1"></td>
                <td><input type="radio" name="Tanggapan1f" value="2"></td>
                <td><input type="radio" name="Tanggapan1f" value="3"></td>
                <td><input type="radio" name="Tanggapan1f" value="4"></td>
                <td><input type="radio" name="Tanggapan1f" value="5"></td>
              </tr>
              <tr align="center">
                <td> 7 </td>
                <td align="left"> Hobby </td>              
                <td><input type="radio" name="Tanggapan1g" value="1"></td>
                <td><input type="radio" name="Tanggapan1g" value="2"></td>
                <td><input type="radio" name="Tanggapan1g" value="3"></td>
                <td><input type="radio" name="Tanggapan1g" value="4"></td>
                <td><input type="radio" name="Tanggapan1g" value="5"></td>  
              </tr>
            </table>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">2. Menurut Anda seberapa besar penekanan pada aspek-aspek pembelajaran di bawah ini dilaksanakan di program studi anda</span>
          <br>
          <table border="2" width="700px">
              <tr align="center">
                <th width="50" rowspan="2"><center>No</center> </th>
                <th width="300" rowspan="2"><center>Alasan</center></th>
                <th width="400" colspan="5"><center>Tanggapan Pihak Pengguna</center></th>
              </tr>
              <tr>
                <th><center>1</center></th>
                <th><center>2</center></th>
                <th><center>3</center></th>
                <th><center>4</center></th>
                <th><center>5</center></th>
              </tr>            
            <tr align="center">
              <td> 1 </td>
              <td align="left"> Perkuliahan </td>
              <td><input type="radio" name="Tanggapan2a" value="1"></td>
              <td><input type="radio" name="Tanggapan2a" value="2"></td>
              <td><input type="radio" name="Tanggapan2a" value="3"></td>
              <td><input type="radio" name="Tanggapan2a" value="4"></td>
              <td><input type="radio" name="Tanggapan2a" value="5"></td>              
            </tr>
            <tr align="center">
              <td> 2 </td>
              <td align="left"> Demonstrasi(Peragaan) </td>
              <td><input type="radio" name="Tanggapan2b" value="1"></td>
              <td><input type="radio" name="Tanggapan2b" value="2"></td>
              <td><input type="radio" name="Tanggapan2b" value="3"></td>
              <td><input type="radio" name="Tanggapan2b" value="4"></td>
              <td><input type="radio" name="Tanggapan2b" value="5"></td>
            </tr>
            <tr align="center">
              <td> 3 </td>
              <td align="left"> Partisipasi dalam proyek riset </td>
              <td><input type="radio" name="Tanggapan2c" value="1"></td>
              <td><input type="radio" name="Tanggapan2c" value="2"></td>
              <td><input type="radio" name="Tanggapan2c" value="3"></td>
              <td><input type="radio" name="Tanggapan2c" value="4"></td>
              <td><input type="radio" name="Tanggapan2c" value="5"></td>
            </tr>
            <tr align="center">
              <td> 4 </td>
              <td align="left"> Magang</td>
              <td><input type="radio" name="Tanggapan2d" value="1"></td>
              <td><input type="radio" name="Tanggapan2d" value="2"></td>
              <td><input type="radio" name="Tanggapan2d" value="3"></td>
              <td><input type="radio" name="Tanggapan2d" value="4"></td>
              <td><input type="radio" name="Tanggapan2d" value="5"></td>
            </tr>
            <tr align="center">
              <td> 5 </td>
              <td align="left"> Praktikum Kerja Lapangan </td>             
              <td><input type="radio" name="Tanggapan2e" value="1"></td>
              <td><input type="radio" name="Tanggapan2e" value="2"></td>
              <td><input type="radio" name="Tanggapan2e" value="3"></td>
              <td><input type="radio" name="Tanggapan2e" value="4"></td>
              <td><input type="radio" name="Tanggapan2e" value="5"></td>
            </tr>
            <tr align="center">
              <td> 6 </td>
              <td align="left"> Diskusi</td> 
              <td><input type="radio" name="Tanggapan2f" value="1"></td>
              <td><input type="radio" name="Tanggapan2f" value="2"></td>
              <td><input type="radio" name="Tanggapan2f" value="3"></td>
              <td><input type="radio" name="Tanggapan2f" value="4"></td>
              <td><input type="radio" name="Tanggapan2f" value="5"></td>
            </tr>    
          </table>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">3. Selama kuliah, kebanyakan Anda tinggal... </span>
          <input class="input100" type="text" name="Tanggapan3" placeholder="Answer Here...." required>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">4. Siapa yang  terutama membayar uang kuliah anda?..</span>
          <input class="input100" type="text" name="Tanggapan4" placeholder="Answer Here...." required>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">5. Dalam skala 1 sampai 5, seberapa aktif anda di organisasi?</span>
          <br>
            <tr>
              <td><input type="radio" name="Tanggapan5" value="1"></td> 1 <br>
              <td><input type="radio" name="Tanggapan5" value="2"></td> 2 <br>
              <td><input type="radio" name="Tanggapan5" value="3"></td> 3 <br>
              <td><input type="radio" name="Tanggapan5" value="4"></td> 4 <br>
              <td><input type="radio" name="Tanggapan5" value="5"></td> 5 <br>            
              <br>
            </tr>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">6. Pada saat Anda kuliah di perguruan tinggi, apakah Anda mengambil kursus atau pendidikan tambahan?</span>
          <br>
            <tr>
              <td><input type="radio" name="Tanggapan6" value="Ya"></td> Ya <br>
              <td><input type="radio" name="Tanggapan6" value="Tidak"></td> Tidak <br>
            </tr>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">7. Dalam skala 1 sampai 5, bagaimana penilaian Anda terhadap aspek belajar mengajar di bawah ini?</span>
          <br>
          <table border="2" width="700px">
            <tr align="center">
                <th width="50" rowspan="2"><center>No</center> </th>
                <th width="300" rowspan="2"><center>Alasan</center></th>
                <th width="400" colspan="5"><center>Tanggapan Pihak Pengguna</center></th>
              </tr>
              <tr>
                <th><center>1</center></th>
                <th><center>2</center></th>
                <th><center>3</center></th>
                <th><center>4</center></th>
                <th><center>5</center></th>
              </tr>            
            <tr align="center">
              <td> 1 </td>
              <td align="left"> Kesempatan untuk berinteraksi dengan dosen-dosen di luar jadwal kuliah</td>
              <td><input type="radio" name="Tanggapan7a" value="1"></td>
              <td><input type="radio" name="Tanggapan7a" value="2"></td>
              <td><input type="radio" name="Tanggapan7a" value="3"></td>
              <td><input type="radio" name="Tanggapan7a" value="4"></td>
              <td><input type="radio" name="Tanggapan7a" value="5"></td>              
            </tr>
            <tr align="center">
              <td> 2 </td>
              <td align="left"> Pembimbingan akademik</td>
              <td><input type="radio" name="Tanggapan7b" value="1"></td>
              <td><input type="radio" name="Tanggapan7b" value="2"></td>
              <td><input type="radio" name="Tanggapan7b" value="3"></td>
              <td><input type="radio" name="Tanggapan7b" value="4"></td>
              <td><input type="radio" name="Tanggapan7b" value="5"></td>
            </tr>
            <tr align="center">
              <td> 3 </td>
              <td align="left"> Kesempatan berpartisipasi dalam proyek riset </td>
              <td><input type="radio" name="Tanggapan7c" value="1"></td>
              <td><input type="radio" name="Tanggapan7c" value="2"></td>
              <td><input type="radio" name="Tanggapan7c" value="3"></td>
              <td><input type="radio" name="Tanggapan7c" value="4"></td>
              <td><input type="radio" name="Tanggapan7c" value="5"></td>
            </tr>
            <tr align="center">
              <td> 4 </td>
              <td align="left"> Kondisi umum belajar mengajar</td>
              <td><input type="radio" name="Tanggapan7d" value="1"></td>
              <td><input type="radio" name="Tanggapan7d" value="2"></td>
              <td><input type="radio" name="Tanggapan7d" value="3"></td>
              <td><input type="radio" name="Tanggapan7d" value="4"></td>
              <td><input type="radio" name="Tanggapan7d" value="5"></td>
            </tr>
            <tr align="center">
              <td> 5 </td>
              <td align="left"> Kondisi Umum Belajar Mengajar</td>             
              <td><input type="radio" name="Tanggapan7e" value="1"></td>
              <td><input type="radio" name="Tanggapan7e" value="2"></td>
              <td><input type="radio" name="Tanggapan7e" value="3"></td>
              <td><input type="radio" name="Tanggapan7e" value="4"></td>
              <td><input type="radio" name="Tanggapan7e" value="5"></td>
            </tr>
            <tr align="center">
              <td> 6 </td>
              <td align="left"> Kesempatan untuk memasuki dan menjadi bagian dari jejaring ilmuan profesional</td> 
              <td><input type="radio" name="Tanggapan7f" value="1"></td>
              <td><input type="radio" name="Tanggapan7f" value="2"></td>
              <td><input type="radio" name="Tanggapan7f" value="3"></td>
              <td><input type="radio" name="Tanggapan7f" value="4"></td>
              <td><input type="radio" name="Tanggapan7f" value="5"></td>
            </tr>  
          </table>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">8. Bagaimana penilaian Anda terhadap kondisi fasilitas belajar di bawah ini?</span>
          <br>
          <table border="2" width="700px">
            <tr align="center">
                <th width="50" rowspan="2"><center>No</center> </th>
                <th width="300" rowspan="2"><center>Alasan</center></th>
                <th width="400" colspan="5"><center>Tanggapan Pihak Pengguna</center></th>
              </tr>
              <tr>
                <th><center>1</center></th>
                <th><center>2</center></th>
                <th><center>3</center></th>
                <th><center>4</center></th>
                <th><center>5</center></th>
              </tr>            
            <tr align="center">
              <td> 1 </td>
              <td align="left"> Perpustakaan</td>
              <td><input type="radio" name="Tanggapan8a" value="1"></td>
              <td><input type="radio" name="Tanggapan8a" value="2"></td>
              <td><input type="radio" name="Tanggapan8a" value="3"></td>
              <td><input type="radio" name="Tanggapan8a" value="4"></td>
              <td><input type="radio" name="Tanggapan8a" value="5"></td>              
            </tr>
            <tr align="center">
              <td> 2 </td>
              <td align="left"> Teknologi informasi dan komunikasi</td>
              <td><input type="radio" name="Tanggapan8b" value="1"></td>
              <td><input type="radio" name="Tanggapan8b" value="2"></td>
              <td><input type="radio" name="Tanggapan8b" value="3"></td>
              <td><input type="radio" name="Tanggapan8b" value="4"></td>
              <td><input type="radio" name="Tanggapan8b" value="5"></td>
            </tr>
            <tr align="center">
              <td> 3 </td>
              <td align="left">Modul belajar</td>
              <td><input type="radio" name="Tanggapan8c" value="1"></td>
              <td><input type="radio" name="Tanggapan8c" value="2"></td>
              <td><input type="radio" name="Tanggapan8c" value="3"></td>
              <td><input type="radio" name="Tanggapan8c" value="4"></td>
              <td><input type="radio" name="Tanggapan8c" value="5"></td>
            </tr>
            <tr align="center">
              <td> 4 </td>
              <td align="left"> Ruang belajar</td>
              <td><input type="radio" name="Tanggapan8d" value="1"></td>
              <td><input type="radio" name="Tanggapan8d" value="2"></td>
              <td><input type="radio" name="Tanggapan8d" value="3"></td>
              <td><input type="radio" name="Tanggapan8d" value="4"></td>
              <td><input type="radio" name="Tanggapan8d" value="5"></td>
            </tr>
            <tr align="center">
              <td> 5 </td>
              <td align="left">Laboratorium  </td>             
              <td><input type="radio" name="Tanggapan8e" value="1"></td>
              <td><input type="radio" name="Tanggapan8e" value="2"></td>
              <td><input type="radio" name="Tanggapan8e" value="3"></td>
              <td><input type="radio" name="Tanggapan8e" value="4"></td>
              <td><input type="radio" name="Tanggapan8e" value="5"></td>
            </tr>
            <tr align="center">
              <td> 6 </td>
              <td align="left"> Variasi mata kuliah yang ditawarkan</td> 
              <td><input type="radio" name="Tanggapan8f" value="1"></td>
              <td><input type="radio" name="Tanggapan8f" value="2"></td>
              <td><input type="radio" name="Tanggapan8f" value="3"></td>
              <td><input type="radio" name="Tanggapan8f" value="4"></td>
              <td><input type="radio" name="Tanggapan8f" value="5"></td>
            </tr>
            <tr align="center">
              <td> 7 </td>
              <td align="left"> Akomodasi</td> 
              <td><input type="radio" name="Tanggapan8g" value="1"></td>
              <td><input type="radio" name="Tanggapan8g" value="2"></td>
              <td><input type="radio" name="Tanggapan8g" value="3"></td>
              <td><input type="radio" name="Tanggapan8g" value="4"></td>
              <td><input type="radio" name="Tanggapan8g" value="5"></td>
            </tr>
            <tr align="center">
              <td> 8 </td>
              <td align="left"> Kantin</td>  
              <td><input type="radio" name="Tanggapan8h" value="1"></td>
              <td><input type="radio" name="Tanggapan8h" value="2"></td>
              <td><input type="radio" name="Tanggapan8h" value="3"></td>
              <td><input type="radio" name="Tanggapan8h" value="4"></td>
              <td><input type="radio" name="Tanggapan8h" value="5"></td>
            </tr>
            <tr align="center">
              <td> 9 </td>
              <td align="left"> Pusat kegiatan mahasiswa dan fasilitasnya, ruang rekreasi</td> 
              <td><input type="radio" name="Tanggapan8i" value="1"></td>
              <td><input type="radio" name="Tanggapan8i" value="2"></td>
              <td><input type="radio" name="Tanggapan8i" value="3"></td>
              <td><input type="radio" name="Tanggapan8i" value="4"></td>
              <td><input type="radio" name="Tanggapan8i" value="5"></td>
            </tr>
          </table>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">9. Kapan Anda mulai mencari pekerjaan? (mohon pekerjaan sambilan tidak dimasukkan) </span>
          <input class="input100" type="text" name="Tanggapan9" placeholder="Answer Here...." required>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">10. Bagaimana Anda mencari pekerjaan setelah lulus? (Jawaban bisa lebih dari satu) </span>
          <input class="input100" type="text" name="Tanggapan10" placeholder="Answer Here...." required>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">11. Berdasarkan persepsi Anda, seberapa pentingkah aspek-aspek dibawah ini bagi perusahaan/instansi dalam melakukan penerimaan pegawai?</span>
          <br>
          <table border="2" width="700px">
            <tr align="center">
                <th width="50" rowspan="2"><center>No</center> </th>
                <th width="300" rowspan="2"><center>Alasan</center></th>
                <th width="400" colspan="5"><center>Tanggapan Pihak Pengguna</center></th>
              </tr>
              <tr>
                <th><center>1</center></th>
                <th><center>2</center></th>
                <th><center>3</center></th>
                <th><center>4</center></th>
                <th><center>5</center></th>
              </tr>

            <tr align="center">
              <td> 1 </td>
              <td align="left"> Program diskusi</td>
              <td><input type="radio" name="Tanggapan11a" value="1"></td>
              <td><input type="radio" name="Tanggapan11a" value="2"></td>
              <td><input type="radio" name="Tanggapan11a" value="3"></td>
              <td><input type="radio" name="Tanggapan11a" value="4"></td>
              <td><input type="radio" name="Tanggapan11a" value="5"></td>             
            </tr>
            <tr align="center">
              <td> 2 </td>
              <td align="left"> Spesialisasi</td>
              <td><input type="radio" name="Tanggapan11b" value="1"></td>
              <td><input type="radio" name="Tanggapan11b" value="2"></td>
              <td><input type="radio" name="Tanggapan11b" value="3"></td>
              <td><input type="radio" name="Tanggapan11b" value="4"></td>
              <td><input type="radio" name="Tanggapan11b" value="5"></td>
            </tr>
            <tr align="center">
              <td> 3 </td>
              <td align="left">IPK</td>
              <td><input type="radio" name="Tanggapan11c" value="1"></td>
              <td><input type="radio" name="Tanggapan11c" value="2"></td>
              <td><input type="radio" name="Tanggapan11c" value="3"></td>
              <td><input type="radio" name="Tanggapan11c" value="4"></td>
              <td><input type="radio" name="Tanggapan11c" value="5"></td>
            </tr>
            <tr align="center">
              <td> 4 </td>
              <td align="left"> Pengalaman kerja selama kuliah</td>
              <td><input type="radio" name="Tanggapan11d" value="1"></td>
              <td><input type="radio" name="Tanggapan11d" value="2"></td>
              <td><input type="radio" name="Tanggapan11d" value="3"></td>
              <td><input type="radio" name="Tanggapan11d" value="4"></td>
              <td><input type="radio" name="Tanggapan11d" value="5"></td>
            </tr>
            <tr align="center">
              <td> 5 </td>
              <td align="left">Reputasi dari perguruan tinggi </td>              
              <td><input type="radio" name="Tanggapan11e" value="1"></td>
              <td><input type="radio" name="Tanggapan11e" value="2"></td>
              <td><input type="radio" name="Tanggapan11e" value="3"></td>
              <td><input type="radio" name="Tanggapan11e" value="4"></td>
              <td><input type="radio" name="Tanggapan11e" value="5"></td>
            </tr>
            <tr align="center">
              <td> 6 </td>
              <td align="left"> Pengalaman ke luar negeri(untuk bekerja atau magang)</td>  
              <td><input type="radio" name="Tanggapan11f" value="1"></td>
              <td><input type="radio" name="Tanggapan11f" value="2"></td>
              <td><input type="radio" name="Tanggapan11f" value="3"></td>
              <td><input type="radio" name="Tanggapan11f" value="4"></td>
              <td><input type="radio" name="Tanggapan11f" value="5"></td>
            </tr>
    
            <tr align="center">
              <td> 7 </td>
              <td align="left"> Kemampuan bahasa Inggris</td>  
              <td><input type="radio" name="Tanggapan11g" value="1"></td>
              <td><input type="radio" name="Tanggapan11g" value="2"></td>
              <td><input type="radio" name="Tanggapan11g" value="3"></td>
              <td><input type="radio" name="Tanggapan11g" value="4"></td>
              <td><input type="radio" name="Tanggapan11g" value="5"></td>
            </tr>
            
            <tr align="center">
              <td> 8 </td>
              <td align="left"> Pengoperasian Komputer</td>  
              <td><input type="radio" name="Tanggapan11h" value="1"></td>
              <td><input type="radio" name="Tanggapan11h" value="2"></td>
              <td><input type="radio" name="Tanggapan11h" value="3"></td>
              <td><input type="radio" name="Tanggapan11h" value="4"></td>
              <td><input type="radio" name="Tanggapan11h" value="5"></td>
            </tr>
            <tr align="center">
              <td> 9 </td>
              <td align="left"> Pengalaman berorganisasi</td>  
              <td><input type="radio" name="Tanggapan11i" value="1"></td>
              <td><input type="radio" name="Tanggapan11i" value="2"></td>
              <td><input type="radio" name="Tanggapan11i" value="3"></td>
              <td><input type="radio" name="Tanggapan11i" value="4"></td>
              <td><input type="radio" name="Tanggapan11i" value="5"></td>
            </tr>
            <tr align="center">
              <td> 10 </td>
              <td align="left"> Rekomendasi dari pihak ketiga</td> 
              <td><input type="radio" name="Tanggapan11j" value="1"></td>
              <td><input type="radio" name="Tanggapan11j" value="2"></td>
              <td><input type="radio" name="Tanggapan11j" value="3"></td>
              <td><input type="radio" name="Tanggapan11j" value="4"></td>
              <td><input type="radio" name="Tanggapan11j" value="5"></td>
            </tr>
            <tr align="center">
              <td> 11 </td>
              <td align="left"> Kepribadian dan keterampilan interpersonal</td>  
              <td><input type="radio" name="Tanggapan11k" value="1"></td>
              <td><input type="radio" name="Tanggapan11k" value="2"></td>
              <td><input type="radio" name="Tanggapan11k" value="3"></td>
              <td><input type="radio" name="Tanggapan11k" value="4"></td>
              <td><input type="radio" name="Tanggapan11k" value="5"></td>
            </tr>
          </table>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">12. Berapa perusahaan/instansi/institusi yang sudah Anda lamar (lewat surat atau e-mail) sebelum Anda memperoleh pekerjaan pertama? </span>
          <input class="input100" type="text" name="Tanggapan12" placeholder="Answer Here...." required>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">13. Berapa bulan waktu yang dihabiskan(sebelum dan sesudah kelulusan) untuk memperoleh pekerjaan pertama?</span>
          <input class="input100" type="text" name="Tanggapan13" placeholder="Answer Here...." required>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">14. Melalui apa Anda mendapatkan pekerjaan pertama? </span>
          <input class="input100" type="text" name="Tanggapan14" placeholder="Answer Here...." required>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">15. Aspek apa yang menjadi pertimbangan utama anda dalam memilih pekerjaan pertama </span>
          <input class="input100" type="text" name="Tanggapan15" placeholder="Answer Here...." required>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">16. Jenis kursus apa yang Anda ambil SETELAH Anda lulus dari perguruan tinggi ( jawaban bisa lebih dari satu)</span>
          <input class="input100" type="text" name="Tanggapan16" placeholder="Answer Here...." required>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">17. Apakah Anda merasa perlu untuk meningkatkan kompetensi Andan dengan mengambil kursus lagi? </span>
          <input class="input100" type="text" name="Tanggapan17" placeholder="Answer Here...." required>
        </div>
        
        <div class="wrap-input100 ">
          <span class="label-input300">18. Bagaimana anda menggambarkan situasi anda saat ini?</span>
          <br>
            <tr>
              <td><input type="radio" name="Tanggapan18" value="1"></td>
              <td> Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana</td>
            </tr>
            <br>
            <tr>
              <td><input type="radio" name="Tanggapan18" value="1"></td>
              <td> Saya menikah</td>
            </tr>
            <br>
            <tr>
              <td><input type="radio" name="Tanggapan18" value="1"></td>
              <td>Saya sibuk dengan keluarga dan anak-anak</td>
            </tr>
            <br>
            <tr>
            <td><input type="radio" name="Tanggapan18" value="1"></td>
            <td> Saya sekarang sedang mencari pekerjaan</td>
            </tr>
            <br>
            <tr>
              <td><input class="rd" type="radio" name="Tanggapan18" id="radio-1" value="Normal Radio" checked= /><input type="text" class="tb" name="tb1"  placeholder=" Lainnya" /></td>
            </tr>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">19. Berapa perusahaan/instansi/institusi yang telah anda masuki untuk bekerja(termasuk perusahaan sendiri) sejak anda lulus?</span>
          <input class="input100" type="text" name="Tanggapan19" placeholder="Answer Here....">
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">20. Apa jenis perusahaan/instansi/institusi tempat Anda bekerja sekarang?</span>
          <br>
            <tr>
              <td><input type="radio" name="Tanggapan20" value="Instansi pemerintah (Termasuk BUMN)"></td> Instansi pemerintah (Termasuk BUMN) <br>
              <td><input type="radio" name="Tanggapan20" value="Organisasi non-profit/lembaga swadaya masyarakat"></td> Organisasi non-profit/lembaga swadaya masyarakat <br>
              <td><input type="radio" name="Tanggapan20" value="Perusahaan swasta"></td> Perusahaan swasta <br>
              <td><input type="radio" name="Tanggapan20" value="Wiraswasta/Perusahaan sendiri"></td> Wiraswasta/Perusahaan sendiri <br>
              <td><input class="rd" type="radio" name="Tanggapan20" id="radio-1" value="Lainnya" checked= /><input type="text" class="tb" name="tb1"  placeholder=" Lainnya" /></td>           
              <br>  
            </tr>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">21. Jelaskan tugas-tugas utama dalam pekerjaan anda sekarang?</span>
          <input class="input100" type="text" name="Tanggapan21" placeholder="Answer Here...." required>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">22. Berapa jam rata-rata perminggu Anda bekerja?</span>
          <input class="input100" type="text" name="Tanggapan22" placeholder="Answer Here...." required>
        </div>


        <div class="wrap-input100 ">
          <span class="label-input300">23. Jika Anda menjalanan perusahaan sendiri, apa jenis/usaha yang sedang Anda jalani saat ini? (Jika tidak memiliki perusahaan sendiri maka tidak perlu diisi</span>
          <br>
          <tr>
            <input type="radio" name="Tanggapan23a" value="Saya memiliki/melayani kontraktor tunggal"> Saya memiliki/melayani kontraktor tunggal<br>
            <input type="radio" name="Tanggapan23a" value="Saya mengambil alih/membeli perusahaan" > Saya mengambil alih/membeli perusahaan<br>
            <input type="radio" name="Tanggapan23a" value="Saya membangun dari awal sebuah firma/kantor"> Saya membangun dari awal sebuah firma/kantor<br>
            <input type="radio" name="Tanggapan23a" value="Saya diminta untuk membuka perusahaan sendiri oleh perusahaan tempat saya bekerja dulu."  > Saya diminta untuk membuka perusahaan sendiri oleh perusahaan tempat saya bekerja dulu.<br>
            <input type="radio" name="Tanggapan23a" value="Saya bekerja di rumah"> Saya bekerja di rumah<br>
            <input type="radio" name="Tanggapan23a" value="Saya tidak mempunyai pegawai/bekerja sendiri"  > Saya tidak mempunyai pegawai/bekerja sendiri<br>
            <input type="radio" name="Tanggapan23a" value="Saya bekerja sama dengan teman/saudara" > Saya bekerja sama dengan teman/saudara<br>
            <td><input class="rd" type="radio" name="Tanggapan23a" id="radio" value="Tanggapan23a" = /><input type="text" class="tb" name="tb1"  placeholder=" Lainnya" /></td>            
          </tr>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">24. Pada saat lulus, bagaimana kontribusi perguruan tinggi dalam hal kompetensi di bawah ini? Dalam skala 1 sampai 5, pada tingkat mana kompetensi di bawah ini Anda kuasai?</span>
          <br>
          <table border="2" width="700px">
            <tr align="center">
                <th width="50" rowspan="2"><center>No</center> </th>
                <th width="300" rowspan="2"><center>Alasan</center></th>
                <th width="400" colspan="5"><center>Tanggapan Pihak Pengguna</center></th>
              </tr>
              <tr>
                <th><center>1</center></th>
                <th><center>2</center></th>
                <th><center>3</center></th>
                <th><center>4</center></th>
                <th><center>5</center></th>
              </tr>            
            <tr align="center">
              <td> 1 </td>
              <td align="left">Pengetahuan di bidang atau disiplin ilmu anda</td>
              <td><input type="radio" name="Tanggapan24a" value="1"></td>
              <td><input type="radio" name="Tanggapan24a" value="2"></td>
              <td><input type="radio" name="Tanggapan24a" value="3"></td>
              <td><input type="radio" name="Tanggapan24a" value="4"></td>
              <td><input type="radio" name="Tanggapan24a" value="5"></td>             
            </tr>
            <tr align="center">
              <td> 2 </td>
              <td align="left"> Pengetahuan di luar bidang atau disiplin ilmu anda</td>
              <td><input type="radio" name="Tanggapan24b" value="1"></td>
              <td><input type="radio" name="Tanggapan24b" value="2"></td>
              <td><input type="radio" name="Tanggapan24b" value="3"></td>
              <td><input type="radio" name="Tanggapan24b" value="4"></td>
              <td><input type="radio" name="Tanggapan24b" value="5"></td>
            </tr>
            <tr align="center">
              <td> 3 </td>
              <td align="left">Pengetahuan umum</td>
              <td><input type="radio" name="Tanggapan24c" value="1"></td>
              <td><input type="radio" name="Tanggapan24c" value="2"></td>
              <td><input type="radio" name="Tanggapan24c" value="3"></td>
              <td><input type="radio" name="Tanggapan24c" value="4"></td>
              <td><input type="radio" name="Tanggapan24c" value="5"></td>
            </tr>
            <tr align="center">
              <td> 4 </td>
              <td align="left"> Ketrampilan internet</td>
              <td><input type="radio" name="Tanggapan24d" value="1"></td>
              <td><input type="radio" name="Tanggapan24d" value="2"></td>
              <td><input type="radio" name="Tanggapan24d" value="3"></td>
              <td><input type="radio" name="Tanggapan24d" value="4"></td>
              <td><input type="radio" name="Tanggapan24d" value="5"></td>
            </tr>
            <tr align="center">
              <td> 5 </td>
              <td align="left">Ketrampilan komputer </td>              
              <td><input type="radio" name="Tanggapan24e" value="1"></td>
              <td><input type="radio" name="Tanggapan24e" value="2"></td>
              <td><input type="radio" name="Tanggapan24e" value="3"></td>
              <td><input type="radio" name="Tanggapan24e" value="4"></td>
              <td><input type="radio" name="Tanggapan24e" value="5"></td>
            </tr>
            <tr align="center">
              <td> 6 </td>
              <td align="left"> Berpikir kritis</td> 
              <td><input type="radio" name="Tanggapan24f" value="1"></td>
              <td><input type="radio" name="Tanggapan24f" value="2"></td>
              <td><input type="radio" name="Tanggapan24f" value="3"></td>
              <td><input type="radio" name="Tanggapan24f" value="4"></td>
              <td><input type="radio" name="Tanggapan24f" value="5"></td>
            </tr>
    
            <tr align="center">
              <td> 7 </td>
              <td align="left"> Ketrampilan riset</td> 
              <td><input type="radio" name="Tanggapan24g" value="1"></td>
              <td><input type="radio" name="Tanggapan24g" value="2"></td>
              <td><input type="radio" name="Tanggapan24g" value="3"></td>
              <td><input type="radio" name="Tanggapan24g" value="4"></td>
              <td><input type="radio" name="Tanggapan24g" value="5"></td>
            </tr>
            
            <tr align="center">
              <td> 8 </td>
              <td align="left"> Kemampuan belajar</td> 
              <td><input type="radio" name="Tanggapan24h" value="1"></td>
              <td><input type="radio" name="Tanggapan24h" value="2"></td>
              <td><input type="radio" name="Tanggapan24h" value="3"></td>
              <td><input type="radio" name="Tanggapan24h" value="4"></td>
              <td><input type="radio" name="Tanggapan24h" value="5"></td>
            </tr>
            
            <tr align="center">
              <td> 9 </td>
              <td align="left"> Kemampuan berkomunikasi</td> 
              <td><input type="radio" name="Tanggapan24i" value="1"></td>
              <td><input type="radio" name="Tanggapan24i" value="2"></td>
              <td><input type="radio" name="Tanggapan24i" value="3"></td>
              <td><input type="radio" name="Tanggapan24i" value="4"></td>
              <td><input type="radio" name="Tanggapan24i" value="5"></td>
            </tr>
            
            <tr align="center">
              <td> 10 </td>
              <td align="left"> Bekerja di bawah tekanan</td>  
              <td><input type="radio" name="Tanggapan24j" value="1"></td>
              <td><input type="radio" name="Tanggapan24j" value="2"></td>
              <td><input type="radio" name="Tanggapan24j" value="3"></td>
              <td><input type="radio" name="Tanggapan24j" value="4"></td>
              <td><input type="radio" name="Tanggapan24j" value="5"></td>
            </tr>

            <tr align="center">
              <td> 11 </td>
              <td align="left"> Manajemen waktu</td> 
              <td><input type="radio" name="Tanggapan24k" value="1"></td>
              <td><input type="radio" name="Tanggapan24k" value="2"></td>
              <td><input type="radio" name="Tanggapan24k" value="3"></td>
              <td><input type="radio" name="Tanggapan24k" value="4"></td>
              <td><input type="radio" name="Tanggapan24k" value="5"></td>
            </tr>
            <tr align="center">
              <td> 12 </td>
              <td align="left"> Bekerja secara mandiri</td>  
              <td><input type="radio" name="Tanggapan24l" value="1"></td>
              <td><input type="radio" name="Tanggapan24l" value="2"></td>
              <td><input type="radio" name="Tanggapan24l" value="3"></td>
              <td><input type="radio" name="Tanggapan24l" value="4"></td>
              <td><input type="radio" name="Tanggapan24l" value="5"></td>
            </tr>
            
            <tr align="center">
              <td> 13 </td>
              <td align="left"> Bekejra dalam tim/bekerjasama dengan orang lain</td> 
              <td><input type="radio" name="Tanggapan24m" value="1"></td>
              <td><input type="radio" name="Tanggapan24m" value="2"></td>
              <td><input type="radio" name="Tanggapan24m" value="3"></td>
              <td><input type="radio" name="Tanggapan24m" value="4"></td>
              <td><input type="radio" name="Tanggapan24m" value="5"></td>
            </tr>

            <tr align="center">
              <td> 14 </td>
              <td align="left">Kemampuan dalam memecahkan masalah</td> 
              <td><input type="radio" name="Tanggapan24n" value="1"></td>
              <td><input type="radio" name="Tanggapan24n" value="2"></td>
              <td><input type="radio" name="Tanggapan24n" value="3"></td>
              <td><input type="radio" name="Tanggapan24n" value="4"></td>
              <td><input type="radio" name="Tanggapan24n" value="5"></td>
            </tr>

            <tr align="center">
              <td> 15 </td>
              <td align="left">Negosiasi</td>  
              <td><input type="radio" name="Tanggapan24o" value="1"></td>
              <td><input type="radio" name="Tanggapan24o" value="2"></td>
              <td><input type="radio" name="Tanggapan24o" value="3"></td>
              <td><input type="radio" name="Tanggapan24o" value="4"></td>
              <td><input type="radio" name="Tanggapan24o" value="5"></td>
            </tr>
            
            <tr align="center">
              <td> 16 </td>
              <td align="left"> Kemampuan analisis</td>  
              <td><input type="radio" name="Tanggapan24p" value="1"></td>
              <td><input type="radio" name="Tanggapan24p" value="2"></td>
              <td><input type="radio" name="Tanggapan24p" value="3"></td>
              <td><input type="radio" name="Tanggapan24p" value="4"></td>
              <td><input type="radio" name="Tanggapan24p" value="5"></td>
            </tr>
            <tr align="center">
              <td> 17 </td>
              <td align="left"> Toleransi </td>  
              <td><input type="radio" name="Tanggapan24q" value="1"></td>
              <td><input type="radio" name="Tanggapan24q" value="2"></td>
              <td><input type="radio" name="Tanggapan24q" value="3"></td>
              <td><input type="radio" name="Tanggapan24q" value="4"></td>
              <td><input type="radio" name="Tanggapan24q" value="5"></td>
            </tr>
            
            <tr align="center">
              <td> 18 </td>
              <td align="left" align="left"> Kemampuan adaptasi</td>  
              <td><input type="radio" name="Tanggapan24r" value="1"></td>
              <td><input type="radio" name="Tanggapan24r" value="2"></td>
              <td><input type="radio" name="Tanggapan24r" value="3"></td>
              <td><input type="radio" name="Tanggapan24r" value="4"></td>
              <td><input type="radio" name="Tanggapan24r" value="5"></td>
            </tr>

            <tr align="center">
              <td> 19 </td>
              <td align="left"> Loyalitas dan integritas</td>  
              <td><input type="radio" name="Tanggapan24s" value="1"></td>
              <td><input type="radio" name="Tanggapan24s" value="2"></td>
              <td><input type="radio" name="Tanggapan24s" value="3"></td>
              <td><input type="radio" name="Tanggapan24s" value="4"></td>
              <td><input type="radio" name="Tanggapan24s" value="5"></td>
            </tr>
            <tr align="center">
              <td> 20 </td>
              <td align="left"> Bekerja dengan orang yang berbeda budaya maupun latar belakang</td>  
              <td><input type="radio" name="Tanggapan24t" value="1"></td>
              <td><input type="radio" name="Tanggapan24t" value="2"></td>
              <td><input type="radio" name="Tanggapan24t" value="3"></td>
              <td><input type="radio" name="Tanggapan24t" value="4"></td>
              <td><input type="radio" name="Tanggapan24t" value="5"></td>
            </tr>
            
            <tr align="center">
              <td> 21 </td>
              <td align="left"> Kepemimpinan</td>  
              <td><input type="radio" name="Tanggapan24u" value="1"></td>
              <td><input type="radio" name="Tanggapan24u" value="2"></td>
              <td><input type="radio" name="Tanggapan24u" value="3"></td>
              <td><input type="radio" name="Tanggapan24u" value="4"></td>
              <td><input type="radio" name="Tanggapan24u" value="5"></td>
            </tr>

            <tr align="center">
              <td> 22 </td>
              <td align="left">Kemampuan dalam memegang tanggung jawab</td>  
              <td><input type="radio" name="Tanggapan24v" value="1"></td>
              <td><input type="radio" name="Tanggapan24v" value="2"></td>
              <td><input type="radio" name="Tanggapan24v" value="3"></td>
              <td><input type="radio" name="Tanggapan24v" value="4"></td>
              <td><input type="radio" name="Tanggapan24v" value="5"></td>
            </tr>
            <tr align="center">
              <td> 23 </td>
              <td align="left"> Inisiatif</td> 
              <td><input type="radio" name="Tanggapan24w" value="1"></td>
              <td><input type="radio" name="Tanggapan24w"  value="2"></td>
              <td><input type="radio" name="Tanggapan24w" value="3"></td>
              <td><input type="radio" name="Tanggapan24w" value="4"></td>
              <td><input type="radio" name="Tanggapan24w" value="5"></td>
            </tr>
            <tr align="center">
              <td> 24 </td>
              <td align="left" align="left"> Manajemen proyek/program</td>  
              <td><input type="radio" name="Tanggapan24x" value="1"></td>
              <td><input type="radio" name="Tanggapan24x" value="2"></td>
              <td><input type="radio" name="Tanggapan24x" value="3"></td>
              <td><input type="radio" name="Tanggapan24x" value="4"></td>
              <td><input type="radio" name="Tanggapan24x" value="5"></td>
            </tr>
            
            <tr align="center">
              <td> 25 </td>
              <td align="left"> Kemampuan untuk memresentasikan ide/produk/laporan</td>  
              <td><input type="radio" name="Tanggapan24y" value="1"></td>
              <td><input type="radio" name="Tanggapan24y" value="2"></td>
              <td><input type="radio" name="Tanggapan24y" value="3"></td>
              <td><input type="radio" name="Tanggapan24y" value="4"></td>
              <td><input type="radio" name="Tanggapan24y" value="5"></td>
            </tr>

            <tr align="center">
              <td> 26 </td>
              <td align="left">Kemampuan dalam menuis laporan, memo, dan dokumen</td>  
              <td><input type="radio" name="Tanggapan24z" value="1"></td>
              <td><input type="radio" name="Tanggapan24z" value="2"></td>
              <td><input type="radio" name="Tanggapan24z" value="3"></td>
              <td><input type="radio" name="Tanggapan24z" value="4"></td>
              <td><input type="radio" name="Tanggapan24z" value="5"></td>
            </tr>
            <tr align="center">
              <td> 27 </td>
              <td align="left"> Kemampuan untuk terus belajar sepanjang hayat</td> 
              <td><input type="radio" name="Tanggapan24aa" value="1"></td>
              <td><input type="radio" name="Tanggapan24aa"  value="2"></td>
              <td><input type="radio" name="Tanggapan24aa" value="3"></td>
              <td><input type="radio" name="Tanggapan24aa" value="4"></td>
              <td><input type="radio" name="Tanggapan24aa" value="5"></td>
            </tr>
          </table> 
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">25. Bagaimana kontribusi perguruan tinggi dalam hal kompetensi di bawah ini?</span>
          <br>
          <table border="2" width="700px">
            <tr align="center">
                <th width="50" rowspan="2"><center>No</center> </th>
                <th width="300" rowspan="2"><center>Alasan</center></th>
                <th width="400" colspan="5"><center>Tanggapan Pihak Pengguna</center></th>
              </tr>
              <tr>
                <th><center>1</center></th>
                <th><center>2</center></th>
                <th><center>3</center></th>
                <th><center>4</center></th>
                <th><center>5</center></th>
              </tr>
            <tr align="center">
              <td> 1 </td>
              <td align="left">Pengetahuan di bidang atau disiplin ilmu anda</td>
              <td><input type="radio" name="Tanggapan25a" value="1"></td>
              <td><input type="radio" name="Tanggapan25a" value="2"></td>
              <td><input type="radio" name="Tanggapan25a" value="3"></td>
              <td><input type="radio" name="Tanggapan25a" value="4"></td>
              <td><input type="radio" name="Tanggapan25a" value="5"></td>             
            </tr>
            <tr align="center">
              <td> 2 </td>
              <td align="left"> Pengetahuan di luar bidang atau disiplin ilmu anda</td>
              <td><input type="radio" name="Tanggapan25b" value="1"></td>
              <td><input type="radio" name="Tanggapan25b" value="2"></td>
              <td><input type="radio" name="Tanggapan25b" value="3"></td>
              <td><input type="radio" name="Tanggapan25b" value="4"></td>
              <td><input type="radio" name="Tanggapan25b" value="5"></td>
            </tr>
            <tr align="center">
              <td> 3 </td>
              <td align="left">Pengetahuan umum</td>
              <td><input type="radio" name="Tanggapan25c" value="1"></td>
              <td><input type="radio" name="Tanggapan25c" value="2"></td>
              <td><input type="radio" name="Tanggapan25c" value="3"></td>
              <td><input type="radio" name="Tanggapan25c" value="4"></td>
              <td><input type="radio" name="Tanggapan25c" value="5"></td>
            </tr>
            <tr align="center">
              <td> 4 </td>
              <td align="left"> Ketrampilan internet</td>
              <td><input type="radio" name="Tanggapan25d" value="1"></td>
              <td><input type="radio" name="Tanggapan25d" value="2"></td>
              <td><input type="radio" name="Tanggapan25d" value="3"></td>
              <td><input type="radio" name="Tanggapan25d" value="4"></td>
              <td><input type="radio" name="Tanggapan25d" value="5"></td>
            </tr>
            <tr align="center">
              <td> 5 </td>
              <td align="left">Ketrampilan komputer </td>              
              <td><input type="radio" name="Tanggapan25e" value="1"></td>
              <td><input type="radio" name="Tanggapan25e" value="2"></td>
              <td><input type="radio" name="Tanggapan25e" value="3"></td>
              <td><input type="radio" name="Tanggapan25e" value="4"></td>
              <td><input type="radio" name="Tanggapan25e" value="5"></td>
            </tr>
            <tr align="center">
              <td> 6 </td>
              <td align="left"> Berpikir kritis</td> 
              <td><input type="radio" name="Tanggapan25f" value="1"></td>
              <td><input type="radio" name="Tanggapan25f" value="2"></td>
              <td><input type="radio" name="Tanggapan25f" value="3"></td>
              <td><input type="radio" name="Tanggapan25f" value="4"></td>
              <td><input type="radio" name="Tanggapan25f" value="5"></td>
            </tr>
    
            <tr align="center">
              <td> 7 </td>
              <td align="left"> Ketrampilan riset</td> 
              <td><input type="radio" name="Tanggapan25g" value="1"></td>
              <td><input type="radio" name="Tanggapan25g" value="2"></td>
              <td><input type="radio" name="Tanggapan25g" value="3"></td>
              <td><input type="radio" name="Tanggapan25g" value="4"></td>
              <td><input type="radio" name="Tanggapan25g" value="5"></td>
            </tr>
            
            <tr align="center">
              <td> 8 </td>
              <td align="left"> Kemampuan belajar</td> 
              <td><input type="radio" name="Tanggapan25h" value="1"></td>
              <td><input type="radio" name="Tanggapan25h" value="2"></td>
              <td><input type="radio" name="Tanggapan25h" value="3"></td>
              <td><input type="radio" name="Tanggapan25h" value="4"></td>
              <td><input type="radio" name="Tanggapan25h" value="5"></td>
            </tr>
            
            <tr align="center">
              <td> 9 </td>
              <td align="left"> Kemampuan berkomunikasi</td> 
              <td><input type="radio" name="Tanggapan25i" value="1"></td>
              <td><input type="radio" name="Tanggapan25i" value="2"></td>
              <td><input type="radio" name="Tanggapan25i" value="3"></td>
              <td><input type="radio" name="Tanggapan25i" value="4"></td>
              <td><input type="radio" name="Tanggapan25i" value="5"></td>
            </tr>
            
            <tr align="center">
              <td> 10 </td>
              <td align="left"> Bekerja di bawah tekanan</td>  
              <td><input type="radio" name="Tanggapan25j" value="1"></td>
              <td><input type="radio" name="Tanggapan25j" value="2"></td>
              <td><input type="radio" name="Tanggapan25j" value="3"></td>
              <td><input type="radio" name="Tanggapan25j" value="4"></td>
              <td><input type="radio" name="Tanggapan25j" value="5"></td>
            </tr>

            <tr align="center">
              <td> 11 </td>
              <td align="left"> Manajemen waktu</td> 
              <td><input type="radio" name="Tanggapan25k" value="1"></td>
              <td><input type="radio" name="Tanggapan25k" value="2"></td>
              <td><input type="radio" name="Tanggapan25k" value="3"></td>
              <td><input type="radio" name="Tanggapan25k" value="4"></td>
              <td><input type="radio" name="Tanggapan25k" value="5"></td>
            </tr>
            <tr align="center">
              <td> 12 </td>
              <td align="left"> Bekerja secara mandiri</td>  
              <td><input type="radio" name="Tanggapan25l" value="1"></td>
              <td><input type="radio" name="Tanggapan25l" value="2"></td>
              <td><input type="radio" name="Tanggapan25l" value="3"></td>
              <td><input type="radio" name="Tanggapan25l" value="4"></td>
              <td><input type="radio" name="Tanggapan25l" value="5"></td>
            </tr>
            
            <tr align="center">
              <td> 13 </td>
              <td align="left"> Bekejra dalam tim/bekerjasama dengan orang lain</td> 
              <td><input type="radio" name="Tanggapan25m" value="1"></td>
              <td><input type="radio" name="Tanggapan25m" value="2"></td>
              <td><input type="radio" name="Tanggapan25m" value="3"></td>
              <td><input type="radio" name="Tanggapan25m" value="4"></td>
              <td><input type="radio" name="Tanggapan25m" value="5"></td>
            </tr>

            <tr align="center">
              <td> 14 </td>
              <td align="left">Kemampuan dalam memecahkan masalah</td> 
              <td><input type="radio" name="Tanggapan25n" value="1"></td>
              <td><input type="radio" name="Tanggapan25n" value="2"></td>
              <td><input type="radio" name="Tanggapan25n" value="3"></td>
              <td><input type="radio" name="Tanggapan25n" value="4"></td>
              <td><input type="radio" name="Tanggapan25n" value="5"></td>
            </tr>

            <tr align="center">
              <td> 15 </td>
              <td align="left">Negosiasi</td>  
              <td><input type="radio" name="Tanggapan25o" value="1"></td>
              <td><input type="radio" name="Tanggapan25o" value="2"></td>
              <td><input type="radio" name="Tanggapan25o" value="3"></td>
              <td><input type="radio" name="Tanggapan25o" value="4"></td>
              <td><input type="radio" name="Tanggapan25o" value="5"></td>
            </tr>
            <tr>
            <tr align="center">
              <td> 16 </td>
              <td align="left"> Kemampuan analisis</td>  
              <td><input type="radio" name="Tanggapan25p" value="1"></td>
              <td><input type="radio" name="Tanggapan25p" value="2"></td>
              <td><input type="radio" name="Tanggapan25p" value="3"></td>
              <td><input type="radio" name="Tanggapan25p" value="4"></td>
              <td><input type="radio" name="Tanggapan25p" value="5"></td>
            </tr>
            <tr align="center">
              <td> 17 </td>
              <td align="left"> Toleransi </td>  
              <td><input type="radio" name="Tanggapan25q" value="1"></td>
              <td><input type="radio" name="Tanggapan25q" value="2"></td>
              <td><input type="radio" name="Tanggapan25q" value="3"></td>
              <td><input type="radio" name="Tanggapan25q" value="4"></td>
              <td><input type="radio" name="Tanggapan25q" value="5"></td>
            </tr>
            
            <tr align="center">
              <td> 18 </td>
              <td align="left"> Kemampuan adaptasi</td>  
              <td><input type="radio" name="Tanggapan25r" value="1"></td>
              <td><input type="radio" name="Tanggapan25r" value="2"></td>
              <td><input type="radio" name="Tanggapan25r" value="3"></td>
              <td><input type="radio" name="Tanggapan25r" value="4"></td>
              <td><input type="radio" name="Tanggapan25r" value="5"></td>
            </tr>

            <tr align="center">
              <td> 19 </td>
              <td align="left"> Loyalitas dan integritas</td>  
              <td><input type="radio" name="Tanggapan25s" value="1"></td>
              <td><input type="radio" name="Tanggapan25s" value="2"></td>
              <td><input type="radio" name="Tanggapan25s" value="3"></td>
              <td><input type="radio" name="Tanggapan25s" value="4"></td>
              <td><input type="radio" name="Tanggapan25s" value="5"></td>
            </tr>
            <tr align="center">
              <td> 20 </td>
              <td align="left"> Bekerja dengan orang yang berbeda budaya maupun latar belakang</td>  
              <td><input type="radio" name="Tanggapan25t" value="1"></td>
              <td><input type="radio" name="Tanggapan25t" value="2"></td>
              <td><input type="radio" name="Tanggapan25t" value="3"></td>
              <td><input type="radio" name="Tanggapan25t" value="4"></td>
              <td><input type="radio" name="Tanggapan25t" value="5"></td>
            </tr>
            
            <tr align="center">
              <td> 21 </td>
              <td align="left"> Kepemimpinan</td>  
              <td><input type="radio" name="Tanggapan25u" value="1"></td>
              <td><input type="radio" name="Tanggapan25u" value="2"></td>
              <td><input type="radio" name="Tanggapan25u" value="3"></td>
              <td><input type="radio" name="Tanggapan25u" value="4"></td>
              <td><input type="radio" name="Tanggapan25u" value="5"></td>
            </tr>

            <tr align="center">
              <td> 22 </td>
              <td align="left">Kemampuan dalam memegang tanggung jawab</td>  
              <td><input type="radio" name="Tanggapan25v" value="1"></td>
              <td><input type="radio" name="Tanggapan25v" value="2"></td>
              <td><input type="radio" name="Tanggapan25v" value="3"></td>
              <td><input type="radio" name="Tanggapan25v" value="4"></td>
              <td><input type="radio" name="Tanggapan25v" value="5"></td>
            </tr>
            <tr align="center">
              <td> 23 </td>
              <td align="left"> Inisiatif</td> 
              <td><input type="radio" name="Tanggapan25w" value="1"></td>
              <td><input type="radio" name="Tanggapan25w"  value="2"></td>
              <td><input type="radio" name="Tanggapan25w" value="3"></td>
              <td><input type="radio" name="Tanggapan25w" value="4"></td>
              <td><input type="radio" name="Tanggapan25w" value="5"></td>
            </tr>
            <tr align="center">
              <td> 24 </td>
              <td align="left"> Manajemen proyek/program</td>  
              <td><input type="radio" name="Tanggapan25x" value="1"></td>
              <td><input type="radio" name="Tanggapan25x" value="2"></td>
              <td><input type="radio" name="Tanggapan25x" value="3"></td>
              <td><input type="radio" name="Tanggapan25x" value="4"></td>
              <td><input type="radio" name="Tanggapan25x" value="5"></td>
            </tr>
            
            <tr align="center">
              <td> 25 </td>
              <td align="left"> Kemampuan untuk memresentasikan ide/produk/laporan</td>  
              <td><input type="radio" name="Tanggapan25y" value="1"></td>
              <td><input type="radio" name="Tanggapan25y" value="2"></td>
              <td><input type="radio" name="Tanggapan25y" value="3"></td>
              <td><input type="radio" name="Tanggapan25y" value="4"></td>
              <td><input type="radio" name="Tanggapan25y" value="5"></td>
            </tr>

            <tr align="center">
              <td> 26 </td>
              <td align="left">Kemampuan dalam menuis laporan, memo, dan dokumen</td>  
              <td><input type="radio" name="Tanggapan25z" value="1"></td>
              <td><input type="radio" name="Tanggapan25z" value="2"></td>
              <td><input type="radio" name="Tanggapan25z" value="3"></td>
              <td><input type="radio" name="Tanggapan25z" value="4"></td>
              <td><input type="radio" name="Tanggapan25z" value="5"></td>
            </tr>
            <tr align="center">
              <td> 27 </td>
              <td align="left"> Kemampuan untuk terus belajar sepanjang hayat</td> 
              <td><input type="radio" name="Tanggapan25aa" value="1"></td>
              <td><input type="radio" name="Tanggapan25aa" value="2"></td>
              <td><input type="radio" name="Tanggapan25aa" value="3"></td>
              <td><input type="radio" name="Tanggapan25aa" value="4"></td>
              <td><input type="radio" name="Tanggapan25aa" value="5"></td>
            </tr>
          </table> 
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">26 .Seberapa besar peran kompetensi yang diperoleh di perguruantinggi berikut ini dalam melaksanakan pekerjaan anda</span>
          <br>
          <table border="2" width="700px">
            <tr align="center">
                <th width="50" rowspan="2"><center>No</center> </th>
                <th width="300" rowspan="2"><center>Alasan</center></th>
                <th width="400" colspan="5"><center>Tanggapan Pihak Pengguna</center></th>
              </tr>
              <tr>
                <th><center>1</center></th>
                <th><center>2</center></th>
                <th><center>3</center></th>
                <th><center>4</center></th>
                <th><center>5</center></th>
              </tr>            
            <tr align="center">
              <td> 1 </td>
              <td align="left">Pengetahuan di bidang atau disiplin ilmu anda</td>
              <td><input type="radio" name="Tanggapan26a" value="1"></td>
              <td><input type="radio" name="Tanggapan26a" value="2"></td>
              <td><input type="radio" name="Tanggapan26a" value="3"></td>
              <td><input type="radio" name="Tanggapan26a" value="4"></td>
              <td><input type="radio" name="Tanggapan26a" value="5"></td>             
            </tr>
            <tr align="center">
              <td> 2 </td>
              <td align="left"> Pengetahuan di luar bidang atau disiplin ilmu anda</td>
              <td><input type="radio" name="Tanggapan26b" value="1"></td>
              <td><input type="radio" name="Tanggapan26b" value="2"></td>
              <td><input type="radio" name="Tanggapan26b" value="3"></td>
              <td><input type="radio" name="Tanggapan26b" value="4"></td>
              <td><input type="radio" name="Tanggapan26b" value="5"></td>
            </tr>
            <tr align="center">
              <td> 3 </td>
              <td align="left">Pengetahuan umum</td>
              <td><input type="radio" name="Tanggapan26c" value="1"></td>
              <td><input type="radio" name="Tanggapan26c" value="2"></td>
              <td><input type="radio" name="Tanggapan26c" value="3"></td>
              <td><input type="radio" name="Tanggapan26c" value="4"></td>
              <td><input type="radio" name="Tanggapan26c" value="5"></td>
            </tr>
            <tr align="center">
              <td> 4 </td>
              <td align="left"> Ketrampilan internet</td>
              <td><input type="radio" name="Tanggapan26d" value="1"></td>
              <td><input type="radio" name="Tanggapan26d" value="2"></td>
              <td><input type="radio" name="Tanggapan26d" value="3"></td>
              <td><input type="radio" name="Tanggapan26d" value="4"></td>
              <td><input type="radio" name="Tanggapan26d" value="5"></td>
            </tr>
            <tr align="center">
              <td> 5 </td>
              <td align="left">Ketrampilan komputer </td>              
              <td><input type="radio" name="Tanggapan26e" value="1"></td>
              <td><input type="radio" name="Tanggapan26e" value="2"></td>
              <td><input type="radio" name="Tanggapan26e" value="3"></td>
              <td><input type="radio" name="Tanggapan26e" value="4"></td>
              <td><input type="radio" name="Tanggapan26e" value="5"></td>
            </tr>
            <tr align="center">
              <td> 6 </td>
              <td align="left"> Berpikir kritis</td> 
              <td><input type="radio" name="Tanggapan26f" value="1"></td>
              <td><input type="radio" name="Tanggapan26f" value="2"></td>
              <td><input type="radio" name="Tanggapan26f" value="3"></td>
              <td><input type="radio" name="Tanggapan26f" value="4"></td>
              <td><input type="radio" name="Tanggapan26f" value="5"></td>
            </tr>
    
            <tr align="center">
              <td> 7 </td>
              <td align="left"> Ketrampilan riset</td> 
              <td><input type="radio" name="Tanggapan26g" value="1"></td>
              <td><input type="radio" name="Tanggapan26g" value="2"></td>
              <td><input type="radio" name="Tanggapan26g" value="3"></td>
              <td><input type="radio" name="Tanggapan26g" value="4"></td>
              <td><input type="radio" name="Tanggapan26g" value="5"></td>
            </tr>
            
            <tr align="center">
              <td> 8 </td>
              <td align="left"> Kemampuan belajar</td> 
              <td><input type="radio" name="Tanggapan26h" value="1"></td>
              <td><input type="radio" name="Tanggapan26h" value="2"></td>
              <td><input type="radio" name="Tanggapan26h" value="3"></td>
              <td><input type="radio" name="Tanggapan26h" value="4"></td>
              <td><input type="radio" name="Tanggapan26h" value="5"></td>
            </tr>
            
            <tr align="center">
              <td> 9 </td>
              <td align="left"> Kemampuan berkomunikasi</td> 
              <td><input type="radio" name="Tanggapan26i" value="1"></td>
              <td><input type="radio" name="Tanggapan26i" value="2"></td>
              <td><input type="radio" name="Tanggapan26i" value="3"></td>
              <td><input type="radio" name="Tanggapan26i" value="4"></td>
              <td><input type="radio" name="Tanggapan26i" value="5"></td>
            </tr>
            
            <tr align="center">
              <td> 10 </td>
              <td align="left"> Bekerja di bawah tekanan</td>  
              <td><input type="radio" name="Tanggapan26j" value="1"></td>
              <td><input type="radio" name="Tanggapan26j" value="2"></td>
              <td><input type="radio" name="Tanggapan26j" value="3"></td>
              <td><input type="radio" name="Tanggapan26j" value="4"></td>
              <td><input type="radio" name="Tanggapan26j" value="5"></td>
            </tr>

            <tr align="center">
              <td> 11 </td>
              <td align="left"> Manajemen waktu</td> 
              <td><input type="radio" name="Tanggapan26k" value="1"></td>
              <td><input type="radio" name="Tanggapan26k" value="2"></td>
              <td><input type="radio" name="Tanggapan26k" value="3"></td>
              <td><input type="radio" name="Tanggapan26k" value="4"></td>
              <td><input type="radio" name="Tanggapan26k" value="5"></td>
            </tr>
            <tr align="center">
              <td> 12 </td>
              <td align="left"> Bekerja secara mandiri</td>  
              <td><input type="radio" name="Tanggapan26l" value="1"></td>
              <td><input type="radio" name="Tanggapan26l" value="2"></td>
              <td><input type="radio" name="Tanggapan26l" value="3"></td>
              <td><input type="radio" name="Tanggapan26l" value="4"></td>
              <td><input type="radio" name="Tanggapan26l" value="5"></td>
            </tr>
            
            <tr align="center">
              <td> 13 </td>
              <td align="left"> Bekejra dalam tim/bekerjasama dengan orang lain</td> 
              <td><input type="radio" name="Tanggapan26m" value="1"></td>
              <td><input type="radio" name="Tanggapan26m" value="2"></td>
              <td><input type="radio" name="Tanggapan26m" value="3"></td>
              <td><input type="radio" name="Tanggapan26m" value="4"></td>
              <td><input type="radio" name="Tanggapan26m" value="5"></td>
            </tr>

            <tr align="center">
              <td> 14 </td>
              <td align="left">Kemampuan dalam memecahkan masalah</td> 
              <td><input type="radio" name="Tanggapan26n" value="1"></td>
              <td><input type="radio" name="Tanggapan26n" value="2"></td>
              <td><input type="radio" name="Tanggapan26n" value="3"></td>
              <td><input type="radio" name="Tanggapan26n" value="4"></td>
              <td><input type="radio" name="Tanggapan26n" value="5"></td>
            </tr>

            <tr align="center">
              <td> 15 </td>
              <td align="left">Negosiasi</td>  
              <td><input type="radio" name="Tanggapan26o" value="1"></td>
              <td><input type="radio" name="Tanggapan26o" value="2"></td>
              <td><input type="radio" name="Tanggapan26o" value="3"></td>
              <td><input type="radio" name="Tanggapan26o" value="4"></td>
              <td><input type="radio" name="Tanggapan26o" value="5"></td>
            </tr>
            
            <tr align="center">
              <td> 16 </td>
              <td align="left"> Kemampuan analisis</td>  
              <td><input type="radio" name="Tanggapan26p" value="1"></td>
              <td><input type="radio" name="Tanggapan26p" value="2"></td>
              <td><input type="radio" name="Tanggapan26p" value="3"></td>
              <td><input type="radio" name="Tanggapan26p" value="4"></td>
              <td><input type="radio" name="Tanggapan26p" value="5"></td>
            </tr>
            <tr align="center">
              <td> 17 </td>
              <td align="left"> Toleransi </td>  
              <td><input type="radio" name="Tanggapan26q" value="1"></td>
              <td><input type="radio" name="Tanggapan26q" value="2"></td>
              <td><input type="radio" name="Tanggapan26q" value="3"></td>
              <td><input type="radio" name="Tanggapan26q" value="4"></td>
              <td><input type="radio" name="Tanggapan26q" value="5"></td>
            </tr>
            
            <tr align="center">
              <td> 18 </td>
              <td align="left"> Kemampuan adaptasi</td>  
              <td><input type="radio" name="Tanggapan26r" value="1"></td>
              <td><input type="radio" name="Tanggapan26r" value="2"></td>
              <td><input type="radio" name="Tanggapan26r" value="3"></td>
              <td><input type="radio" name="Tanggapan26r" value="4"></td>
              <td><input type="radio" name="Tanggapan26r" value="5"></td>
            </tr>

            <tr align="center">
              <td> 19 </td>
              <td align="left"> Loyalitas dan integritas</td>  
              <td><input type="radio" name="Tanggapan26s" value="1"></td>
              <td><input type="radio" name="Tanggapan26s" value="2"></td>
              <td><input type="radio" name="Tanggapan26s" value="3"></td>
              <td><input type="radio" name="Tanggapan26s" value="4"></td>
              <td><input type="radio" name="Tanggapan26s" value="5"></td>
            </tr>
            <tr align="center">
              <td> 20 </td>
              <td align="left"> Bekerja dengan orang yang berbeda budaya maupun latar belakang</td>  
              <td><input type="radio" name="Tanggapan26t" value="1"></td>
              <td><input type="radio" name="Tanggapan26t" value="2"></td>
              <td><input type="radio" name="Tanggapan26t" value="3"></td>
              <td><input type="radio" name="Tanggapan26t" value="4"></td>
              <td><input type="radio" name="Tanggapan26t" value="5"></td>
            </tr>
            
            <tr align="center">
              <td> 21 </td>
              <td align="left"> Kepemimpinan</td>  
              <td><input type="radio" name="Tanggapan26u" value="1"></td>
              <td><input type="radio" name="Tanggapan26u" value="2"></td>
              <td><input type="radio" name="Tanggapan26u" value="3"></td>
              <td><input type="radio" name="Tanggapan26u" value="4"></td>
              <td><input type="radio" name="Tanggapan26u" value="5"></td>
            </tr>

            <tr align="center">
              <td> 22 </td>
              <td align="left">Kemampuan dalam memegang tanggung jawab</td>  
              <td><input type="radio" name="Tanggapan26v" value="1"></td>
              <td><input type="radio" name="Tanggapan26v" value="2"></td>
              <td><input type="radio" name="Tanggapan26v" value="3"></td>
              <td><input type="radio" name="Tanggapan26v" value="4"></td>
              <td><input type="radio" name="Tanggapan26v" value="5"></td>
            </tr>
            <tr align="center">
              <td> 23 </td>
              <td align="left"> Inisiatif</td> 
              <td><input type="radio" name="Tanggapan26w" value="1"></td>
              <td><input type="radio" name="Tanggapan26w"  value="2"></td>
              <td><input type="radio" name="Tanggapan26w" value="3"></td>
              <td><input type="radio" name="Tanggapan26w" value="4"></td>
              <td><input type="radio" name="Tanggapan26w" value="5"></td>
            </tr>
            <tr align="center">
              <td> 24 </td>
              <td align="left"> Manajemen proyek/program</td>  
              <td><input type="radio" name="Tanggapan26x" value="1"></td>
              <td><input type="radio" name="Tanggapan26x" value="2"></td>
              <td><input type="radio" name="Tanggapan26x" value="3"></td>
              <td><input type="radio" name="Tanggapan26x" value="4"></td>
              <td><input type="radio" name="Tanggapan26x" value="5"></td>
            </tr>
            
            <tr align="center">
              <td> 25 </td>
              <td align="left"> Kemampuan untuk memresentasikan ide/produk/laporan</td>  
              <td><input type="radio" name="Tanggapan26y" value="1"></td>
              <td><input type="radio" name="Tanggapan26y" value="2"></td>
              <td><input type="radio" name="Tanggapan26y" value="3"></td>
              <td><input type="radio" name="Tanggapan26y" value="4"></td>
              <td><input type="radio" name="Tanggapan26y" value="5"></td>
            </tr>

            <tr align="center">
              <td> 26 </td>
              <td align="left">Kemampuan dalam menuis laporan, memo, dan dokumen</td>  
              <td><input type="radio" name="Tanggapan26z" value="1"></td>
              <td><input type="radio" name="Tanggapan26z" value="2"></td>
              <td><input type="radio" name="Tanggapan26z" value="3"></td>
              <td><input type="radio" name="Tanggapan26z" value="4"></td>
              <td><input type="radio" name="Tanggapan26z" value="5"></td>
            </tr>
            <tr align="center">
              <td> 27 </td>
              <td align="left"> Kemampuan untuk terus belajar sepanjang hayat</td> 
              <td><input type="radio" name="Tanggapan26aa" value="1"></td>
              <td><input type="radio" name="Tanggapan26aa"  value="2"></td>
              <td><input type="radio" name="Tanggapan26aa" value="3"></td>
              <td><input type="radio" name="Tanggapan26aa" value="4"></td>
              <td><input type="radio" name="Tanggapan26aa" value="5"></td>
            </tr>
          </table>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">27. Pada saat anda lulus dari perguruan tinggi, bagaimana tingkat kemampuan bahasa asing anda?</span>
          <br>
            <tr>
              <td><input type="radio" name="Tanggapan27" value="1"></td> 1<br>
              <td><input type="radio" name="Tanggapan27" value="2"></td> 2<br>
              <td><input type="radio" name="Tanggapan27" value="3"></td> 3<br>
              <td><input type="radio" name="Tanggapan27" value="4"></td> 4<br>
              <td><input type="radio" name="Tanggapan27" value="5"></td> 5<br>
            </tr>
        </div>

      <div class="wrap-input100 ">
          <span class="label-input300">28. Berapa besar kontribusi perguruan tinggi dalam penguasaan bahasa asing?</span>
          <br>
            <tr>
              <td><input type="radio" name="Tanggapan28" value="1"></td> 1<br>
              <td><input type="radio" name="Tanggapan28" value="2"></td> 2<br>
              <td><input type="radio" name="Tanggapan28" value="3"></td> 3<br>
              <td><input type="radio" name="Tanggapan28" value="4"></td> 4<br>
              <td><input type="radio" name="Tanggapan28" value="5"></td> 5<br>
            </tr> 
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">29. Sejauh mana program studi anda bermanfaat untuk hal-hal di bawah ini?</span>
          <br>
          <table border="2" width="700px">
            <tr align="center">
                <th width="50" rowspan="2"><center>No</center> </th>
                <th width="300" rowspan="2"><center>Alasan</center></th>
                <th width="400" colspan="5"><center>Tanggapan Pihak Pengguna</center></th>
              </tr>
              <tr>
                <th><center>1</center></th>
                <th><center>2</center></th>
                <th><center>3</center></th>
                <th><center>4</center></th>
                <th><center>5</center></th>
              </tr>            
            <tr align="center">
              <td> 1 </td>
              <td align="left">Memulai pekerjaan?</td>
              <td><input type="radio" name="Tanggapan29a" value="1"></td>
              <td><input type="radio" name="Tanggapan29a" value="2"></td>
              <td><input type="radio" name="Tanggapan29a" value="3"></td>
              <td><input type="radio" name="Tanggapan29a" value="4"></td>
              <td><input type="radio" name="Tanggapan29a" value="5"></td>             
            </tr>
            <tr align="center">
              <td> 2 </td>
              <td align="left"> Pembelajaran lanjut dalam pekerjaan?</td>
              <td><input type="radio" name="Tanggapan29b" value="1"></td>
              <td><input type="radio" name="Tanggapan29b" value="2"></td>
              <td><input type="radio" name="Tanggapan29b" value="3"></td>
              <td><input type="radio" name="Tanggapan29b" value="4"></td>
              <td><input type="radio" name="Tanggapan29b" value="5"></td>
            </tr>
            <tr align="center">
              <td> 3 </td>
              <td align="left">Kinerja dalam menjalankan tugas?</td>
              <td><input type="radio" name="Tanggapan29c" value="1"></td>
              <td><input type="radio" name="Tanggapan29c" value="2"></td>
              <td><input type="radio" name="Tanggapan29c" value="3"></td>
              <td><input type="radio" name="Tanggapan29c" value="4"></td>
              <td><input type="radio" name="Tanggapan29c" value="5"></td>
            </tr>
            <tr align="center">
              <td> 4 </td>
              <td align="left"> Karir di masa depan?</td>
              <td><input type="radio" name="Tanggapan29d" value="1"></td>
              <td><input type="radio" name="Tanggapan29d" value="2"></td>
              <td><input type="radio" name="Tanggapan29d" value="3"></td>
              <td><input type="radio" name="Tanggapan29d" value="4"></td>
              <td><input type="radio" name="Tanggapan29d" value="5"></td>
            </tr>
            <tr align="center">
              <td> 5 </td>
              <td align="left">Pengembangan diri? </td>              
              <td><input type="radio" name="Tanggapan29e" value="1"></td>
              <td><input type="radio" name="Tanggapan29e" value="2"></td>
              <td><input type="radio" name="Tanggapan29e" value="3"></td>
              <td><input type="radio" name="Tanggapan29e" value="4"></td>
              <td><input type="radio" name="Tanggapan29e" value="5"></td>
            </tr>
            <tr align="center">
              <td> 6 </td>
              <td align="left"> Meningkatkan ketrampilan kewirausahaan?</td> 
              <td><input type="radio" name="Tanggapan29f" value="1"></td>
              <td><input type="radio" name="Tanggapan29f" value="2"></td>
              <td><input type="radio" name="Tanggapan29f" value="3"></td>
              <td><input type="radio" name="Tanggapan29f" value="4"></td>
              <td><input type="radio" name="Tanggapan29f" value="5"></td>
            </tr>
          </table>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">30. Dalam skala satu sampai lima, beberapa erat kaitan antara bidang studi dengan pekerjaan anda?</span>
          <br>
            <tr>
              <td><input type="radio" name="Tanggapan30" value="1"></td> 1<br>
              <td><input type="radio" name="Tanggapan30" value="2"></td> 2<br>
              <td><input type="radio" name="Tanggapan30" value="3"></td> 3<br>
              <td><input type="radio" name="Tanggapan30" value="4"></td> 4<br>
              <td><input type="radio" name="Tanggapan30" value="5"></td> 5<br>
            </tr>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300">31. Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya?</span>
          <br>
            <tr>
              <td><input type="radio" name="Tanggapan31" value="Pekerjaan saya sekarang sudah sesuai dengan pendidikan saya"></td> Pekerjaan saya sekarang sudah sesuai dengan pendidikan saya<br>
              <td><input type="radio" name="Tanggapan31" value="Saya belum mendapatkan pekerjaan yang lebih sesuai"></td> Saya belum mendapatkan pekerjaan yang lebih sesuai<br>
              <td><input type="radio" name="Tanggapan31" value="Di pekerjaan ini saya memperoleh prospek karir yang baik"></td> Di pekerjaan ini saya memperoleh prospek karir yang baik<br>
              <td><input type="radio" name="Tanggapan31" value="Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya"></td> Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya<br>
              <td><input type="radio" name="Tanggapan31" value="Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan dibanding posisi sebelumnya"></td> Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan dibanding posisi sebelumnya<br>
              <td><input type="radio" name="Tanggapan31" value="Saya dapat memperoleh pendapatan yang lebih tinggi di pekerjaan ini"></td> Saya dapat memperoleh pendapatan yang lebih tinggi di pekerjaan ini<br>
              <td><input type="radio" name="Tanggapan31" value="Pekerjaan saya saat ini lebih aman/terjamin/secure"></td> Pekerjaan saya saat ini lebih aman/terjamin/secure<br>
              <td><input type="radio" name="Tanggapan31" value="Pekerjaan saya saat ini lebih menarik"></td> Pekerjaan saya saat ini lebih menarik<br>
              <td><input type="radio" name="Tanggapan31" value="Pekerjaan saya saat ini lebih memungkinkan saya mengambil"></td> Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel<br>
              <td><input type="radio" name="Tanggapan31" value="Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya"></td>Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya<br>  
              <td><input type="radio" name="Tanggapan31" value="Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya"></td> Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya<br>
              <td><input type="radio" name="Tanggapan31" value="ada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya"></td> Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya<br>
              <td><input class="rd" type="radio" name="Tanggapan31" id="radio-1" value="Lainnya" checked= /><input type="text" class="tb" name="tb1"  placeholder=" Lainnya" /></td>
            </tr> 
          </div>

          <div class="container-contact100-form-btn">
            <button class="btn btn-secondary btn-lg contact100-form" >
              <span>
              Submit
              <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
            </span>
          </button>          </div>
      </form>
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