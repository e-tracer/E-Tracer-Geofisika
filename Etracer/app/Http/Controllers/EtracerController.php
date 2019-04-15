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

        if($cekEmail != NULL and $cekNim != NULL){

            if($cekStatus == 'Alumni' or $cekStatus == 'alumni'){
                return redirect('berandaLogin');
            } else {
                return redirect('admin');
            }
         } else {
            return redirect('loginGagal');
        } 

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
        return view('kuisionerAlumniPendahuluan');
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
        $emaiKantor = $request->input('emailKantor');
        $alamatKantor = $request->input('alamatkantor');
        $pengahsilan = $request->input('pengahsilan');

        //input data pekerjaan lain
        $namaKantor2 = $request->input('namaKantor2');
        $bidangUsaha2 = $request->input('bidangUsaha2');
        $posisi2 = $request->input('posisi2');
        $jenisPekerjaan2 = $request->input('jenispekerjaan2');
        $sejak2 = $request->input('sejak2');
        $noKantor = $request->input('nokantor2');
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

        } else if ($status == 'Bekerja'){

        } else if ($status == 'Tidak Bekerja atau Melanjutkan Kuliah') {
            
        }



/*
        //menyimpan data status pekerjaan
        if($pernahWir != NULL){
            $cek=1;

            DB::table('wiraswasta')->insert(
                ['']
            );

        }else if($jenisBWir != NULL ){
            $cek=2

        } else if($kategoriBer != NULL){
            $cek=3

        } else if($pernahSe != NULL){
            $cek=4;

        } else {
             return redirect('KuisionerUtama');
        } */


        return redirect('KuisionerUtama');
    }


}
