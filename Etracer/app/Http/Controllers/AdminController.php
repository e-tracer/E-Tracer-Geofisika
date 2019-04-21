<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\UploadedFile;

class AdminController extends Controller
{
  public function AdminHome()
  {
    return view('mimin/admin');
  }

  public function FormPendahuluan()
  {
   $formPendahuluan = DB::table('kuis_pendahuluan')->get();
   $kuisUtama = DB::table('kuisutama')->get();
   $pekerjaan = DB::table('pekerjaan')->get();
   $pekerjaanLain = DB::Table('pekerjaanlain')->get();
   $pekerjaanSebelum = DB::Table('pekerjaansebel')->get();
   $kerjaWiraswasta = DB::Table('kerja_wiraswasta')->get();
   return view ('mimin/formKuisioner',['formPendahuluan' => $formPendahuluan, 'kuisUtama'=> $kuisUtama, 'pekerjaan'=>$pekerjaan,
   'pekerjaanLain'=>$pekerjaanLain, 'pekerjaanSebelum'=>$pekerjaanSebelum, 'kerjaWiraswasta'=>$kerjaWiraswasta]);
 }

  public function PengaturanUser()
  {
    $user = DB::table('user')->get();
    return view('mimin/user', ['user' => $user]);
  }

  public function TambahUser()
  {
    $user = DB::table('user')->get();
    return view('mimin/tambahUser', ['user' => $user]);
  }

  public function Store(Request $request)
  {
    DB::table('user')->insert([
      'id_user' => $request->id_user,
      'nama' => $request->nama,
      'email' => $request->email,
      'status' => $request->status,
      'tgl_lahir' => $request->tgl_lahir
    ]);

    //mengalihkan ke halaman user
    return redirect('adminPengaturanUser');
  }

  // method untuk hapus data pegawai
  public function hapusUser($id)
  {
    // menghapus data pegawai berdasarkan id yang dipilih
    DB::table('user')->where('id_user', $id)->delete();

    // alihkan halaman ke halaman pegawai
    return redirect('adminPengaturanUser');
  }
  public function EditUser($id)
  {
    // menghapus data pegawai berdasarkan id yang dipilih
    $user = DB::table('user')->where('id_user', $id)->get();

    // alihkan halaman ke halaman pegawai
    return view('mimin/editUser',['user'=>$user]);
  }
  public function UpdateUser(Request $request, $id){
       DB::table('user')->where('id_user',$request->id_user)->update([
      'nama' => $request->nama,
      'email' => $request->email,
      'status' => $request->status,
      'tgl_lahir' => $request->tgl_lahir
    ]);

    return redirect ('adminPengaturanUser');
  }

  public function DownloadKuisPendahuluan (){
      $printPdf = DB::table('kuis_pendahuluan')->get();
      $pdf = PDF::loadView('myPDF', ['printPdf'=>$printPdf]);
      return $pdf->download('kuis.pdf');


  }
}
