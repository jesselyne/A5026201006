@extends('layout.bahagia')

   @section('title', 'Tambah Data')
   @section('judulhalaman', 'Tambah Data Mahasiswa')

   @section('konten')
	<a href="/nilaikuliah"> <u>Kembali</u></a>

	<br/>
	<br/>

	<form action="/nilaikuliah/store" method="post">
		{{ csrf_field() }}
        <div class="form-group">
            <label for="NRP" class="col-sm-2 control-label">NRP :</label>
            <input type="text" name="NRP" required="required"> <br/>
        </div>
        <div class="form-group">
            <label for="NilaiAngka" class="col-sm-2 control-label">Nilai Angka :</label>
		    <input type="number" name="NilaiAngka" required="required"> <br/>
        </div>
		<div class="form-group">
            <label for="SKS" class="col-sm-2 control-label">Jumlah SKS :</label>
		    <input type="number" name="SKS" required="required"> <br/>
        </div>
		<p style="text-align: center"><input type="submit" class="btn btn-primary" value="Simpan Data"></p>
	</form>

    @endsection
