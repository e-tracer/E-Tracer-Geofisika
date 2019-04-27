<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kuisioner | Admin</title>
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
    <link rel="stylesheet" href="{{asset('deded/css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{asset('deded/css/data-table/bootstrap-editable.css')}}">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('deded/css/normalize.css')}}">
    <!-- charts CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('deded/css/c3.min.css')}}">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('deded/style.css')}}">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('deded/css/responsive.css')}}">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{asset('deded/js/vendor/modernizr-2.8.3.min.js')}}"></script>
     <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/refo/main1.css')}}">
    <link rel="stylesheet" href="{{asset('css/refo/util.css')}}">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 

</head>

<body class="materialdesign">
    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-14">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                            <h1>Kuisioner Utama</h1>
                                             @foreach($kuisUtama as $k)
                                        
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">

                                     <div class="container" >
                                        <div class="wrap-contact100">
                                            <form class=" contact100-form validate-form">
                                               
                                                 <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt;">1. Seberapa besar alasan-alasan di bawah ini menyebabkan ketidaktepatan masa studi anda?</span>
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
                <td><center><input type="radio" name="Tanggapan1a" value="1" {{ ($k->pertanyaan11=="1")? "checked" : "" }}> </center></td>
                <td><center><input type="radio" name="Tanggapan1a" value="2" {{ ($k->pertanyaan11=="2")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1a" value="3" {{ ($k->pertanyaan11=="3")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1a" value="4" {{ ($k->pertanyaan11=="4")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1a" value="5" {{ ($k->pertanyaan11=="5")? "checked" : "" }}></center></td>              
              </tr>
              <tr align="center">
                <td> 2 </td>
                <td align="left"> Tidak lulus ujian</td>
                <td><center><input type="radio" name="Tanggapan1b" value="1" {{ ($k->pertanyaan12=="1")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1b" value="2" {{ ($k->pertanyaan12=="2")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1b" value="3" {{ ($k->pertanyaan12=="3")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1b" value="4" {{ ($k->pertanyaan12=="4")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1b" value="5" {{ ($k->pertanyaan12=="5")? "checked" : "" }}></center></td>
              </tr>
              <tr align="center">
                <td> 3 </td>
                <td align="left"> Penulisan skripsi lambat </td>
                <td><center><input type="radio" name="Tanggapan1c" value="1" {{ ($k->pertanyaan13=="1")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1c" value="2" {{ ($k->pertanyaan13=="2")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1c" value="3" {{ ($k->pertanyaan13=="3")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1c" value="4" {{ ($k->pertanyaan13=="4")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1c" value="5" {{ ($k->pertanyaan13=="5")? "checked" : "" }}></center></td>
              </tr>
              <tr align="center">
                <td> 4 </td>
                <td align="left"> Alasan keluarga</td>
                <td><center><input type="radio" name="Tanggapan1d" value="1" {{ ($k->pertanyaan14=="1")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1d" value="2" {{ ($k->pertanyaan14=="2")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1d" value="3" {{ ($k->pertanyaan14=="3")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1d" value="4" {{ ($k->pertanyaan14=="4")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1d" value="5" {{ ($k->pertanyaan14=="5")? "checked" : "" }}></center></td>
              </tr>
              <tr align="center">
                <td> 5 </td>
                <td align="left"> Kesehatan </td>              
                <td><center><input type="radio" name="Tanggapan1e" value="1" {{ ($k->pertanyaan15=="1")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1e" value="2" {{ ($k->pertanyaan15=="2")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1e" value="3" {{ ($k->pertanyaan15=="3")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1e" value="4" {{ ($k->pertanyaan15=="4")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1e" value="5" {{ ($k->pertanyaan15=="5")? "checked" : "" }}></center></td>
              </tr>
              <tr align="center">
                <td> 6 </td>
                <td align="left"> Kegiatan Mahasiswa / Ekstrakulikuler</td>        
                <td><center><input type="radio" name="Tanggapan1f" value="1" {{ ($k->pertanyaan16=="1")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1f" value="2" {{ ($k->pertanyaan16=="2")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1f" value="3" {{ ($k->pertanyaan16=="3")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1f" value="4" {{ ($k->pertanyaan16=="4")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1f" value="5" {{ ($k->pertanyaan16=="5")? "checked" : "" }}></center></td>
              </tr>
              <tr align="center">
                <td> 7 </td>
                <td align="left"> Hobby </td>              
                <td><center><input type="radio" name="Tanggapan1g" value="1" {{ ($k->pertanyaan17=="1")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1g" value="2" {{ ($k->pertanyaan17=="2")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1g" value="3" {{ ($k->pertanyaan17=="3")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1g" value="4" {{ ($k->pertanyaan17=="4")? "checked" : "" }}></center></td>
                <td><center><input type="radio" name="Tanggapan1g" value="5" {{ ($k->pertanyaan17=="5")? "checked" : "" }}></center></td>  
              </tr>
            </table>
        </div>
      

      <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt; text-align: left;" >2. Menurut Anda seberapa besar penekanan pada aspek-aspek pembelajaran di bawah ini dilaksanakan di program studi anda</span>
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
              <td><center><input type="radio" name="Tanggapan2a" value="1" {{ ($k->pertanyaan21=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan2a" value="2" {{ ($k->pertanyaan21=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan2a" value="3" {{ ($k->pertanyaan21=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan2a" value="4" {{ ($k->pertanyaan21=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan2a" value="5" {{ ($k->pertanyaan21=="5")? "checked" : "" }}></center></td>              
            </tr>
            <tr align="center">
              <td> 2 </td>
              <td align="left"> Demonstrasi(Peragaan) </td>
              <td><center><input type="radio" name="Tanggapan2b" value="1" {{ ($k->pertanyaan22=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan2b" value="2" {{ ($k->pertanyaan22=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan2b" value="3" {{ ($k->pertanyaan22=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan2b" value="4" {{ ($k->pertanyaan22=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan2b" value="5" {{ ($k->pertanyaan22=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 3 </td>
              <td align="left"> Partisipasi dalam proyek riset </td>
              <td><center><input type="radio" name="Tanggapan2c" value="1" {{ ($k->pertanyaan23=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan2c" value="2" {{ ($k->pertanyaan23=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan2c" value="3" {{ ($k->pertanyaan23=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan2c" value="4" {{ ($k->pertanyaan23=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan2c" value="5" {{ ($k->pertanyaan23=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 4 </td>
              <td align="left"> Magang</td>
              <td><center><input type="radio" name="Tanggapan2d" value="1"  {{ ($k->pertanyaan24=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan2d" value="2"  {{ ($k->pertanyaan24=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan2d" value="3"  {{ ($k->pertanyaan24=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan2d" value="4"  {{ ($k->pertanyaan24=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan2d" value="5"  {{ ($k->pertanyaan24=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 5 </td>
              <td align="left"> Praktikum Kerja Lapangan </td>             
              <td><center><input type="radio" name="Tanggapan2e" value="1"  {{ ($k->pertanyaan25=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan2e" value="2"  {{ ($k->pertanyaan25=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan2e" value="3"  {{ ($k->pertanyaan25=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan2e" value="4"  {{ ($k->pertanyaan25=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan2e" value="5"  {{ ($k->pertanyaan25=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 6 </td>
              <td align="left"> Diskusi</td> 
              <td><center><input type="radio" name="Tanggapan2f" value="1"  {{ ($k->pertanyaan26=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan2f" value="2"  {{ ($k->pertanyaan26=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan2f" value="3"  {{ ($k->pertanyaan26=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan2f" value="4"  {{ ($k->pertanyaan26=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan2f" value="5"  {{ ($k->pertanyaan26=="5")? "checked" : "" }}></center></td>
            </tr>    
          </table>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt;">3. Selama kuliah, kebanyakan Anda tinggal... </span>
          <input class="input100" type="text" name="Tanggapan3" placeholder="Answer Here...." value="{{ $k->pertanyaan3 }}" >
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt;">4. Siapa yang  terutama membayar uang kuliah anda?..</span>
          <input class="input100" type="text" name="Tanggapan4" placeholder="Answer Here...." value="{{ $k->pertanyaan4 }}" >
        </div>

         <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt;">5. Dalam skala 1 sampai 5, seberapa aktif anda di organisasi?</span>
          <input class="input100" type="text" name="Tanggapan5" placeholder="Answer Here...." value="{{ $k->pertanyaan5 }}" >
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt; text-align: left;">6. Pada saat Anda kuliah di perguruan tinggi, apakah Anda mengambil kursus atau pendidikan tambahan?</span>
          <input class="input100" type="text" name="Tanggapan5" placeholder="Answer Here...." value="{{ $k->pertanyaan6 }}" >
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt; text-align: left;">7. Dalam skala 1 sampai 5, bagaimana penilaian Anda terhadap aspek belajar mengajar di bawah ini?</span>
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
              <td><center><input type="radio" name="Tanggapan7a" value="1" {{ ($k->pertanyaan71=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan7a" value="2" {{ ($k->pertanyaan71=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan7a" value="3" {{ ($k->pertanyaan71=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan7a" value="4" {{ ($k->pertanyaan71=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan7a" value="5" {{ ($k->pertanyaan71=="5")? "checked" : "" }}></center></td>              
            </tr>
            <tr align="center">
              <td> 2 </td>
              <td align="left"> Pembimbingan akademik</td>
              <td><center><input type="radio" name="Tanggapan7b" value="1"  {{ ($k->pertanyaan72=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan7b" value="2"  {{ ($k->pertanyaan72=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan7b" value="3"  {{ ($k->pertanyaan72=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan7b" value="4"  {{ ($k->pertanyaan72=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan7b" value="5"  {{ ($k->pertanyaan72=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 3 </td>
              <td align="left"> Kesempatan berpartisipasi dalam proyek riset </td>
              <td><center><input type="radio" name="Tanggapan7c" value="1" {{ ($k->pertanyaan73=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan7c" value="2" {{ ($k->pertanyaan73=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan7c" value="3" {{ ($k->pertanyaan73=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan7c" value="4" {{ ($k->pertanyaan73=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan7c" value="5" {{ ($k->pertanyaan73=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 4 </td>
              <td align="left"> Kondisi umum belajar mengajar</td>
              <td><center><input type="radio" name="Tanggapan7d" value="1" {{ ($k->pertanyaan74=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan7d" value="2" {{ ($k->pertanyaan74=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan7d" value="3" {{ ($k->pertanyaan74=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan7d" value="4" {{ ($k->pertanyaan74=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan7d" value="5" {{ ($k->pertanyaan74=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 5 </td>
              <td align="left"> Kondisi Umum Belajar Mengajar</td>             
              <td><center><input type="radio" name="Tanggapan7e" value="1" {{ ($k->pertanyaan75=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan7e" value="2" {{ ($k->pertanyaan75=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan7e" value="3" {{ ($k->pertanyaan75=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan7e" value="4" {{ ($k->pertanyaan75=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan7e" value="5" {{ ($k->pertanyaan75=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 6 </td>
              <td align="left"> Kesempatan untuk memasuki dan menjadi bagian dari jejaring ilmuan profesional</td> 
              <td><center><input type="radio" name="Tanggapan7f" value="1" {{ ($k->pertanyaan75=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan7f" value="2" {{ ($k->pertanyaan75=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan7f" value="3" {{ ($k->pertanyaan75=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan7f" value="4" {{ ($k->pertanyaan75=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan7f" value="5" {{ ($k->pertanyaan75=="5")? "checked" : "" }}></center></td>
            </tr>  
          </table>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt; text-align: left;">8. Bagaimana penilaian Anda terhadap kondisi fasilitas belajar di bawah ini?</span>
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
              <td><center><input type="radio" name="Tanggapan8a" value="1" {{ ($k->pertanyaan81=="1")? "checked" : "" }}></td>
              <td><center><input type="radio" name="Tanggapan8a" value="2" {{ ($k->pertanyaan81=="2")? "checked" : "" }}></td>
              <td><center><input type="radio" name="Tanggapan8a" value="3" {{ ($k->pertanyaan81=="3")? "checked" : "" }}></td>
              <td><center><input type="radio" name="Tanggapan8a" value="4" {{ ($k->pertanyaan81=="4")? "checked" : "" }}></td>
              <td><center><input type="radio" name="Tanggapan8a" value="5" {{ ($k->pertanyaan81=="5")? "checked" : "" }}></td>              
            </tr>
            <tr align="center">
              <td> 2 </td>
              <td align="left"> Teknologi informasi dan komunikasi</td>
              <td><center><input type="radio" name="Tanggapan8b" value="1" {{ ($k->pertanyaan82=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8b" value="2" {{ ($k->pertanyaan82=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8b" value="3" {{ ($k->pertanyaan82=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8b" value="4" {{ ($k->pertanyaan82=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8b" value="5" {{ ($k->pertanyaan82=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 3 </td>
              <td align="left">Modul belajar</td>
              <td><center><input type="radio" name="Tanggapan8c" value="1" {{ ($k->pertanyaan83=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8c" value="2" {{ ($k->pertanyaan83=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8c" value="3" {{ ($k->pertanyaan83=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8c" value="4" {{ ($k->pertanyaan83=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8c" value="5" {{ ($k->pertanyaan83=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 4 </td>
              <td align="left"> Ruang belajar</td>
              <td><center><input type="radio" name="Tanggapan8d" value="1" {{ ($k->pertanyaan84=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8d" value="2" {{ ($k->pertanyaan84=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8d" value="3" {{ ($k->pertanyaan84=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8d" value="4" {{ ($k->pertanyaan84=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8d" value="5" {{ ($k->pertanyaan84=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 5 </td>
              <td align="left">Laboratorium  </td>             
              <td><center><input type="radio" name="Tanggapan8e" value="1" {{ ($k->pertanyaan85=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8e" value="2" {{ ($k->pertanyaan85=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8e" value="3" {{ ($k->pertanyaan85=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8e" value="4" {{ ($k->pertanyaan85=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8e" value="5" {{ ($k->pertanyaan85=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 6 </td>
              <td align="left"> Variasi mata kuliah yang ditawarkan</td> 
              <td><center><input type="radio" name="Tanggapan8f" value="1"  {{ ($k->pertanyaan86=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8f" value="2"  {{ ($k->pertanyaan86=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8f" value="3"  {{ ($k->pertanyaan86=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8f" value="4"  {{ ($k->pertanyaan86=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8f" value="5"  {{ ($k->pertanyaan86=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 7 </td>
              <td align="left"> Akomodasi</td> 
              <td><center><input type="radio" name="Tanggapan8g" value="1" {{ ($k->pertanyaan87=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8g" value="2" {{ ($k->pertanyaan87=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8g" value="3" {{ ($k->pertanyaan87=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8g" value="4" {{ ($k->pertanyaan87=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8g" value="5" {{ ($k->pertanyaan87=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 8 </td>
              <td align="left"> Kantin</td>  
              <td><center><input type="radio" name="Tanggapan8h" value="1" {{ ($k->pertanyaan88=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8h" value="2" {{ ($k->pertanyaan88=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8h" value="3" {{ ($k->pertanyaan88=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8h" value="4" {{ ($k->pertanyaan88=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8h" value="5" {{ ($k->pertanyaan88=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 9 </td>
              <td align="left"> Pusat kegiatan mahasiswa dan fasilitasnya, ruang rekreasi</td> 
              <td><center><input type="radio" name="Tanggapan8i" value="1" {{ ($k->pertanyaan89=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8i" value="2" {{ ($k->pertanyaan89=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8i" value="3" {{ ($k->pertanyaan89=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8i" value="4" {{ ($k->pertanyaan89=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan8i" value="5" {{ ($k->pertanyaan89=="5")? "checked" : "" }}></center></td>
            </tr>
          </table>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt; text-align: left;">9. Kapan Anda mulai mencari pekerjaan? (mohon pekerjaan sambilan tidak dimasukkan) </span>
          <input class="input100" type="text" name="Tanggapan9" placeholder="Answer Here...." value="{{ $k->pertanyaan9 }}" >
        </div>

        <div class="wrap-input100 " style="float: left; font-size: 12pt; text-align: left;">
          <span class="label-input300">10. Bagaimana Anda mencari pekerjaan setelah lulus? (Jawaban bisa lebih dari satu) </span>
          <input class="input100" type="text" name="Tanggapan10" placeholder="Answer Here...." value="{{ $k->pertanyaan10 }}" >
        </div>

        <div class="wrap-input100 " style="float: left; font-size: 12pt; text-align: left;">
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
              <td><center><input type="radio" name="Tanggapan11a" value="1" {{ ($k->pertanyaan111=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11a" value="2" {{ ($k->pertanyaan111=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11a" value="3" {{ ($k->pertanyaan111=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11a" value="4" {{ ($k->pertanyaan111=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11a" value="5" {{ ($k->pertanyaan111=="5")? "checked" : "" }}></center></td>             
            </tr>
            <tr align="center">
              <td> 2 </td>
              <td align="left"> Spesialisasi</td>
              <td><center><center><input type="radio" name="Tanggapan11b" value="1" {{ ($k->pertanyaan112=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11b" value="2" {{ ($k->pertanyaan112=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11b" value="3" {{ ($k->pertanyaan112=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11b" value="4" {{ ($k->pertanyaan112=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11b" value="5" {{ ($k->pertanyaan112=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 3 </td>
              <td align="left">IPK</td>
              <td><center><input type="radio" name="Tanggapan11c" value="1" {{ ($k->pertanyaan113=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11c" value="2" {{ ($k->pertanyaan113=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11c" value="3" {{ ($k->pertanyaan113=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11c" value="4" {{ ($k->pertanyaan113=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11c" value="5" {{ ($k->pertanyaan113=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 4 </td>
              <td align="left"> Pengalaman kerja selama kuliah</td>
              <td><center><input type="radio" name="Tanggapan11d" value="1" {{ ($k->pertanyaan114=="1")? "checked" : "" }}></center></td>
              <td><center><center><input type="radio" name="Tanggapan11d" value="2" {{ ($k->pertanyaan114=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11d" value="3" {{ ($k->pertanyaan114=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11d" value="4" {{ ($k->pertanyaan114=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11d" value="5" {{ ($k->pertanyaan114=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 5 </td>
              <td align="left">Reputasi dari perguruan tinggi </td>              
              <td><center><input type="radio" name="Tanggapan11e" value="1" {{ ($k->pertanyaan115=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11e" value="2" {{ ($k->pertanyaan115=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11e" value="3" {{ ($k->pertanyaan115=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11e" value="4" {{ ($k->pertanyaan115=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11e" value="5" {{ ($k->pertanyaan115=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 6 </td>
              <td align="left"> Pengalaman ke luar negeri(untuk bekerja atau magang)</td>  
              <td><center><input type="radio" name="Tanggapan11f" value="1" {{ ($k->pertanyaan116=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11f" value="2" {{ ($k->pertanyaan116=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11f" value="3" {{ ($k->pertanyaan116=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11f" value="4" {{ ($k->pertanyaan116=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11f" value="5" {{ ($k->pertanyaan116=="5")? "checked" : "" }}></center></td>
            </tr>
    
            <tr align="center">
              <td> 7 </td>
              <td align="left"> Kemampuan bahasa Inggris</td>  
              <td><center><input type="radio" name="Tanggapan11g" value="1" {{ ($k->pertanyaan117=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11g" value="2" {{ ($k->pertanyaan117=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11g" value="3" {{ ($k->pertanyaan117=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11g" value="4" {{ ($k->pertanyaan117=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11g" value="5" {{ ($k->pertanyaan117=="5")? "checked" : "" }}></center></td>
            </tr>
            
            <tr align="center">
              <td> 8 </td>
              <td align="left"> Pengoperasian Komputer</td>  
              <td><center><input type="radio" name="Tanggapan11h" value="1" {{ ($k->pertanyaan118=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11h" value="2" {{ ($k->pertanyaan118=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11h" value="3" {{ ($k->pertanyaan118=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11h" value="4" {{ ($k->pertanyaan118=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11h" value="5" {{ ($k->pertanyaan118=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 9 </td>
              <td align="left"> Pengalaman berorganisasi</td>  
              <td><center><input type="radio" name="Tanggapan11i" value="1" {{ ($k->pertanyaan119=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11i" value="2" {{ ($k->pertanyaan119=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11i" value="3" {{ ($k->pertanyaan119=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11i" value="4" {{ ($k->pertanyaan119=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11i" value="5" {{ ($k->pertanyaan119=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 10 </td>
              <td align="left"> Rekomendasi dari pihak ketiga</td> 
              <td><center><input type="radio" name="Tanggapan11j" value="1" {{ ($k->pertanyaan1110=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11j" value="2" {{ ($k->pertanyaan1110=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11j" value="3" {{ ($k->pertanyaan1110=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11j" value="4" {{ ($k->pertanyaan1110=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11j" value="5" {{ ($k->pertanyaan1110=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 11 </td>
              <td align="left"> Kepribadian dan keterampilan interpersonal</td>  
              <td><center><input type="radio" name="Tanggapan11k" value="1" {{ ($k->pertanyaan1111=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11k" value="2" {{ ($k->pertanyaan1111=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11k" value="3" {{ ($k->pertanyaan1111=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11k" value="4" {{ ($k->pertanyaan1111=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan11k" value="5" {{ ($k->pertanyaan1111=="2")? "checked" : "" }}></center></td>
            </tr>
          </table>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt; text-align: left;">12. Berapa perusahaan/instansi/institusi yang sudah Anda lamar (lewat surat atau e-mail) sebelum Anda memperoleh pekerjaan pertama? </span>
          <input class="input100" type="text" name="Tanggapan12" placeholder="Answer Here...." value="{{ $k->pertanyaan12 }}" >
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt; text-align: left;">13. Berapa bulan waktu yang dihabiskan(sebelum dan sesudah kelulusan) untuk memperoleh pekerjaan pertama?</span>
          <input class="input100" type="text" name="Tanggapan13" placeholder="Answer Here...." value="{{ $k->pertanyaan13 }}" >
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt; text-align: left;">14. Melalui apa Anda mendapatkan pekerjaan pertama? </span>
          <input class="input100" type="text" name="Tanggapan14" placeholder="Answer Here...." value="{{ $k->pertanyaan14 }}" >
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt; text-align: left;">15. Aspek apa yang menjadi pertimbangan utama anda dalam memilih pekerjaan pertama </span>
          <input class="input100" type="text" name="Tanggapan15" placeholder="Answer Here...." value="{{ $k->pertanyaan15 }}" >
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt; text-align: left;">16. Jenis kursus apa yang Anda ambil SETELAH Anda lulus dari perguruan tinggi ( jawaban bisa lebih dari satu)</span>
          <input class="input100" type="text" name="Tanggapan16" placeholder="Answer Here...." value="{{ $k->pertanyaan16 }}" >
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt; text-align: left;">17. Apakah Anda merasa perlu untuk meningkatkan kompetensi Andan dengan mengambil kursus lagi? </span>
          <input class="input100" type="text" name="Tanggapan17" placeholder="Answer Here...." value="{{ $k->pertanyaan17 }}" >
        </div>

         <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt; text-align: left;">18. Bagaimana anda menggambarkan situasi anda saat ini? </span>
          <input class="input100" type="text" name="Tanggapan18" placeholder="Answer Here...." value="{{ $k->pertanyaan18 }}" >
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt; text-align: left;">19. Berapa perusahaan/instansi/institusi yang telah anda masuki untuk bekerja(termasuk perusahaan sendiri) sejak anda lulus?</span>
          <input class="input100" type="text" name="Tanggapan19" placeholder="Answer Here...." value="{{ $k->pertanyaan19 }}">
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt; text-align: left;">20. Apa jenis perusahaan/instansi/institusi tempat Anda bekerja sekarang?</span>
          <input class="input100" type="text" name="Tanggapan20" placeholder="Answer Here...." value="{{ $k->pertanyaan20 }}">
        </div>


        <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt; text-align: left;">21. Jelaskan tugas-tugas utama dalam pekerjaan anda sekarang?</span>
          <input class="input100" type="text" name="Tanggapan21" placeholder="Answer Here...." value="{{ $k->pertanyaan21 }}" >
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt; text-align: left;">22. Berapa jam rata-rata perminggu Anda bekerja?</span>
          <input class="input100" type="text" name="Tanggapan22" placeholder="Answer Here...." value="{{ $k->pertanyaan22 }}" >
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt; text-align: left;">23. Jika Anda menjalanan perusahaan sendiri, apa jenis/usaha yang sedang Anda jalani saat ini? (Jika tidak memiliki perusahaan sendiri maka tidak perlu diisi)
          <input class="input100" type="text" name="Tanggapan23" placeholder="Answer Here...."  value="{{ $k->pertanyaan23 }}" >
        </div>


        <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt; text-align: left;">24. Pada saat lulus, bagaimana kontribusi perguruan tinggi dalam hal kompetensi di bawah ini? Dalam skala 1 sampai 5, pada tingkat mana kompetensi di bawah ini Anda kuasai?</span>
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
              <td><input type="radio"  value="1" {{ $k->pertanyaan241 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan241 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan241 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan241 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan241 == '5' ? 'checked' : '' }}></td>

            </tr>
            <tr align="center">
              <td> 2 </td>
              <td align="left"> Pengetahuan di luar bidang atau disiplin ilmu anda</td>
              <td><input type="radio"  value="1" {{ $k->pertanyaan242 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan242 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan242 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan242 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan242 == '5' ? 'checked' : '' }}></td>
            </tr>
            <tr align="center">
              <td> 3 </td>
              <td align="left">Pengetahuan umum</td>
              <td><input type="radio"  value="1" {{ $k->pertanyaan243 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan243 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan243 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan243 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan243 == '5' ? 'checked' : '' }}></td>
            </tr>
            <tr align="center">
              <td> 4 </td>
              <td align="left"> Ketrampilan internet</td>
              <td><input type="radio"  value="1" {{ $k->pertanyaan244 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan244 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan244 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan244 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan244 == '5' ? 'checked' : '' }}></td>
            </tr>
            <tr align="center">
              <td> 5 </td>
              <td align="left">Ketrampilan komputer </td>              
              <td><input type="radio"  value="1" {{ $k->pertanyaan245 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan245 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan245 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan245 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan245 == '5' ? 'checked' : '' }}></td>
            </tr>
            <tr align="center">
              <td> 6 </td>
              <td align="left"> Berpikir kritis</td> 
              <td><input type="radio"  value="1" {{ $k->pertanyaan246 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan246 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan246 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan246 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan246 == '5' ? 'checked' : '' }}></td>
            </tr>
    
            <tr align="center">
              <td> 7 </td>
              <td align="left"> Keterampilan riset</td> 
              <td><input type="radio"  value="1" {{ $k->pertanyaan247 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan247 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan247 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan247 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan247 == '5' ? 'checked' : '' }}></td>
            </tr>
            
            <tr align="center">
              <td> 8 </td>
              <td align="left"> Kemampuan belajar</td> 
              <td><input type="radio"  value="1" {{ $k->pertanyaan248 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan248 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan248 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan248 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan248 == '5' ? 'checked' : '' }}></td>
            </tr>
            
            <tr align="center">
              <td> 9 </td>
              <td align="left"> Kemampuan berkomunikasi</td> 
              <td><input type="radio"  value="1" {{ $k->pertanyaan249 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan249 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan249 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan249 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan249 == '5' ? 'checked' : '' }}></td>
            </tr>
            
            <tr align="center">
              <td> 10 </td>
              <td align="left"> Bekerja di bawah tekanan</td>  
              <td><input type="radio"  value="1" {{ $k->pertanyaan2410 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2410 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2410 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2410 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2410 == '5' ? 'checked' : '' }}></td>
            </tr>

            <tr align="center">
              <td> 11 </td>
              <td align="left"> Manajemen waktu</td> 
              <td><input type="radio"  value="1" {{ $k->pertanyaan2411 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2411 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2411 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2411 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2411 == '5' ? 'checked' : '' }}></td>

            </tr>
            <tr align="center">
              <td> 12 </td>
              <td align="left"> Bekerja secara mandiri</td>  
              <td><input type="radio"  value="1" {{ $k->pertanyaan2412 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2412 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2412 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2412 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2412 == '5' ? 'checked' : '' }}></td>
            </tr>
            
            <tr align="center">
              <td> 13 </td>
              <td align="left"> Bekejra dalam tim/bekerjasama dengan orang lain</td> 
              <td><input type="radio"  value="1" {{ $k->pertanyaan2413 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2413 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2413 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2413 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2413 == '5' ? 'checked' : '' }}></td>
            </tr>

            <tr align="center">
              <td> 14 </td>
              <td align="left">Kemampuan dalam memecahkan masalah</td> 
              <td><input type="radio"  value="1" {{ $k->pertanyaan2414 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2414 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2414 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2414 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2414 == '5' ? 'checked' : '' }}></td>
            </tr>

            <tr align="center">
              <td> 15 </td>
              <td align="left">Negosiasi</td>  
              <td><input type="radio"  value="1" {{ $k->pertanyaan2415 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2415 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2415 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2415 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2415 == '5' ? 'checked' : '' }}></td>
            </tr>
            <tr>
            <tr align="center">
              <td> 16 </td>
              <td align="left"> Kemampuan analisis</td>  
              <td><input type="radio"  value="1" {{ $k->pertanyaan2416 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2416 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2416 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2416 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2416 == '5' ? 'checked' : '' }}></td>
            </tr>
            <tr align="center">
              <td> 17 </td>
              <td align="left"> Toleransi </td>  
              <td><input type="radio"  value="1" {{ $k->pertanyaan2417 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2417 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2417 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2417 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2417 == '5' ? 'checked' : '' }}></td>
            </tr>
            
            <tr align="center">
              <td> 18 </td>
              <td align="left"> Kemampuan adaptasi</td>  
              <td><input type="radio"  value="1" {{ $k->pertanyaan2418 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2418 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2418 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2418 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2418 == '5' ? 'checked' : '' }}></td>
            </tr>

            <tr align="center">
              <td> 19 </td>
              <td align="left"> Loyalitas dan integritas</td>  
              <td><input type="radio"  value="1" {{ $k->pertanyaan2419 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2419 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2419 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2419 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2419 == '5' ? 'checked' : '' }}></td>
            </tr>
            <tr align="center">
              <td> 20 </td>
              <td align="left"> Bekerja dengan orang yang berbeda budaya maupun latar belakang</td>  
              <td><input type="radio"  value="1" {{ $k->pertanyaan2420 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2420 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2420 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2420 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2420 == '5' ? 'checked' : '' }}></td>
            </tr>
            
            <tr align="center">
              <td> 21 </td>
              <td align="left"> Kepemimpinan</td>  
              <td><input type="radio"  value="1" {{ $k->pertanyaan2421 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2421 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2421 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2421 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2421 == '5' ? 'checked' : '' }}></td>
            </tr>

            <tr align="center">
              <td> 22 </td>
              <td align="left">Kemampuan dalam memegang tanggung jawab</td>  
              <td><input type="radio"  value="1" {{ $k->pertanyaan2422 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2422 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2422 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2422 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2422 == '5' ? 'checked' : '' }}></td>
            </tr>
            <tr align="center">
              <td> 23 </td>
              <td align="left"> Inisiatif</td> 
              <td><input type="radio"  value="1" {{ $k->pertanyaan2423 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2423 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2423 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2423 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2423 == '5' ? 'checked' : '' }}></td>
            </tr>
            <tr align="center">
              <td> 24 </td>
              <td align="left"> Manajemen proyek/program</td>  
              <td><input type="radio" value="1" {{ $k->pertanyaan2424 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio" value="2" {{ $k->pertanyaan2424 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio" value="3" {{ $k->pertanyaan2424 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio" value="4" {{ $k->pertanyaan2424 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio" value="5" {{ $k->pertanyaan2424 == '5' ? 'checked' : '' }}></td>
            </tr>
            
            <tr align="center">
              <td> 25 </td>
              <td align="left"> Kemampuan untuk memresentasikan ide/produk/laporan</td>  
              <td><input type="radio" value="1" {{ $k->pertanyaan2425 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio" value="2" {{ $k->pertanyaan2425 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio" value="3" {{ $k->pertanyaan2425 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio" value="4" {{ $k->pertanyaan2425 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio" value="5" {{ $k->pertanyaan2425 == '5' ? 'checked' : '' }}></td>
            </tr>

            <tr align="center">
              <td> 26 </td>
              <td align="left">Kemampuan dalam menuis laporan, memo, dan dokumen</td>  
              <td><input type="radio" value="1" {{ $k->pertanyaan2426 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio" value="2" {{ $k->pertanyaan2426 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio" value="3" {{ $k->pertanyaan2426 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio" value="4" {{ $k->pertanyaan2426 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio" value="5" {{ $k->pertanyaan2426 == '5' ? 'checked' : '' }}></td>
          </tr>

            <tr align="center">
              <td> 27 </td>
              <td align="left"> Kemampuan untuk terus belajar sepanjang hayat</td> 
              <td><input type="radio" value="1" {{ $k->pertanyaan2427 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio" value="2" {{ $k->pertanyaan2427 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio" value="3" {{ $k->pertanyaan2427 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio" value="4" {{ $k->pertanyaan2427 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio" value="5" {{ $k->pertanyaan2427 == '5' ? 'checked' : '' }}></td>
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
              <td><input type="radio"  value="1" {{ $k->pertanyaan251 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan251 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan251 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan251 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan251 == '5' ? 'checked' : '' }}></td>

            </tr>
            <tr align="center">
              <td> 2 </td>
              <td align="left"> Pengetahuan di luar bidang atau disiplin ilmu anda</td>
              <td><input type="radio"  value="1" {{ $k->pertanyaan252 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan252 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan252 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan252 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan252 == '5' ? 'checked' : '' }}></td>
            </tr>
            <tr align="center">
              <td> 3 </td>
              <td align="left">Pengetahuan umum</td>
              <td><input type="radio"  value="1" {{ $k->pertanyaan253 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan253 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan253 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan253 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan253 == '5' ? 'checked' : '' }}></td>
            </tr>
            <tr align="center">
              <td> 4 </td>
              <td align="left"> Ketrampilan internet</td>
              <td><input type="radio"  value="1" {{ $k->pertanyaan254 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan254 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan254 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan254 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan254 == '5' ? 'checked' : '' }}></td>
            </tr>
            <tr align="center">
              <td> 5 </td>
              <td align="left">Ketrampilan komputer </td>              
              <td><input type="radio"  value="1" {{ $k->pertanyaan255 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan255 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan255 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan255 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan255 == '5' ? 'checked' : '' }}></td>
            </tr>
            <tr align="center">
              <td> 6 </td>
              <td align="left"> Berpikir kritis</td> 
              <td><input type="radio"  value="1" {{ $k->pertanyaan256 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan256 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan256 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan256 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan256 == '5' ? 'checked' : '' }}></td>
            </tr>
    
            <tr align="center">
              <td> 7 </td>
              <td align="left"> Keterampilan riset</td> 
              <td><input type="radio"  value="1" {{ $k->pertanyaan257 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan257 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan257 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan257 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan257 == '5' ? 'checked' : '' }}></td>
            </tr>
            
            <tr align="center">
              <td> 8 </td>
              <td align="left"> Kemampuan belajar</td> 
              <td><input type="radio"  value="1" {{ $k->pertanyaan258 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan258 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan258 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan258 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan258 == '5' ? 'checked' : '' }}></td>
            </tr>
            
            <tr align="center">
              <td> 9 </td>
              <td align="left"> Kemampuan berkomunikasi</td> 
              <td><input type="radio"  value="1" {{ $k->pertanyaan259 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan259 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan259 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan259 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan259 == '5' ? 'checked' : '' }}></td>
            </tr>
            
            <tr align="center">
              <td> 10 </td>
              <td align="left"> Bekerja di bawah tekanan</td>  
              <td><input type="radio"  value="1" {{ $k->pertanyaan2510 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2510 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2510 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2510 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2510 == '5' ? 'checked' : '' }}></td>
            </tr>

            <tr align="center">
              <td> 11 </td>
              <td align="left"> Manajemen waktu</td> 
              <td><input type="radio"  value="1" {{ $k->pertanyaan2511 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2511 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2511 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2511 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2511 == '5' ? 'checked' : '' }}></td>

            </tr>
            <tr align="center">
              <td> 12 </td>
              <td align="left"> Bekerja secara mandiri</td>  
              <td><input type="radio"  value="1" {{ $k->pertanyaan2512 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2512 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2512 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2512 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2512 == '5' ? 'checked' : '' }}></td>
            </tr>
            
            <tr align="center">
              <td> 13 </td>
              <td align="left"> Bekejra dalam tim/bekerjasama dengan orang lain</td> 
              <td><input type="radio"  value="1" {{ $k->pertanyaan2513 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2513 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2513 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2513 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2513 == '5' ? 'checked' : '' }}></td>
            </tr>

            <tr align="center">
              <td> 14 </td>
              <td align="left">Kemampuan dalam memecahkan masalah</td> 
              <td><input type="radio"  value="1" {{ $k->pertanyaan2514 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2514 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2514 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2514 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2514 == '5' ? 'checked' : '' }}></td>
            </tr>

            <tr align="center">
              <td> 15 </td>
              <td align="left">Negosiasi</td>  
              <td><input type="radio"  value="1" {{ $k->pertanyaan2515 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2515 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2515 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2515 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2515 == '5' ? 'checked' : '' }}></td>
            </tr>
            <tr>
            <tr align="center">
              <td> 16 </td>
              <td align="left"> Kemampuan analisis</td>  
              <td><input type="radio"  value="1" {{ $k->pertanyaan2516 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2516 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2516 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2516 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2516 == '5' ? 'checked' : '' }}></td>
            </tr>
            <tr align="center">
              <td> 17 </td>
              <td align="left"> Toleransi </td>  
              <td><input type="radio"  value="1" {{ $k->pertanyaan2517 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2517 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2517 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2517 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2517 == '5' ? 'checked' : '' }}></td>
            </tr>
            
            <tr align="center">
              <td> 18 </td>
              <td align="left"> Kemampuan adaptasi</td>  
              <td><input type="radio"  value="1" {{ $k->pertanyaan2518 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2518 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2518 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2518 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2518 == '5' ? 'checked' : '' }}></td>
            </tr>

            <tr align="center">
              <td> 19 </td>
              <td align="left"> Loyalitas dan integritas</td>  
              <td><input type="radio"  value="1" {{ $k->pertanyaan2519 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2519 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2519 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2519 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2519 == '5' ? 'checked' : '' }}></td>
            </tr>
            <tr align="center">
              <td> 20 </td>
              <td align="left"> Bekerja dengan orang yang berbeda budaya maupun latar belakang</td>  
              <td><input type="radio"  value="1" {{ $k->pertanyaan2520 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2520 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2520 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2520 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2520 == '5' ? 'checked' : '' }}></td>
            </tr>
            
            <tr align="center">
              <td> 21 </td>
              <td align="left"> Kepemimpinan</td>  
              <td><input type="radio"  value="1" {{ $k->pertanyaan2521 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2521 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2521 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2521 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2521 == '5' ? 'checked' : '' }}></td>
            </tr>

            <tr align="center">
              <td> 22 </td>
              <td align="left">Kemampuan dalam memegang tanggung jawab</td>  
              <td><input type="radio"  value="1" {{ $k->pertanyaan2522 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="2" {{ $k->pertanyaan2522 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="3" {{ $k->pertanyaan2522 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="4" {{ $k->pertanyaan2522 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio"  value="5" {{ $k->pertanyaan2522 == '5' ? 'checked' : '' }}></td>
            </tr>
            <tr align="center">
              <td> 23 </td>
              <td align="left"> Inisiatif</td> 
              <td><input type="radio" name="Tanggapan25w" value="1" {{ $k->pertanyaan2523 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio" name="Tanggapan25w" value="2" {{ $k->pertanyaan2523 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio" name="Tanggapan25w" value="3" {{ $k->pertanyaan2523 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio" name="Tanggapan25w" value="4" {{ $k->pertanyaan2523 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio" name="Tanggapan25w" value="5" {{ $k->pertanyaan2523 == '5' ? 'checked' : '' }}></td>
            </tr>
            <tr align="center">
              <td> 24 </td>
              <td align="left"> Manajemen proyek/program</td>  
              <td><input type="radio" name="Tanggapan25x" value="1" {{ $k->pertanyaan2524 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio" name="Tanggapan25x" value="2" {{ $k->pertanyaan2524 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio" name="Tanggapan25x" value="3" {{ $k->pertanyaan2524 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio" name="Tanggapan25x" value="4" {{ $k->pertanyaan2524 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio" name="Tanggapan25x" value="5" {{ $k->pertanyaan2524 == '5' ? 'checked' : '' }}></td>
            </tr>
            
            <tr align="center">
              <td> 25 </td>
              <td align="left"> Kemampuan untuk memresentasikan ide/produk/laporan</td>  
              <td><input type="radio" name="Tanggapan25y" value="1" {{ $k->pertanyaan2525 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio" name="Tanggapan25y" value="2" {{ $k->pertanyaan2525 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio" name="Tanggapan25y" value="3" {{ $k->pertanyaan2525 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio" name="Tanggapan25y" value="4" {{ $k->pertanyaan2525 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio" name="Tanggapan25y" value="5" {{ $k->pertanyaan2525 == '5' ? 'checked' : '' }}></td>
            </tr>

            <tr align="center">
              <td> 26 </td>
              <td align="left">Kemampuan dalam menuis laporan, memo, dan dokumen</td>  
              <td><input type="radio" name="Tanggapan25z" value="1" {{ $k->pertanyaan2526 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio" name="Tanggapan25z" value="2" {{ $k->pertanyaan2526 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio" name="Tanggapan25z" value="3" {{ $k->pertanyaan2526 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio" name="Tanggapan25z" value="4" {{ $k->pertanyaan2526 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio" name="Tanggapan25z" value="5" {{ $k->pertanyaan2526 == '5' ? 'checked' : '' }}></td>
            </tr>
            <tr align="center">
              <td> 27 </td>
              <td align="left"> Kemampuan untuk terus belajar sepanjang hayat</td> 
              <td><input type="radio" name="Tanggapan25aa" value="1" {{ $k->pertanyaan2527 == '1' ? 'checked' : '' }}></td>
              <td><input type="radio" name="Tanggapan25aa" value="2" {{ $k->pertanyaan2527 == '2' ? 'checked' : '' }}></td>
              <td><input type="radio" name="Tanggapan25aa" value="3" {{ $k->pertanyaan2527 == '3' ? 'checked' : '' }}></td>
              <td><input type="radio" name="Tanggapan25aa" value="4" {{ $k->pertanyaan2527 == '4' ? 'checked' : '' }}></td>
              <td><input type="radio" name="Tanggapan25aa" value="5" {{ $k->pertanyaan2527 == '5' ? 'checked' : '' }}></td>
            </tr>
          </table> 
        </div>


                <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt; text-align: left;">26 .Seberapa besar peran kompetensi yang diperoleh di perguruantinggi berikut ini dalam melaksanakan pekerjaan anda</span>
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
              <td><input type="radio" name="Tanggapan24a" value="1" {{ ($k->pertanyaan261=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24a" value="2" {{ ($k->pertanyaan261=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24a" value="3" {{ ($k->pertanyaan261=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24a" value="4" {{ ($k->pertanyaan261=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24a" value="5" {{ ($k->pertanyaan261=="5")? "checked" : "" }}></td>             
            </tr>
            <tr align="center">
              <td> 2 </td>
              <td align="left"> Pengetahuan di luar bidang atau disiplin ilmu anda</td>
              <td><input type="radio" name="Tanggapan24b" value="1" {{ ($k->pertanyaan262=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24b" value="2" {{ ($k->pertanyaan262=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24b" value="3" {{ ($k->pertanyaan262=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24b" value="4" {{ ($k->pertanyaan262=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24b" value="5" {{ ($k->pertanyaan262=="5")? "checked" : "" }}></td>
            </tr>
            <tr align="center">
              <td> 3 </td>
              <td align="left">Pengetahuan umum</td>
              <td><input type="radio" name="Tanggapan24c" value="1" {{ ($k->pertanyaan263=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24c" value="2" {{ ($k->pertanyaan263=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24c" value="3" {{ ($k->pertanyaan263=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24c" value="4" {{ ($k->pertanyaan263=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24c" value="5" {{ ($k->pertanyaan263=="5")? "checked" : "" }}></td>
            </tr>
            <tr align="center">
              <td> 4 </td>
              <td align="left"> Ketrampilan internet</td>
              <td><input type="radio" name="Tanggapan24d" value="1" {{ ($k->pertanyaan264=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24d" value="2" {{ ($k->pertanyaan264=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24d" value="3" {{ ($k->pertanyaan264=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24d" value="4" {{ ($k->pertanyaan264=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24d" value="5" {{ ($k->pertanyaan264=="5")? "checked" : "" }}></td>
            </tr>
            <tr align="center">
              <td> 5 </td>
              <td align="left">Ketrampilan komputer </td>              
              <td><input type="radio" name="Tanggapan24e" value="1" {{ ($k->pertanyaan265=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24e" value="2" {{ ($k->pertanyaan265=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24e" value="3" {{ ($k->pertanyaan265=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24e" value="4" {{ ($k->pertanyaan265=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24e" value="5" {{ ($k->pertanyaan265=="5")? "checked" : "" }}></td>
            </tr>
            <tr align="center">
              <td> 6 </td>
              <td align="left"> Berpikir kritis</td> 
              <td><input type="radio" name="Tanggapan24f" value="1" {{ ($k->pertanyaan266=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24f" value="2" {{ ($k->pertanyaan266=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24f" value="3" {{ ($k->pertanyaan266=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24f" value="4" {{ ($k->pertanyaan266=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24f" value="5" {{ ($k->pertanyaan266=="5")? "checked" : "" }}></td>
            </tr>
    
            <tr align="center">
              <td> 7 </td>
              <td align="left"> Ketrampilan riset</td> 
              <td><input type="radio" name="Tanggapan24g" value="1" {{ ($k->pertanyaan267=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24g" value="2" {{ ($k->pertanyaan267=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24g" value="3" {{ ($k->pertanyaan267=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24g" value="4" {{ ($k->pertanyaan267=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24g" value="5" {{ ($k->pertanyaan267=="5")? "checked" : "" }}></td>
            </tr>
            
            <tr align="center">
              <td> 8 </td>
              <td align="left"> Kemampuan belajar</td> 
              <td><input type="radio" name="Tanggapan24h" value="1" {{ ($k->pertanyaan268=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24h" value="2" {{ ($k->pertanyaan268=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24h" value="3" {{ ($k->pertanyaan268=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24h" value="4" {{ ($k->pertanyaan268=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24h" value="5" {{ ($k->pertanyaan268=="5")? "checked" : "" }}></td>
            </tr>
            
            <tr align="center">
              <td> 9 </td>
              <td align="left"> Kemampuan berkomunikasi</td> 
              <td><input type="radio" name="Tanggapan24i" value="1" {{ ($k->pertanyaan269=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24i" value="2" {{ ($k->pertanyaan269=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24i" value="3" {{ ($k->pertanyaan269=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24i" value="4" {{ ($k->pertanyaan269=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24i" value="5" {{ ($k->pertanyaan269=="5")? "checked" : "" }}></td>
            </tr>
            
            <tr align="center">
              <td> 10 </td>
              <td align="left"> Bekerja di bawah tekanan</td>  
              <td><input type="radio" name="Tanggapan24j" value="1" {{ ($k->pertanyaan2610=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24j" value="2" {{ ($k->pertanyaan2610=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24j" value="3" {{ ($k->pertanyaan2610=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24j" value="4" {{ ($k->pertanyaan2610=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24j" value="5" {{ ($k->pertanyaan2610=="5")? "checked" : "" }}></td>
            </tr>

            <tr align="center">
              <td> 11 </td>
              <td align="left"> Manajemen waktu</td> 
              <td><input type="radio" name="Tanggapan24k" value="1" {{ ($k->pertanyaan2611=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24k" value="2" {{ ($k->pertanyaan2611=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24k" value="3" {{ ($k->pertanyaan2611=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24k" value="4" {{ ($k->pertanyaan2611=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24k" value="5" {{ ($k->pertanyaan2611=="5")? "checked" : "" }}></td>
            </tr>
            <tr align="center">
              <td> 12 </td>
              <td align="left"> Bekerja secara mandiri</td>  
              <td><input type="radio" name="Tanggapan24l" value="1" {{ ($k->pertanyaan2612=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24l" value="2" {{ ($k->pertanyaan2612=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24l" value="3" {{ ($k->pertanyaan2612=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24l" value="4" {{ ($k->pertanyaan2612=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24l" value="5" {{ ($k->pertanyaan2612=="5")? "checked" : "" }}></td>
            </tr>
            
            <tr align="center">
              <td> 13 </td>
              <td align="left"> Bekejra dalam tim/bekerjasama dengan orang lain</td> 
              <td><input type="radio" name="Tanggapan24m" value="1" {{ ($k->pertanyaan2613=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24m" value="2" {{ ($k->pertanyaan2613=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24m" value="3" {{ ($k->pertanyaan2613=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24m" value="4" {{ ($k->pertanyaan2613=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24m" value="5" {{ ($k->pertanyaan2613=="5")? "checked" : "" }}></td>
            </tr>

            <tr align="center">
              <td> 14 </td>
              <td align="left">Kemampuan dalam memecahkan masalah</td> 
              <td><input type="radio" name="Tanggapan24n" value="1" {{ ($k->pertanyaan2614=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24n" value="2" {{ ($k->pertanyaan2614=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24n" value="3" {{ ($k->pertanyaan2614=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24n" value="4" {{ ($k->pertanyaan2614=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24n" value="5" {{ ($k->pertanyaan2614=="5")? "checked" : "" }}></td>
            </tr>

            <tr align="center">
              <td> 15 </td>
              <td align="left">Negosiasi</td>  
              <td><input type="radio" name="Tanggapan24o" value="1" {{ ($k->pertanyaan2615=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24o" value="2" {{ ($k->pertanyaan2615=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24o" value="3" {{ ($k->pertanyaan2615=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24o" value="4" {{ ($k->pertanyaan2615=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24o" value="5" {{ ($k->pertanyaan2615=="5")? "checked" : "" }}></td>
            </tr>
            
            <tr align="center">
              <td> 16 </td>
              <td align="left"> Kemampuan analisis</td>  
              <td><input type="radio" name="Tanggapan24p" value="1" {{ ($k->pertanyaan2616=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24p" value="2" {{ ($k->pertanyaan2616=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24p" value="3" {{ ($k->pertanyaan2616=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24p" value="4" {{ ($k->pertanyaan2616=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24p" value="5" {{ ($k->pertanyaan2616=="5")? "checked" : "" }}></td>
            </tr>
            <tr align="center">
              <td> 17 </td>
              <td align="left"> Toleransi </td>  
              <td><input type="radio" name="Tanggapan24q" value="1" {{ ($k->pertanyaan2617=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24q" value="2" {{ ($k->pertanyaan2617=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24q" value="3" {{ ($k->pertanyaan2617=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24q" value="4" {{ ($k->pertanyaan2617=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24q" value="5" {{ ($k->pertanyaan2617=="5")? "checked" : "" }}></td>
            </tr>
            
            <tr align="center">
              <td> 18 </td>
              <td align="left" align="left"> Kemampuan adaptasi</td>  
              <td><input type="radio" name="Tanggapan24r" value="1" {{ ($k->pertanyaan2618=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24r" value="2" {{ ($k->pertanyaan2618=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24r" value="3" {{ ($k->pertanyaan2618=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24r" value="4" {{ ($k->pertanyaan2618=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24r" value="5" {{ ($k->pertanyaan2618=="5")? "checked" : "" }}></td>
            </tr>

            <tr align="center">
              <td> 19 </td>
              <td align="left"> Loyalitas dan integritas</td>  
              <td><input type="radio" name="Tanggapan24s" value="1" {{ ($k->pertanyaan2619=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24s" value="2" {{ ($k->pertanyaan2619=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24s" value="3" {{ ($k->pertanyaan2619=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24s" value="4" {{ ($k->pertanyaan2619=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24s" value="5" {{ ($k->pertanyaan2619=="5")? "checked" : "" }}></td>
            </tr>
            <tr align="center">
              <td> 20 </td>
              <td align="left"> Bekerja dengan orang yang berbeda budaya maupun latar belakang</td>  
              <td><input type="radio" name="Tanggapan24t" value="1" {{ ($k->pertanyaan2620=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24t" value="2" {{ ($k->pertanyaan2620=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24t" value="3" {{ ($k->pertanyaan2620=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24t" value="4" {{ ($k->pertanyaan2620=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24t" value="5" {{ ($k->pertanyaan2620=="5")? "checked" : "" }}></td>
            </tr>
            
            <tr align="center">
              <td> 21 </td>
              <td align="left"> Kepemimpinan</td>  
              <td><input type="radio" name="Tanggapan24u" value="1" {{ ($k->pertanyaan2621=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24u" value="2" {{ ($k->pertanyaan2621=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24u" value="3" {{ ($k->pertanyaan2621=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24u" value="4" {{ ($k->pertanyaan2621=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24u" value="5" {{ ($k->pertanyaan2621=="5")? "checked" : "" }}></td>
            </tr>

            <tr align="center">
              <td> 22 </td>
              <td align="left">Kemampuan dalam memegang tanggung jawab</td>  
              <td><input type="radio" name="Tanggapan24v" value="1" {{ ($k->pertanyaan2622=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24v" value="2" {{ ($k->pertanyaan2622=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24v" value="3" {{ ($k->pertanyaan2622=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24v" value="4" {{ ($k->pertanyaan2622=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24v" value="5" {{ ($k->pertanyaan2622=="5")? "checked" : "" }}></td>
            </tr>
            <tr align="center">
              <td> 23 </td>
              <td align="left"> Inisiatif</td> 
              <td><input type="radio" name="Tanggapan24w" value="1" {{ ($k->pertanyaan2623=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24w" value="2" {{ ($k->pertanyaan2623=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24w" value="3" {{ ($k->pertanyaan2623=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24w" value="4" {{ ($k->pertanyaan2623=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24w" value="5" {{ ($k->pertanyaan2623=="5")? "checked" : "" }}></td>
            </tr>
            <tr align="center">
              <td> 24 </td>
              <td align="left" align="left"> Manajemen proyek/program</td>  
              <td><input type="radio" name="Tanggapan24x" value="1" {{ ($k->pertanyaan2624=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24x" value="2" {{ ($k->pertanyaan2624=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24x" value="3" {{ ($k->pertanyaan2624=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24x" value="4" {{ ($k->pertanyaan2624=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24x" value="5" {{ ($k->pertanyaan2624=="5")? "checked" : "" }}></td>
            </tr>
            
            <tr align="center">
              <td> 25 </td>
              <td align="left"> Kemampuan untuk memresentasikan ide/produk/laporan</td>  
              <td><input type="radio" name="Tanggapan24y" value="1" {{ ($k->pertanyaan2625=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24y" value="2" {{ ($k->pertanyaan2625=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24y" value="3" {{ ($k->pertanyaan2625=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24y" value="4" {{ ($k->pertanyaan2625=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24y" value="5" {{ ($k->pertanyaan2625=="5")? "checked" : "" }}></td>
            </tr>

            <tr align="center">
              <td> 26 </td>
              <td align="left">Kemampuan dalam menuis laporan, memo, dan dokumen</td>  
              <td><input type="radio" name="Tanggapan24z" value="1" {{ ($k->pertanyaan2626=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24z" value="2" {{ ($k->pertanyaan2626=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24z" value="3" {{ ($k->pertanyaan2626=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24z" value="4" {{ ($k->pertanyaan2626=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24z" value="5" {{ ($k->pertanyaan2626=="5")? "checked" : "" }}></td>
            </tr>
            <tr align="center">
              <td> 27 </td>
              <td align="left"> Kemampuan untuk terus belajar sepanjang hayat</td> 
              <td><input type="radio" name="Tanggapan24aa" value="1" {{ ($k->pertanyaan2627=="1")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24aa" value="2" {{ ($k->pertanyaan2627=="2")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24aa" value="3" {{ ($k->pertanyaan2627=="3")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24aa" value="4" {{ ($k->pertanyaan2627=="4")? "checked" : "" }}></td>
              <td><input type="radio" name="Tanggapan24aa" value="5" {{ ($k->pertanyaan2627=="5")? "checked" : "" }}></td>
            </tr>
          </table>
        </div>



         <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt; text-align: left;">27. Pada saat anda lulus dari perguruan tinggi, bagaimana tingkat kemampuan bahasa asing anda ?</span>
          <input class="input100" type="text" name="Tanggapan27" placeholder="Answer Here...." value="{{ $k->pertanyaan27 }}" >
        </div>

         <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt; text-align: left;">28. Berapa besar kontribusi perguruan tinggi dalam penguasaan bahasa asing ?</span>
          <input class="input100" type="text" name="Tanggapan28" placeholder="Answer Here...." value="{{ $k->pertanyaan28 }}" >
        </div>


        <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt; text-align: left;">29. Sejauh mana program studi anda bermanfaat untuk hal-hal di bawah ini?</span>
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
              <td><center><input type="radio" name="Tanggapan29a" value="1" {{ ($k->pertanyaan291=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan29a" value="2" {{ ($k->pertanyaan291=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan29a" value="3" {{ ($k->pertanyaan291=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan29a" value="4" {{ ($k->pertanyaan291=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan29a" value="5" {{ ($k->pertanyaan291=="5")? "checked" : "" }}></center></td>             
            </tr>
            <tr align="center">
              <td> 2 </td>
              <td align="left"> Pembelajaran lanjut dalam pekerjaan?</td>
              <td><center><input type="radio" name="Tanggapan29b" value="1" {{ ($k->pertanyaan292=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan29b" value="2" {{ ($k->pertanyaan292=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan29b" value="3" {{ ($k->pertanyaan292=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan29b" value="4" {{ ($k->pertanyaan292=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan29b" value="5" {{ ($k->pertanyaan292=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 3 </td>
              <td align="left">Kinerja dalam menjalankan tugas?</td>
              <td><center><input type="radio" name="Tanggapan29c" value="1" {{ ($k->pertanyaan293=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan29c" value="2" {{ ($k->pertanyaan293=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan29c" value="3" {{ ($k->pertanyaan293=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan29c" value="4" {{ ($k->pertanyaan293=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan29c" value="5" {{ ($k->pertanyaan293=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 4 </td>
              <td align="left"> Karir di masa depan?</td>
              <td><center><input type="radio" name="Tanggapan29d" value="1" {{ ($k->pertanyaan294=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan29d" value="2" {{ ($k->pertanyaan294=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan29d" value="3" {{ ($k->pertanyaan294=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan29d" value="4" {{ ($k->pertanyaan294=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan29d" value="5" {{ ($k->pertanyaan294=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 5 </td>
              <td align="left">Pengembangan diri? </td>              
              <td><center><input type="radio" name="Tanggapan29e" value="1" {{ ($k->pertanyaan295=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan29e" value="2" {{ ($k->pertanyaan295=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan29e" value="3" {{ ($k->pertanyaan295=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan29e" value="4" {{ ($k->pertanyaan295=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan29e" value="5" {{ ($k->pertanyaan295=="5")? "checked" : "" }}></center></td>
            </tr>
            <tr align="center">
              <td> 6 </td>
              <td align="left"> Meningkatkan ketrampilan kewirausahaan?</td> 
              <td><center><input type="radio" name="Tanggapan29f" value="1" {{ ($k->pertanyaan296=="1")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan29f" value="2" {{ ($k->pertanyaan296=="2")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan29f" value="3" {{ ($k->pertanyaan296=="3")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan29f" value="4" {{ ($k->pertanyaan296=="4")? "checked" : "" }}></center></td>
              <td><center><input type="radio" name="Tanggapan29f" value="5" {{ ($k->pertanyaan296=="5")? "checked" : "" }}></center></td>
            </tr>
          </table>
        </div>

        <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt; text-align: left;">30. Dalam skala satu sampai lima, beberapa erat kaitan antara bidang studi dengan pekerjaan anda ?</span>
          <input class="input100" type="text" name="Tanggapan30" placeholder="Answer Here...." value="{{ $k->pertanyaan30 }}" >
        </div>


        <div class="wrap-input100 ">
          <span class="label-input300" style="float: left; font-size: 12pt; text-align: left;">31. Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya ?</span>
          <input class="input100" type="text" name="Tanggapan31" placeholder="Answer Here...." value="{{ $k->pertanyaan31 }}" >
        </div>
        @endforeach

                                            </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Table End -->
        </div>
    </div>
    
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
    <!-- peity JS
		============================================ -->
    <script src="{{asset('deded/js/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('deded/js/peity/peity-active.js')}}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{asset('deded/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('deded/js/sparkline/sparkline-active.js')}}"></script>
    <!-- data table JS
		============================================ -->
    <script src="{{asset('deded/js/data-table/bootstrap-table.js')}}"></script>
    <script src="{{asset('deded/js/data-table/tableExport.js')}}"></script>
    <script src="{{asset('deded/js/data-table/data-table-active.js')}}"></script>
    <script src="{{asset('deded/js/data-table/bootstrap-table-editable.js')}}')}}"></script>
    <script src="{{asset('deded/js/data-table/bootstrap-editable.js')}}"></script>
    <script src="{{asset('deded/js/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{asset('deded/js/data-table/colResizable-1.5.source.js')}}"></script>
    <script src="{{asset('deded/js/data-table/bootstrap-table-export.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('deded/js/main.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>



</body>

</html>