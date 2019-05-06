
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\UploadedFile;
use Mail;
use PDF;
class EtracerController extends Controller
{
    //halaman beranda
    public function beranda(){        
        return view('beranda');
    }
    //proses login 
    public function proses(Request $request){
        $email = $request->input('email');
        $nim = $request->input('nim');
        $request->session()->put('nim',$nim);
        $cekEmail = DB::table('user')->select('email')->where('email','=',$email)->value('email');
        $cekNim = DB::table('user')->select('id_user')->where('id_user','=',$nim)->value('id_user');
        $cekStatus = DB::table('user')->select('status')->where('id_user','=',$nim)->value('status');
        $cek = DB::table('kuis_pendahuluan')->select('Id_user')->where('id_user','=',$nim)->value('id_user');
        
        if($cekEmail != NULL and $cekNim != NULL){
            if($cekStatus == 'Alumni' or $cekStatus == 'alumni'){
                if($cek == NULL){
                    return redirect('KuisionerPendahuluan');
                } else {
                    return redirect('berandaLogin');
                }
            } else {
                return redirect('formElement');
            }
         } else {
            return redirect('loginGagal');
        }
        //return $cek;
    }
    //halaman berandaLogin    
    public function login(Request $request){
        $nim = $request->session()->get('nim');
    	//mengammbil data dari tabel user dan kuisioner pendahuluan
      $dataPengguna = DB::table('kuis_pendahuluan')->join('user','kuis_pendahuluan.id_user','=','user.id_user')->where('user.id_user','=',$nim)->get();
    	//mengirim data user ke view beranda
    	return view('beranda_login',['dataPengguna' => $dataPengguna]);
      //return $dataPengguna;
    }
    //masuk halaman kuisioner pendahuluan
    public function pendahuluan(Request $request){
        $nim = $request->session()->get('nim');
        $pengguna = DB::table('user')->where('id_user','=',$nim)->get();
        return view('kuisionerAlumniPendahuluan',['pengguna' => $pengguna]);
    }
    //menyimpan data kuisioner pendahuluan
    public function simpanPendahuluan(Request $request){
        $nim = $request->session()->get('nim');
        //input data Kuisoner Pendahuluan
        $nama = $request->input('nama');
        $jk = $request->input('jk');
        $angkatan = $request->input('angkatan');
        $prodi = $request->input('prodi');
        $ipk = $request->input('ipk');
        $TahunMasuk = $request->input('TahunMasuk');
        $Alamat = $request->input('alamat');
        $Kota = $request->input('kota');
        $Provinsi = $request->input('Provinsi');
        $kodePos = $request->input('kodepos');
        $nomorHp = $request->input('nomer');
        $status = $request->input('Status');
        $komenPositif = $request->input('komenPositif');
        $komenNegatif = $request->input('komenNegatif');
        $gambaran = $request->input('gambaran');
        $TahunKeluar = $request->input('TahunKeluar');
        
        //input wiraswasta
        $pernahWir = $request->input('pernahWir');
        $brplamaWir = $request->input('brplamaWir');
        $alasanWir = $request->input('alasanWir');
        $jenisWir = $request->input('jenisWir');
        $modalWir = $request->input('modalWir');
        $omsetWir = $request->input('omsetWir');
        //input data bekerja dan berwiraswasta
        $jenisBWir = $request->input('jenisBWir');
        $modalBwir = $request->input('modalBwir');
        $omsetBwir = $request->input('omsetBwir');
        //input data bekerja
        $kategoriBer = $request->input('kategoriBer');
        $sesuaiBer = $request->input('sesuaiBer');
        //input data tidak bekerja/melanjutkan kuliah
        $pernahSe = $request->input('pernahSe');
        $brplamaSe = $request->input('brplamaSe');
        $alasanSe = $request->input('alasanSe');
        //input data pekerjaan utama
        $namaKantor = $request->input('namaKantor');
        $bidangUsaha = $request->input('bidangUsaha');
        $posisi = $request->input('posisi');
        $jenisPekerjaan = $request->input('jenispekerjaan');
        $sejak = $request->input('sejak');
        $noKantor = $request->input('nokantor');
        $emailKantor = $request->input('emailKantor');
        $alamatKantor = $request->input('alamatkantor');
        $penghasilan = $request->input('penghasilan');
        //input data pekerjaan lain
        $namaKantor2 = $request->input('namaKantor2');
        $bidangUsaha2 = $request->input('bidangUsaha2');
        $posisi2 = $request->input('posisi2');
        $jenisPekerjaan2 = $request->input('jenispekerjaan2');
        $sejak2 = $request->input('sejak2');
        $noKantor2 = $request->input('nokantor2');
        $emailKantor2 = $request->input('emailKantor2');
        $alamatKantor2 = $request->input('alamatkantor2');
        $penghasilan2 = $request->input('penghasilan2');
        //input data pekerjaan sebelumnya
        $namaKantor3 = $request->input('namaKantor3');
        $bidangUsaha3 = $request->input('bidangUsaha3');
        $posisi3 = $request->input('posisi3');
        $alasanPindah = $request->input('alasanPindah');
        //menimpandata kuisioner pendahuluan
      
        DB::table('kuis_pendahuluan')->insert(
            ['nama' => $nama, 'jenis_kel' => $jk, 'angkatan' => $angkatan, 'prodi' => $prodi, 'Ipk' => $ipk, 'tahun_masuk' => $TahunMasuk, 'almt' => $Alamat, 'almt_kota' => $Kota, 'almt_prov' => $Provinsi, 'almt_kodepos' => $kodePos, 'telp' => $nomorHp,'kerjaan_pos' => $komenPositif, 'kerjaan_neg' => $komenNegatif, 'gambaran_ideal' => $gambaran,'Id_user' => $nim,'status' => $status, 'tahun_keluar' => $TahunKeluar]
        );
        $id_pendahuluan = DB::table('kuis_pendahuluan')->select('id_kuisioner')->where('Id_user','=',$nim)->value('id_kuisioner');
        if($status == 'Wiraswasta'){
            DB::table('wiraswasta')->insert(
                ['Id_kuisioner' => $id_pendahuluan,'Id_user' => $nim,'kerja_sebelum' => $pernahWir, 'brp_lama' => $brplamaWir,'alasan' => $alasanWir,'jenis' => $jenisWir, 'asal_modal' => $modalWir, 'omset' => $omsetWir]
            );
        } else if ($status == 'Bekerja dan wiraswasta'){
            DB::table('kerja_wiraswasta')->insert(
                ['id_kuisioner' => $id_pendahuluan, 'id_user' => $nim, 'jenis' => $jenisBWir, 'asal_modal' => $modalBwir, 'omset' => $omsetBwir]
            );
        } else if ($status == 'Bekerja'){
            DB::table('kerja')->insert(
                ['id_kuisioner' => $id_pendahuluan, 'id_user' => $nim, 'kategori' => $kategoriBer, 'sesuai' => $sesuaiBer]
            );
        } else if ($status == 'Tidak Bekerja') {
            DB::table('sekolah')->insert(
                ['id_kuisioner' => $id_pendahuluan, 'id_user' => $nim, 'pernah_kerja' => $pernahSe, 'berapa_lama' => $brplamaSe, 'alasan_tdkkerja' => $alasanSe]
            );
        }
        DB::table('pekerjaan')->insert(
            ['id_user' => $nim, 'nama_kantor' => $namaKantor, 'bidang_usaha' => $bidangUsaha, 'jabatan' => $posisi, 'jenis_pekerjaan' => $jenisPekerjaan, 'web_kantor' => $emailKantor, 'telp_kantor' =>$noKantor, 'alamat_kantor' => $alamatKantor, 'sejak' =>  $sejak,'penghasilan' => $penghasilan]
        );
        //menyimpan data pekerjaan lain
        DB::table('pekerjaanLain')->insert(
            ['id_user' => $nim, 'nama_kantor' => $namaKantor2, 'bidang_usaha' => $bidangUsaha2, 'jabatan' => $posisi2, 'jenis_pekerjaan' => $jenisPekerjaan2, 'web_kantor' => $emailKantor2, 'telp_kantor' =>$noKantor2, 'alamat_kantor' => $alamatKantor2, 'sejak' =>  $sejak2,'penghasilan' => $penghasilan2]
        );
        //menyimpan data pekerjaan sebelumnya
         DB::table('pekerjaanSebel')->insert(
            ['id_user' => $nim, 'nama_kantor' => $namaKantor3, 'bidang_usaha' => $bidangUsaha3, 'jabatan' => $posisi3, 'deskripsi' => $alasanPindah]
        );
         if($emailKantor != null){
            $pengguna = DB::table('pekerjaan')->where('id_user','=',$nim);
            Mail::send('pesanPerusahaan',['user' => $pengguna], function ($m) use ($namaKantor, $emailKantor){
              $m->from('gandung@gmail.com','Survei Alumni Teknik Geofisika');
              $m->to($emailKantor, $namaKantor)->subject('Survei Alumni Teknik Geofisika');
            });
         }
        
        return redirect('KuisionerUtama');
    }
    //masuk halaman kuisioner utama
    public function utama(Request $request){
        $nim = $request->session()->get('nim');
        $pengguna = DB::table('user')->where('id_user','=',$nim)->get();
        return view('kuisionerAlumniUtama',['pengguna' => $pengguna]);
    }
    //menyimpan data kuisioner utama
    public function simpanUtama(Request $request){
        $nim = $request->session()->get('nim');
        //input data pertanyaan 1
       $pertanyaan11 = $request->input('Tanggapan1a');
       $pertanyaan12 = $request->input('Tanggapan1b');
       $pertanyaan13 = $request->input('Tanggapan1c');
       $pertanyaan14 = $request->input('Tanggapan1d');
       $pertanyaan15 = $request->input('Tanggapan1e');
       $pertanyaan16 = $request->input('Tanggapan1f');
       $pertanyaan17 = $request->input('Tanggapan1g');
       //input data pertanyaan 2
       $pertanyaan21 = $request->input('Tanggapan2a');
       $pertanyaan22 = $request->input('Tanggapan2b');
       $pertanyaan23 = $request->input('Tanggapan2c');
       $pertanyaan24 = $request->input('Tanggapan2d');
       $pertanyaan25 = $request->input('Tanggapan2e');
       $pertanyaan26 = $request->input('Tanggapan2f');
       //input data pertanyaan 7
       $pertanyaan71 = $request->input('Tanggapan7a');
       $pertanyaan72 = $request->input('Tanggapan7b');
       $pertanyaan73 = $request->input('Tanggapan7c');
       $pertanyaan74 = $request->input('Tanggapan7d');
       $pertanyaan75 = $request->input('Tanggapan7e');
       $pertanyaan76 = $request->input('Tanggapan7f');
         //input data pertanyaan 8
       $pertanyaan81 = $request->input('Tanggapan8a');
       $pertanyaan82 = $request->input('Tanggapan8b');
       $pertanyaan83 = $request->input('Tanggapan8c');
       $pertanyaan84 = $request->input('Tanggapan8d');
       $pertanyaan85 = $request->input('Tanggapan8e');
       $pertanyaan86 = $request->input('Tanggapan8f');
       $pertanyaan87 = $request->input('Tanggapan8g');
       $pertanyaan88 = $request->input('Tanggapan8h');
       $pertanyaan89 = $request->input('Tanggapan8i');
       //input data pertanyaan 11
       $pertanyaan111 = $request->input('Tanggapan11a');
       $pertanyaan112 = $request->input('Tanggapan11b');
       $pertanyaan113 = $request->input('Tanggapan11c');
       $pertanyaan114 = $request->input('Tanggapan11d');
       $pertanyaan115 = $request->input('Tanggapan11e');
       $pertanyaan116 = $request->input('Tanggapan11f');
       $pertanyaan117 = $request->input('Tanggapan11g');
       $pertanyaan118 = $request->input('Tanggapan11h');
       $pertanyaan119 = $request->input('Tanggapan11i');
       $pertanyaan1110 = $request->input('Tanggapan11j');
       $pertanyaan1111 = $request->input('Tanggapan11k');
       //input dayt pertanyaan 24
       $pertanyaan241 = $request->input('Tanggapan24a');
       $pertanyaan242 = $request->input('Tanggapan24b');
       $pertanyaan243 = $request->input('Tanggapan24c');
       $pertanyaan244 = $request->input('Tanggapan24d');
       $pertanyaan245 = $request->input('Tanggapan24e');
       $pertanyaan246 = $request->input('Tanggapan24f');
       $pertanyaan247 = $request->input('Tanggapan24g');
       $pertanyaan248 = $request->input('Tanggapan24h');
       $pertanyaan249 = $request->input('Tanggapan24i');
       $pertanyaan2410 = $request->input('Tanggapan24j');
       $pertanyaan2411 = $request->input('Tanggapan24k');
       $pertanyaan2412 = $request->input('Tanggapan24l');
       $pertanyaan2413 = $request->input('Tanggapan24m');
       $pertanyaan2414 = $request->input('Tanggapan24n');
       $pertanyaan2415 = $request->input('Tanggapan24o');
       $pertanyaan2416 = $request->input('Tanggapan24p');
       $pertanyaan2417 = $request->input('Tanggapan24q');
       $pertanyaan2418 = $request->input('Tanggapan24r');
       $pertanyaan2419 = $request->input('Tanggapan24s');
       $pertanyaan2420 = $request->input('Tanggapan24t');
       $pertanyaan2421 = $request->input('Tanggapan24u');
       $pertanyaan2422 = $request->input('Tanggapan24v');
       $pertanyaan2423 = $request->input('Tanggapan24w');
       $pertanyaan2424 = $request->input('Tanggapan24x');
       $pertanyaan2425 = $request->input('Tanggapan24y');
       $pertanyaan2426 = $request->input('Tanggapan24z');
       $pertanyaan2427 = $request->input('Tanggapan24aa');
       //input data pertanyaan 25
       $pertanyaan251 = $request->input('Tanggapan25a');
       $pertanyaan252 = $request->input('Tanggapan25b');
       $pertanyaan253 = $request->input('Tanggapan25c');
       $pertanyaan254 = $request->input('Tanggapan25d');
       $pertanyaan255 = $request->input('Tanggapan25e');
       $pertanyaan256 = $request->input('Tanggapan25f');
       $pertanyaan257 = $request->input('Tanggapan25g');
       $pertanyaan258 = $request->input('Tanggapan25h');
       $pertanyaan259 = $request->input('Tanggapan25i');
       $pertanyaan2510 = $request->input('Tanggapan25j');
       $pertanyaan2511 = $request->input('Tanggapan25k');
       $pertanyaan2512 = $request->input('Tanggapan25l');
       $pertanyaan2513 = $request->input('Tanggapan25m');
       $pertanyaan2514 = $request->input('Tanggapan25n');
       $pertanyaan2515 = $request->input('Tanggapan25o');
       $pertanyaan2516 = $request->input('Tanggapan25p');
       $pertanyaan2517 = $request->input('Tanggapan25q');
       $pertanyaan2518 = $request->input('Tanggapan25r');
       $pertanyaan2519 = $request->input('Tanggapan25s');
       $pertanyaan2520 = $request->input('Tanggapan25t');
       $pertanyaan2521 = $request->input('Tanggapan25u');
       $pertanyaan2522 = $request->input('Tanggapan25v');
       $pertanyaan2523 = $request->input('Tanggapan25w');
       $pertanyaan2524 = $request->input('Tanggapan25x');
       $pertanyaan2525 = $request->input('Tanggapan25y');
       $pertanyaan2526 = $request->input('Tanggapan25z');
       $pertanyaan2527 = $request->input('Tanggapan25aa');
       //input data pertanyaan 26
       $pertanyaan261 = $request->input('Tanggapan26a');
       $pertanyaan262 = $request->input('Tanggapan26b');
       $pertanyaan263 = $request->input('Tanggapan26c');
       $pertanyaan264 = $request->input('Tanggapan26d');
       $pertanyaan265 = $request->input('Tanggapan26e');
       $pertanyaan266 = $request->input('Tanggapan26f');
       $pertanyaan267 = $request->input('Tanggapan26g');
       $pertanyaan268 = $request->input('Tanggapan26h');
       $pertanyaan269 = $request->input('Tanggapan26i');
       $pertanyaan2610 = $request->input('Tanggapan26j');
       $pertanyaan2611 = $request->input('Tanggapan26k');
       $pertanyaan2612 = $request->input('Tanggapan26l');
       $pertanyaan2613 = $request->input('Tanggapan26m');
       $pertanyaan2614 = $request->input('Tanggapan26n');
       $pertanyaan2615 = $request->input('Tanggapan26o');
       $pertanyaan2616 = $request->input('Tanggapan26p');
       $pertanyaan2617 = $request->input('Tanggapan26q');
       $pertanyaan2618 = $request->input('Tanggapan26r');
       $pertanyaan2619 = $request->input('Tanggapan26s');
       $pertanyaan2620 = $request->input('Tanggapan26t');
       $pertanyaan2621 = $request->input('Tanggapan26u');
       $pertanyaan2622 = $request->input('Tanggapan26v');
       $pertanyaan2623 = $request->input('Tanggapan26w');
       $pertanyaan2624 = $request->input('Tanggapan26x');
       $pertanyaan2625 = $request->input('Tanggapan26y');
       $pertanyaan2626 = $request->input('Tanggapan26z');
       $pertanyaan2627 = $request->input('Tanggapan26aa');
       //input data pertanyaan 29
       $pertanyaan291 = $request->input('Tanggapan29a');
       $pertanyaan292 = $request->input('Tanggapan29b');
       $pertanyaan293 = $request->input('Tanggapan29c');
       $pertanyaan294 = $request->input('Tanggapan29d');
       $pertanyaan295 = $request->input('Tanggapan29e');
       $pertanyaan296 = $request->input('Tanggapan29f');
       //input data pertanyaan utama
       $pertanyaanUtama3 = $request->input('Tanggapan3');
       $pertanyaanUtama4 = $request->input('Tanggapan4');
       $pertanyaanUtama5 = $request->input('Tanggapan5');
       $pertanyaanUtama6 = $request->input('Tanggapan6');
       $pertanyaanUtama9 = $request->input('Tanggapan9');
       $pertanyaanUtama10 = $request->input('Tanggapan10');
       $pertanyaanUtama12 = $request->input('Tanggapan12');
       $pertanyaanUtama13 = $request->input('Tanggapan13');
       $pertanyaanUtama14 = $request->input('Tanggapan14');
       $pertanyaanUtama15 = $request->input('Tanggapan15');
       $pertanyaanUtama16 = $request->input('Tanggapan16');
       $pertanyaanUtama17 = $request->input('Tanggapan17');
       $pertanyaanUtama18 = $request->input('Tanggapan18');
       $pertanyaanUtama19 = $request->input('Tanggapan19');
       $pertanyaanUtama20 = $request->input('Tanggapan20');
       $pertanyaanUtama21 = $request->input('Tanggapan21');
       $pertanyaanUtama22 = $request->input('Tanggapan22');
       $pertanyaanUtama23 = $request->input('Tanggapan23');
       $pertanyaanUtama27 = $request->input('Tanggapan27');
       $pertanyaanUtama28 = $request->input('Tanggapan28');
       $pertanyaanUtama30 = $request->input('Tanggapan30');
       $pertanyaanUtama31 = $request->input('Tanggapan31');
       //menyimppan pertanyaan 1
       DB::table('pertanyaan1')->insert(
        ['pertanyaan11' => $pertanyaan11, 'pertanyaan12' => $pertanyaan12, 'pertanyaan13' => $pertanyaan13, 'pertanyaan14' => $pertanyaan14, 'pertanyaan15' => $pertanyaan15, 'pertanyaan16' => $pertanyaan16,'pertanyaan17' => $pertanyaan17, 'id_user' => $nim]
       );
        //menyimppan pertanyaan 2
       DB::table('pertanyaan2')->insert(
        ['pertanyaan21' => $pertanyaan21, 'pertanyaan22' => $pertanyaan22, 'pertanyaan23' => $pertanyaan23, 'pertanyaan24' => $pertanyaan24, 'pertanyaan25' => $pertanyaan25, 'pertanyaan26' => $pertanyaan26, 'id_user' => $nim]
       );
        //menyimppan pertanyaan 7
       DB::table('pertanyaan7')->insert(
        ['pertanyaan71' => $pertanyaan71, 'pertanyaan72' => $pertanyaan72, 'pertanyaan73' => $pertanyaan73, 'pertanyaan74' => $pertanyaan74, 'pertanyaan75' => $pertanyaan75, 'pertanyaan76' => $pertanyaan76, 'id_user' => $nim]
       );
        //menyimppan pertanyaan 8
       DB::table('pertanyaan8')->insert(
        ['pertanyaan81' => $pertanyaan81, 'pertanyaan82' => $pertanyaan82, 'pertanyaan83' => $pertanyaan83, 'pertanyaan84' => $pertanyaan84, 'pertanyaan85' => $pertanyaan85, 'pertanyaan86' => $pertanyaan86, 'pertanyaan87' => $pertanyaan87, 'pertanyaan88' => $pertanyaan88, 'pertanyaan89' => $pertanyaan89, 'id_user' => $nim]
       );
       //menyimppan pertanyaan 11
       DB::table('pertanyaan11')->insert(
        ['pertanyaan111' => $pertanyaan111, 'pertanyaan112' => $pertanyaan112, 'pertanyaan113' => $pertanyaan113, 'pertanyaan114' => $pertanyaan114, 'pertanyaan115' => $pertanyaan115, 'pertanyaan116' => $pertanyaan116, 'pertanyaan117' => $pertanyaan117, 'pertanyaan118' => $pertanyaan118, 'pertanyaan119' => $pertanyaan119, 'pertanyaan1110' => $pertanyaan1110, 'pertanyaan1111' => $pertanyaan1111, 'id_user' => $nim]
       );
       //menyimppan pertanyaan 24
       DB::table('pertanyaan24')->insert(
        ['pertanyaan241' => $pertanyaan241, 'pertanyaan242' => $pertanyaan242, 'pertanyaan243' => $pertanyaan243, 'pertanyaan244' => $pertanyaan244, 'pertanyaan245' => $pertanyaan245, 'pertanyaan246' => $pertanyaan246, 'pertanyaan247' => $pertanyaan247, 'pertanyaan248' => $pertanyaan248, 'pertanyaan249' => $pertanyaan249, 'pertanyaan2410' => $pertanyaan2410, 'pertanyaan2411' => $pertanyaan2411, 'pertanyaan2412' => $pertanyaan2412, 'pertanyaan2413' => $pertanyaan2413, 'pertanyaan2414' => $pertanyaan2414, 'pertanyaan2415' => $pertanyaan2415, 'pertanyaan2416' => $pertanyaan2416, 'pertanyaan2417' => $pertanyaan2417, 'pertanyaan2418' => $pertanyaan2418, 'pertanyaan2419' => $pertanyaan2419, 'pertanyaan2420' => $pertanyaan2420, 'pertanyaan2421' => $pertanyaan2421, 'pertanyaan2422' => $pertanyaan2422, 'pertanyaan2423' => $pertanyaan2423, 'pertanyaan2424' => $pertanyaan2424, 'pertanyaan2425' => $pertanyaan2425, 'pertanyaan2426' => $pertanyaan2426, 'pertanyaan2427' => $pertanyaan2427, 'id_user' => $nim]
       );
       //menyimppan pertanyaan 25
       DB::table('pertanyaan25')->insert(
        ['pertanyaan251' => $pertanyaan251, 'pertanyaan252' => $pertanyaan252, 'pertanyaan253' => $pertanyaan253, 'pertanyaan254' => $pertanyaan254, 'pertanyaan255' => $pertanyaan255, 'pertanyaan256' => $pertanyaan256, 'pertanyaan257' => $pertanyaan257, 'pertanyaan258' => $pertanyaan258, 'pertanyaan259' => $pertanyaan259, 'pertanyaan2510' => $pertanyaan2510, 'pertanyaan2511' => $pertanyaan2511, 'pertanyaan2512' => $pertanyaan2512, 'pertanyaan2513' => $pertanyaan2513, 'pertanyaan2514' => $pertanyaan2514, 'pertanyaan2515' => $pertanyaan2515, 'pertanyaan2516' => $pertanyaan2516, 'pertanyaan2517' => $pertanyaan2517, 'pertanyaan2518' => $pertanyaan2518, 'pertanyaan2519' => $pertanyaan2519, 'pertanyaan2520' => $pertanyaan2520, 'pertanyaan2521' => $pertanyaan2521, 'pertanyaan2522' => $pertanyaan2522, 'pertanyaan2523' => $pertanyaan2523, 'pertanyaan2524' => $pertanyaan2524, 'pertanyaan2525' => $pertanyaan2525, 'pertanyaan2526' => $pertanyaan2526, 'pertanyaan2527' => $pertanyaan2527, 'id_user' => $nim]
       );
       //menyimppan pertanyaan 26
       DB::table('pertanyaan26')->insert(
        ['pertanyaan261' => $pertanyaan261, 'pertanyaan262' => $pertanyaan262, 'pertanyaan263' => $pertanyaan263, 'pertanyaan264' => $pertanyaan264, 'pertanyaan265' => $pertanyaan265, 'pertanyaan266' => $pertanyaan266, 'pertanyaan267' => $pertanyaan267, 'pertanyaan268' => $pertanyaan268, 'pertanyaan269' => $pertanyaan269, 'pertanyaan2610' => $pertanyaan2610, 'pertanyaan2611' => $pertanyaan2611, 'pertanyaan2612' => $pertanyaan2612, 'pertanyaan2613' => $pertanyaan2613, 'pertanyaan2614' => $pertanyaan2614, 'pertanyaan2615' => $pertanyaan2615, 'pertanyaan2616' => $pertanyaan2616, 'pertanyaan2617' => $pertanyaan2617, 'pertanyaan2618' => $pertanyaan2618, 'pertanyaan2619' => $pertanyaan2619, 'pertanyaan2620' => $pertanyaan2620, 'pertanyaan2621' => $pertanyaan2621, 'pertanyaan2622' => $pertanyaan2622, 'pertanyaan2623' => $pertanyaan2623, 'pertanyaan2624' => $pertanyaan2624, 'pertanyaan2625' => $pertanyaan2625, 'pertanyaan2626' => $pertanyaan2626, 'pertanyaan2627' => $pertanyaan2627, 'id_user' => $nim]
       );
       //menyimppan pertanyaan 29
       DB::table('pertanyaan29')->insert(
        ['pertanyaan291' => $pertanyaan291, 'pertanyaan292' => $pertanyaan292, 'pertanyaan293' => $pertanyaan293, 'pertanyaan294' => $pertanyaan294, 'pertanyaan295' => $pertanyaan295, 'pertanyaan296' => $pertanyaan296, 'id_user' => $nim]
       );
       //memanggil id
       $masaStudi = DB::table('pertanyaan1')->select('id_masaStudi')->where('id_user','=',$nim)->value('id_masaStudi');
       $aspekPembelajaran = DB::table('pertanyaan2')->select('id_aspekPembelajaran')->where('id_user','=',$nim)->value('id_aspekPembelajaran');
       $aspekBelajar = DB::table('pertanyaan7')->select('id_aspekBelajar')->where('id_user','=',$nim)->value('id_masaBelajar');
       $fasilitas = DB::table('pertanyaan8')->select('id_fasilitas')->where('id_user','=',$nim)->value('id_fasilitas');
       $penting = DB::table('pertanyaan11')->select('id_penting')->where('id_user','=',$nim)->value('id_penting');
       $kontribusi1 = DB::table('pertanyaan24')->select('id_kontribusi1')->where('id_user','=',$nim)->value('id_kontribusi1');
       $kontribusi2 = DB::table('pertanyaan25')->select('id_kontribusi2')->where('id_user','=',$nim)->value('id_kontribusi2');
       $kontribusi3 = DB::table('pertanyaan26')->select('id_kontribusi3')->where('id_user','=',$nim)->value('id_kontribusi3');
       $manfaat = DB::table('pertanyaan29')->select('id_manfaat')->where('id_user','=',$nim)->value('id_manfaat');
       //menyimpan kuisioner utama
       DB::table('kuisUtama')->insert(
        ['id_user' => $nim, 'pertanyaan3' => $pertanyaanUtama3, 'pertanyaan4' => $pertanyaanUtama4, 'pertanyaan5' => $pertanyaanUtama5, 'pertanyaan6' => $pertanyaanUtama6, 'pertanyaan9' => $pertanyaanUtama9, 'pertanyaan10' => $pertanyaanUtama10, 'pertanyaan12' => $pertanyaanUtama12, 'pertanyaan13' => $pertanyaanUtama13, 'pertanyaan14' => $pertanyaanUtama14, 'pertanyaan15' => $pertanyaanUtama15, 'pertanyaan16' => $pertanyaanUtama16, 'pertanyaan17' => $pertanyaanUtama17, 'pertanyaan18' => $pertanyaanUtama18, 'pertanyaan19' => $pertanyaanUtama19, 'pertanyaan20' => $pertanyaanUtama20, 'pertanyaan21' => $pertanyaanUtama21, 'pertanyaan22' => $pertanyaanUtama22, 'pertanyaan23' => $pertanyaanUtama23, 'pertanyaan27' => $pertanyaanUtama27, 'pertanyaan28' => $pertanyaanUtama28, 'pertanyaan30' => $pertanyaanUtama30, 'pertanyaan31' => $pertanyaanUtama31, 'id_masaStudi' => $masaStudi, 'id_aspekBelajar' => $aspekBelajar, 'id_fasilitas' => $fasilitas, 'id_penting' => $penting, 'id_kontribusi1' => $kontribusi1, 'id_kontribusi2' => $kontribusi2, 'id_kontribusi3' => $kontribusi3, 'id_manfaat' => $manfaat]
       );
       return redirect('berandaLogin');
    }
    //BUAT BERITA
    //buat berita
    public function buatBerita(Request $request){
      return view('buatBerita');
    }
    public function simpanData(Request $request){
      //memanggil id user
      $nim = $request-> session()->get('nim');
      //inisiasi
      $gambar = $request->file('file_gambar');
      $judul = $request->judul;
      $isi = $request->isi;
      $tanggal = \Carbon\Carbon::now()->format('d-m-y');
      if($gambar != null){
        $nama_gambar =  $gambar->getClientOriginalName();
        //menyimpan gambar di folder
        $request->file('file_gambar')->move('uploadGambar',$nama_gambar);
        //menyimpan data ke database
        DB::table('berits')->insert(
          ['id_user' => $nim,'judul' => $judul, 'isi' => $isi, 'file_gambar' => $nama_gambar, 'tanggal' => $tanggal]
        );
        return redirect('buatBerita');
      } else {
        //menyimpan data ke database
        DB::table('berits')->insert(
          ['id_user' => $nim,'judul' => $judul, 'isi' => $isi, 'tanggal' => $tanggal]
        );
        return redirect('buatBerita');
      }
    }
    //tampilkan semua berita
    public function berita(Request $request){
      $listBerita = DB::table('berits')->join('user','berits.id_user','=','user.id_user')->get();
      return view ('berita',['listBerita' => $listBerita]);
    }
    //tampilan halaman berita
    public function halaman($id){
      $berita = DB::table('berits')->join('user','berits.id_user','=','user.id_user')->where('id_berita','=',$id)->get();
        
      //return $isi; 
      return view('halamanBerita',['berita' => $berita]);
    }
    //tampilan berita unlogin
    public function beritaUnlogin(Request $request){
      $listBerita = DB::table('berits')->join('user','berits.id_user','=','user.id_user')->get();
      return view ('berita_unlogin',['listBerita' => $listBerita]);
    }
    //tampilan halaman berita unlogin
     public function halaman2($id){
     $berita = DB::table('berits')->join('user','berits.id_user','=','user.id_user')->where('id_berita','=',$id)->get();
        
      //return $isi; 
      return view('halamanBerita_unlogin',['berita' => $berita]);
    }
    // menampilkan data 
    public function profile(Request $request){
      $nim = $request->session()->get('nim');
      $data = DB::table('kuis_pendahuluan')->join('user','kuis_pendahuluan.id_user','=','user.id_user')->where('user.id_user','=',$nim)->get();
      //return $data;
      return view('profile', ['data' => $data]);
    }
    //update data profile
    public function dataProfile(Request $request){
        $nim = $request->session()->get('nim');
        //inisialisasi data profile
        $nama = $request->nama;
        $jk = $request->jk;
        $angkatan = $request->angkatan;
        $prodi = $request->prodi;
        $ipk = $request->ipk;
        $TahunMasuk = $request->TahunMasuk;
        $Alamat = $request->alamat;
        $Kota = $request->kota;
        $Provinsi = $request->provinsi;
        $kodePos = $request->kodepos;
        $nomorHp = $request->nomer;
        $status = $request->status;
        $TahunKeluar = $request->TahunKeluar;
        //inisiasi
        $gambar = $request->file('file_gambar');
  
        //update data
        DB::table('kuis_pendahuluan')->where('id_user','=',$nim)->update(
            ['nama' => $nama, 'jenis_kel' => $jk, 'angkatan' => $angkatan, 'prodi' => $prodi, 'Ipk' => $ipk, 'tahun_masuk' => $TahunMasuk, 'almt' => $Alamat, 'almt_kota' => $Kota, 'almt_prov' => $Provinsi, 'almt_kodepos' => $kodePos, 'telp' => $nomorHp, 'Id_user' => $nim,'status' => $status, 'tahun_keluar' => $TahunKeluar]
        );
        if($gambar != null){
          $nama_gambar =  $gambar->getClientOriginalName();
          //menyimpan gambar di folder
          $request->file('file_gambar')->move('uploadGambar',$nama_gambar);
          DB::table('user')->where('id_user','=',$nim)->update(
            ['nama'=>$nama,'file_gambar2'=>$nama_gambar]
          );
          return redirect('profile');
        } else {
          DB::table('user')->where('id_user','=',$nim)->update(
            ['nama'=>$nama]
          );
          return redirect('profile');
        }
         
    }
    //memanggil kuisioner perusahaan
    public function kuisionerPerusahaan(Request $request){
      //return $usaha;
      return view('kuisionerPerusahaan');
    }
    public function simpanPerusahaan(Request $request){
      //inisialisasi pertanyaan c
      $pert1 = $request->input('Tanggapan1');
      $pert2 = $request->input('Tanggapan2');
      $pert3 = $request->input('Tanggapan3');
      $pert4 = $request->input('Tanggapan4');
      $pert5 = $request->input('Tanggapan5');
      $pert6 = $request->input('Tanggapan6');
      $pert7 = $request->input('Tanggapan7');
      $pert8 = $request->input('Tanggapan8');
      $pert9 = $request->input('Tanggapan9');
      //inisialisasi per
      $pen1 = $request->input('penilaian1');
      $pen2 = $request->input('penilaian2');
      $pen3 = $request->input('penilaian3');
      $pen4 = $request->input('penilaian4');
      $pen5 = $request->input('penilaian5');
      $objek = $request->input('objek');
      //inisialisasi kuisioner perusahaan;
      $nama = $request->input('nama');
      $bidang = $request->input('bidang');
      $posisi = $request->input('posisi');
      //menyimpan penilaian1
      DB::table('penilaian1')->insert(
        [ 'pert1' => $pert1, 'pert2' => $pert2, 'pert3' => $pert3, 'pert4' => $pert4, 'pert5' => $pert5, 'pert6' => $pert6, 'pert7' => $pert7, 'pert8' => $pert8, 'pert9' => $pert9]
      );
      //menimpan penilaian2
      DB::table('penilaian2')->insert(
        ['pert1' => $pen1, 'pert2' => $pen2, 'pert3' => $pen3, 'pert4' => $pen4, 'pert5' => $pen5, 'objek' => $objek,'nama' => $nama, 'bidang' => $bidang, 'posisi' => $posisi]
      );
          
      //return $idPen;
      return redirect('kuisionerPerusahaan');
    }
    // ADMIN
    //home
    public function formElement(Request $request){
      $nim = $request->session()->get('nim');
      $pengguna = DB::table('user')->where('id_user','=',$nim)->get();
      $data = DB::table('user')->get();
      $berita = DB::table('berits')->join('user','user.id_user','=','berits.id_user')->get();
      return view('mimin/formElement')->with('pengguna', $pengguna)->with('data', $data)->with('berita', $berita);
    }
    public function adminProses(Request $request){
      //inisiasi variabel
      $nama = $request->nama;
      $pesan = $request->pesan;
      $sandi = $request->sandi;
      //inisiasi
      $gambar = $request->file('file_gambar');
      if($gambar != null){
        $nama_gambar = $gambar->getClientOriginalName();
        //menyimpan gambar di folder
        $request->file('file_gambar')->move('uploadGambar',$nama_gambar);
        DB::table('user')->insert(
          ['id_user' => $sandi, 'status' => 'admin', 'nama' => $nama, 'email' => $pesan, 'file_gambar2' => $nama_gambar]
        );
        return redirect('formElement');
      } else {
        DB::table('user')->insert(
          ['id_user' => $sandi, 'status' => 'admin', 'nama' => $nama, 'email' => $pesan]
        );
        return redirect('formElement');
      }
    }
    public function alumniProses(Request $request){
      //inisiasi variabel
      $nama = $request->nama2;
      $pesan = $request->pesan2;
      $sandi = $request->sandi2;
      //inisiasi
      $gambar = $request->file('file_gambar');
      if($gambar != null){
        $nama_gambar =  $gambar->getClientOriginalName();
        //menyimpan gambar di folder
        $request->file('file_gambar')->move('uploadGambar',$nama_gambar);
        DB::table('user')->insert(
          ['id_user' => $sandi, 'status' => 'alumni', 'nama' => $nama, 'email' => $pesan, 'file_gambar2' => $nama_gambar]
        );
        return redirect('formElement');
      } else {
        DB::table('user')->insert(
          ['id_user' => $sandi, 'status' => 'alumni', 'nama' => $nama, 'email' => $pesan]
        );
        return redirect('formElement');
      }
    }
    //hapus admin
    public function hapusAdmin($id){
      DB::table('user')->where('id_user','=',$id)->delete();
      return redirect('formElement');
    }
    //hapus Alumni
    public function hapusAlumni($id){
      DB::table('user')->where('id_user','=',$id)->delete();
      return redirect('formElement');
    }
    //hapus Berita
    public function hapusBerita($id){
      DB::table('berits')->where('id_berita','=',$id)->delete();
      return redirect('formElement');
    }
    //buat berita
    public function studyTable(Request $request){
      $nim = $request->session()->get('nim');
      $pengguna = DB::table('user')->where('id_user','=',$nim)->get();
      return view('mimin/studyTable')->with('pengguna', $pengguna);
    }
    public function simpanBerita(Request $request){
      //memanggil id user
      $nim = $request-> session()->get('nim');
      //inisiasi
      $gambar = $request->file('file_gambar');
      
      $judul = $request->judul;
      $isi = $request->isi;
      $tanggal = \Carbon\Carbon::now()->format('d-m-y');
      if($gambar != null){
        $nama_gambar = $gambar->getClientOriginalName();
        //menyimpan gambar di folder
        $request->file('file_gambar')->move('uploadGambar',$nama_gambar);
        //menyimpan data ke database
        DB::table('berits')->insert(
          ['id_user' => $nim,'judul' => $judul, 'isi' => $isi, 'file_gambar' => $nama_gambar, 'tanggal' => $tanggal]
        );
        return redirect('studyTable');
      } else {
        //menyimpan data ke database
        DB::table('berits')->insert(
          ['id_user' => $nim,'judul' => $judul, 'isi' => $isi, 'tanggal' => $tanggal]
        );
        return redirect('studyTable');
      }
    }
    public function formTable(Request $request){
      $nim = $request->session()->get('nim');
      $pengguna = DB::table('user')->where('id_user','=',$nim)->get();
      return view('mimin/cariKuis')->with('pengguna', $pengguna);
    }
/*
    public function cari($id){
      //ini yang atas
      $nim = $request->session()->get('nim');
      $pengguna = DB::table('user')->where('id_user','=',$nim)->get();
      //menangkap hasil
      $dapat1 = DB::table('kuis_pendahuluan')->where('id_user','=',$id)->get();
      $dapat2 = DB::table('kuisUtama')->where('id_user','=',$id)->get();
      return view('mimin/formTable')->with('pengguna', $pengguna)->with('dapat1', $dapat1)->with('dapat2', $dapat2);
    } */
    public function mencari(Request $request){
      //ini yang atas
      $nim = $request->session()->get('nim');
      $pengguna = DB::table('user')->where('id_user','=',$nim)->get();
      
      $cari = $request->input('cari');
      $request->session()->put('alumni',$cari);
      //menangkap hasil
      $dapat1 = DB::table('kuis_pendahuluan')->where('id_user','=',$cari)->get();
      $dapat2 = DB::table('kuisUtama')->where('id_user','=',$cari)->get();
      //inisialisasi
      $dapatWir = DB::table('wiraswasta')->where('id_user','=',$cari)->get();
      $dapatSek = DB::table('sekolah')->where('id_user','=',$cari)->get();
      $dapatKer = DB::table('kerja')->where('id_user','=',$cari)->get();
      $dapatKewir = DB::table('kerja_wiraswasta')->where('id_user','=',$cari)->get();
      $pekerjaan1 = DB::table('pekerjaan')->where('id_user','=',$cari)->get();
      $pekerjaan2 = DB::table('pekerjaanLain')->where('id_user','=',$cari)->get();
      $pekerjaan3 = DB::table('pekerjaanSebel')->where('id_user','=',$cari)->get();
      $pertanyaan25 = DB::table('pertanyaan25')->where('id_user','=',$cari)->get();
      $kuisUtama = DB::table('kuisUtama')->join('pertanyaan1','pertanyaan1.id_masaStudi','=','kuisUtama.id_masaStudi')
      ->join('pertanyaan2','pertanyaan2.id_aspekPembelajaran','=','kuisUtama.id_aspekPembelajaran')
      ->join('pertanyaan7','pertanyaan7.id_aspekBelajar','=','kuisUtama.id_aspekBelajar')
      ->join('pertanyaan8','pertanyaan8.id_fasilitas','=','kuisUtama.id_fasilitas')
      ->join('pertanyaan11','pertanyaan11.id_penting','=','kuisUtama.id_penting')
      ->join('pertanyaan24','pertanyaan24.id_kontribusi1','=','kuisUtama.id_kontribusi1')
      ->join('pertanyaan25','pertanyaan25.id_kontribusi2','=','kuisUtama.id_kontribusi2')
      ->join('pertanyaan26','pertanyaan26.id_kontribusi3','=','kuisUtama.id_kontribusi3')
      ->join('pertanyaan29','pertanyaan29.id_manfaat','=','pertanyaan29.id_manfaat')
      ->where('kuisUtama.id_user','=',$cari)->get();
      return view('mimin/formTable')->with('pengguna', $pengguna)->with('dapat1', $dapat1)->with('dapat2', $dapat2)->with('dapatWir', $dapatWir)->with('dapatSek', $dapatSek)->with('dapatKer', $dapatKer)->with('dapatKewir', $dapatKewir)->with('pekerjaan1', $pekerjaan1)->with('pekerjaan2', $pekerjaan2)->with('pekerjaan3', $pekerjaan3)->with('kuisUtama', $kuisUtama)->with('pertanyaan25', $pertanyaan25);
      //return $kuisUtama;
    }
    //download
public function unduh(Request $request){
      //ini yang atas
      //$nim = $request->session()->get('nim');
      //$nim = '14116036';
     // $pengguna = DB::table('user')->where('id_user','=',$nim)->get();
      
      $cari = $request->session()->get('alumni');
      //menangkap hasil
      $dapat1 = DB::table('kuis_pendahuluan')->where('id_user','=',$cari)->get();
      $dapat2 = DB::table('kuisUtama')->where('id_user','=',$cari)->get();
      //inisialisasi
      $dapatWir = DB::table('wiraswasta')->where('id_user','=',$cari)->get();
      $dapatSek = DB::table('sekolah')->where('id_user','=',$cari)->get();
      $dapatKer = DB::table('kerja')->where('id_user','=',$cari)->get();
      $dapatKewir = DB::table('kerja_wiraswasta')->where('id_user','=',$cari)->get();
      $pekerjaan1 = DB::table('pekerjaan')->where('id_user','=',$cari)->get();
      $pekerjaan2 = DB::table('pekerjaanLain')->where('id_user','=',$cari)->get();
      $pekerjaan3 = DB::table('pekerjaanSebel')->where('id_user','=',$cari)->get();
      $pertanyaan25 = DB::table('pertanyaan25')->where('id_user','=',$cari)->get();
      $kuisUtama = DB::table('kuisUtama')->join('pertanyaan1','pertanyaan1.id_masaStudi','=','kuisUtama.id_masaStudi')
      ->join('pertanyaan2','pertanyaan2.id_aspekPembelajaran','=','kuisUtama.id_aspekPembelajaran')
      ->join('pertanyaan7','pertanyaan7.id_aspekBelajar','=','kuisUtama.id_aspekBelajar')
      ->join('pertanyaan8','pertanyaan8.id_fasilitas','=','kuisUtama.id_fasilitas')
      ->join('pertanyaan11','pertanyaan11.id_penting','=','kuisUtama.id_penting')
      ->join('pertanyaan24','pertanyaan24.id_kontribusi1','=','kuisUtama.id_kontribusi1')
      ->join('pertanyaan25','pertanyaan25.id_kontribusi2','=','kuisUtama.id_kontribusi2')
      ->join('pertanyaan26','pertanyaan26.id_kontribusi3','=','kuisUtama.id_kontribusi3')
      ->join('pertanyaan29','pertanyaan29.id_manfaat','=','pertanyaan29.id_manfaat')
      ->where('kuisUtama.id_user','=',$cari)->get();
      //$pdf = PDF::loadView('mimin/downloadKuisioner')->with('pengguna', $pengguna)->with('dapat1', $dapat1)->with('dapat2', $dapat2)->with('dapatWir', $dapatWir)->with('dapatSek', $dapatSek)->with('dapatKer', $dapatKer)->with('dapatKewir', $dapatKewir)->with('pekerjaan1', $pekerjaan1)->with('pekerjaan2', $pekerjaan2)->with('pekerjaan3', $pekerjaan3)->with('kuisUtama', $kuisUtama)->with('pertanyaan25', $pertanyaan25);
      
      //$pdf = PDF::loadView('mimin/downloadKuisioner',['kuisUtama' => $kuisUtama]);
      //$pdf = PDF::loadView('pesanPerusahaan');
      $pdf = PDF::loadview('mimin/downloadKuisioner',['dapat1'=>$dapat1, 'dapatWir'=>$dapatWir, 'dapatKewir'=>$dapatKewir,'dapatSek' =>$dapatSek, 'pekerjaan1'=>$pekerjaan1,'pekerjaan2'=>$pekerjaan2,'pekerjaan3' =>$pekerjaan3,'kuisUtama'=>$kuisUtama]);
      //$pdf = PDF::loadview('mimin/downloadKuisioner')->with('pengguna', $pengguna)->with('dapat1', $dapat1)->with('dapat2', $dapat2)->with('dapatWir', $dapatWir)->with('dapatSek', $dapatSek)->with('dapatKer', $dapatKer)->with('dapatKewir', $dapatKewir)->with('pekerjaan1', $pekerjaan1)->with('pekerjaan2', $pekerjaan2)->with('pekerjaan3', $pekerjaan3)->with('kuisUtama', $kuisUtama)->with('pertanyaan25', $pertanyaan25);
      //return $kuisUtama;
      return $pdf->stream();
    }

    public function BarChart(){
      $user = DB::table('pertanyaan1')->get();
      $user2 = DB::table('pertanyaan2')->get();
      $user7 = DB::table('pertanyaan7')->get();
      $user8 = DB::table('pertanyaan8')->get();
      $user11= DB::table('pertanyaan11')->get();
      $user29 = DB::table('pertanyaan29')->get();
      $user24 =DB::table('pertanyaan24')->get();
      $user25 =DB::table('pertanyaan25')->get();
      $user26 =DB::table('pertanyaan26')->get();
  
  
      return view('mimin/barCharts',['user'=>$user, 'user2'=>$user2, 'user7'=>$user7,'user8'=>$user8,'user29'=>$user29, 'user24'=>$user24, 'user11'=>$user11, 'user25'=>$user25, 'user26'=>$user26]);
    }
}
