<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{
    public function index()
    {
        $nilaikuliah = DB::table('nilaikuliah')->paginate(10);
    	return view('nilaikuliah.index',['nilaikuliah' => $nilaikuliah]);

    }

    public function tambah()
    {
	return view('nilaikuliah.tambah');

    }

    public function store(Request $request)
    {
	DB::table('nilaikuliah')->insert([
		'NRP' => $request->NRP,
		'NilaiAngka' => $request->NilaiAngka,
		'SKS' => $request->SKS,
	]);
	return redirect('/nilaikuliah');

    }
}
