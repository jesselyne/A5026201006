<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SepedaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table sepeda
    	$sepeda = DB::table('sepeda')->paginate(10);

    	// mengirim data sepeda ke view index
    	return view('sepeda.index',['sepeda' => $sepeda]);

    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table sepeda sesuai pencarian data
		$sepeda = DB::table('sepeda')
		->where('merksepeda','like',"%".$cari."%")
		->paginate();

    	// mengirim data sepeda ke view index
		return view('sepeda.index',['sepeda' => $sepeda]);

	}

    public function detail($id)
    {
        // mengambil data sepeda berdasarkan kodesepeda yang dipilih
        $sepeda = DB::table('sepeda')->where('kodesepeda', $id)->get();
        // passing data sepeda yang didapat ke view edit.blade.php
        return view('sepeda.detail', ['sepeda' => $sepeda]);
    }

    public function tambah()
    {
        // memanggil view tambah
	    return view('sepeda.tambah');

    }

    public function store(Request $request)
    {
	    // insert data ke table sepeda
	    DB::table('sepeda')->insert([
		'merksepeda' => $request->merk,
		'stocksepeda' => $request->stok,
		'tersedia' => $request->ketersediaan,
	]);
	// alihkan halaman ke halaman sepeda
	return redirect('/sepeda');

    }

    public function edit($id)
    {
	    // mengambil data sepeda berdasarkan kodesepeda yang dipilih
	    $sepeda = DB::table('sepeda')->where('kodesepeda',$id)->get();
	    // passing data sepeda yang didapat ke view edit.blade.php
	    return view('sepeda.edit',['sepeda' => $sepeda]);

    }

    public function update(Request $request)
    {
	    // update data pegawai
	    DB::table('sepeda')->where('kodesepeda',$request->id)->update([
		    'merksepeda' => $request->merk,
		    'stocksepeda' => $request->stok,
		    'tersedia' => $request->ketersediaan,
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('/sepeda');
    }

    public function hapus($id)
    {
	    // menghapus data sepeda berdasarkan kodesepeda yang dipilih
	    DB::table('sepeda')->where('kodesepeda',$id)->delete();

	    // alihkan halaman ke halaman pegawai
	    return redirect('/sepeda');
    }

}
