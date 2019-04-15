<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EtracerController extends Controller
{
    //CRUD Read
    /*
    public function index(){
    	//mengambil data dari tabel user
    	$pengguna = DB::table('user')->get();

    	//mengirim data user ke view index
    	return view('index',['pengguna' => $pengguna]);
    }*/


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
                return redirect('admin');
            }
         } else {
            return redirect('loginGagal');
        }

        //return $cek;

    }


    //halaman berandaLogin    
    public function login(Request $request){

        $nim = $request->session()->get('nim');

    	//mengammbil data dari tabel user
    	$pengguna = DB::table('user')->where('id_user','=',$nim)->get();

    	//mengirim data user ke view beranda
    	return view('beranda_login',['pengguna' => $pengguna]);

        //return $pengguna;
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
        $pengahsilan = $request->input('pengahsilan');

        //input data pekerjaan lain
        $namaKantor2 = $request->input('namaKantor2');
        $bidangUsaha2 = $request->input('bidangUsaha2');
        $posisi2 = $request->input('posisi2');
        $jenisPekerjaan2 = $request->input('jenispekerjaan2');
        $sejak2 = $request->input('sejak2');
        $noKantor2 = $request->input('nokantor2');
        $emailKantor2 = $request->input('emailKantor2');
        $alamatKantor2 = $request->input('alamatkantor2');
        $pengahsilan2 = $request->input('pengahsilan2');

        //input data pekerjaan sebelumnya
        $namaKantor3 = $request->input('namaKantor3');
        $bidangUsaha3 = $request->input('bidangUsaha3');
        $posisi3 = $request->input('posisi3');
        $alasanPindah = $request->input('alasanPindah');



        //menimpandata kuisioner pendahuluan

        DB::table('kuis_pendahuluan')->insert(
            ['nama' => $nama, 'jenis_kel' => $jk, 'angkatan' => $angkatan, 'prodi' => $prodi, 'Ipk' => $ipk, 'tahun_masuk' => $TahunMasuk, 'almt' => $Alamat, 'almt_kota' => $Kota, 'almt_prov' => $Provinsi, 'almt_kodepos' => $kodePos, 'telp' => $nomorHp,'kerjaan_pos' => $komenPositif, 'kerjaan_neg' => $komenNegatif, 'gambaran_ideal' => $gambaran,'Id_user' => $nim]
        );

        $id_pendahuluan = DB::table('kuis_pendahuluan')->select('id_kuisioner')->where('Id_user','=',$nim)->value('id_kuisioner');

        if($status == 'Wiraswasta'){
            DB::table('wiraswasta')->insert(
                ['Id_kuisioner' => $id_pendahuluan,'Id_user' => $nim,'kerja_sebelum' => $pernahWir, 'brp_lama' => $brplamaWir,'alasana' => $alasanWir,'jenis' => $jenisWir, 'asal_modal' => $modalWir, 'omset' => $omsetWir]
            );
        } else if ($status == 'Bekerja dan wiraswasta'){
            DB::table('kerja_wiraswasta')->insert(
                ['id_kuisioner' => $id_pendahuluan, 'id_user' => $nim, 'jenis' => $jenisBWir, 'asal_modal' => $modalBwir, 'omset' => $omsetBwir]
            );
        } else if ($status == 'Bekerja'){
            DB::table('kerja')->insert(
                ['id_kuisioner' => $id_pendahuluan, 'id_user' => $nim, 'kategori' => $kategoriBer, 'sesuai' => $sesuaiBer]
            );
        } else if ($status == 'Tidak Bekerja atau Melanjutkan Kuliah') {
            DB::table('sekolah')->insert(
                ['id_kuisioner' => $id_pendahuluan, 'id_user' => $nim, 'pernah_kerja' => $pernahSe, 'berapa_lama' => $brplamaSe, 'alasan_tdkkerja' => $alasanSe]
            );
        }

        //menyimpan data pekerjaan utama

        DB::table('pekerjaan')->insert(
            ['id_user' => $nim, 'nama_kantor' => $namaKantor, 'bidang_usaha' => $bidangUsaha, 'jabatan' => $posisi, 'jenis_pekerjaan' => $jenisPekerjaan, 'web_kantor' => $emailKantor, 'telp_kantor' =>$noKantor, 'alamat_kantor' => $alamatKantor, 'sejak' =>  $sejak,'penghasilan' => $penghasilan]
        );

        //menyimpan data pekerjaan lain
        DB::table('pekerjaanLain')->insert(
            ['id_user' => $nim, 'nama_kantor' => $namaKantor2, 'bidang_usaha' => $bidangUsaha2, 'jabatan' => $posisi2, 'jenis_pekerjaan' => $jenisPekerjaan2, 'web_kantor' => $emailKantor2, 'telp_kantor' =>$noKantor2, 'alamat_kantor' => $alamatKantor2, 'sejak' =>  $sejak2,'penghasilan' => $penghasilan2]
        );

        //menyimpan data pekerjaan sebelumnya
         DB::table('pekerjaanLSebel')->insert(
            ['id_user' => $nim, 'nama_kantor' => $namaKantor3, 'bidang_usaha' => $bidangUsaha3, 'jabatan' => $posisi3, 'deskripsi' => $alasanPindah]
        );
        
        return redirect('KuisionerUtama');
    }


}
