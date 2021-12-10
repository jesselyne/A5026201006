<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MutasiController extends Controller
{
    public function index2()
    {
    	//$mutasi = DB::table('mutasi')->get();
        $mutasi = DB::table('mutasi')
       ->join('pegawai', 'mutasi.IDPegawai', '=', 'pegawai.pegawai_id')
       ->select('mutasi.*', 'pegawai.pegawai_nama')
       ->paginate(5) ;
    	return view('mutasi.index2',['mutasi' => $mutasi]);
    }
    public function tambah()
    {
        // mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get(); //defaultnya urut Primary Key
        // memanggil view add
        return view('mutasi.tambah2', ['pegawai' => $pegawai]);
	    //return view('mutasi.tambah2');
    }

    public function store(Request $request)
    {
	DB::table('mutasi')->insert([
		'IDPegawai' => $request->idpegawai,
		'Departemen' => $request->departemen,
		'SubDepartemen' => $request->subdepartemen,
		'MulaiBertugas' => $request->mulaibertugas
	]);
	return redirect('/mutasi');
    }

    public function edit($id)
    {
    // mengambil data absen berdasarkan id yang dipilih
    $mutasi = DB::table('mutasi')->where('ID', $id)->get();

    // mengambil data dari table pegawai
    $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get(); //defaultnya urut Primary Key

    // passing data absen yang didapat ke view update.blade.php
    return view('mutasi.edit2', ['mutasi' => $mutasi,'pegawai' => $pegawai]);

	//$mutasi = DB::table('mutasi')->where('ID',$id)->get();
	//return view('mutasi.edit2',['mutasi' => $mutasi]);
    }

    public function update(Request $request)
    {
	DB::table('mutasi')->where('ID',$request->id)->update([
		'IDPegawai' => $request->idpegawai,
		'Departemen' => $request->departemen,
		'SubDepartemen' => $request->subdepartemen,
		'MulaiBertugas' => $request->mulaibertugas
	]);
	return redirect('/mutasi');
    }

    public function hapus($id)
    {
	DB::table('mutasi')->where('ID',$id)->delete();
	return redirect('/mutasi');
    }
}
