@extends('layout.bahagia')

   @section('title', 'Menambah Data Pegawai')
   @section('judulhalaman', 'Menambah Data Pegawai')

   @section('konten')
	<a href="/pegawai"><u>Kembali</u></a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Nama :</label>
		    <input type="text" name="nama" required="required"> <br/>
        </div>
        <div class="form-group">
            <label for="jabatan" class="col-sm-2 control-label">Jabatan :</label>
		    <input type="text" name="jabatan" required="required"> <br/>
        </div>
		<div class="form-group">
            <label for="umur" class="col-sm-2 control-label">Umur :</label>
		    <input type="number" name="umur" required="required"> <br/>
        </div>
		<div class="form-group">
            <label for="alamat" class="col-sm-2 control-label">Alamat :</label>
		    <textarea name="alamat" required="required"></textarea> <br/>
        </div>
		<p style="text-align: center"><input type="submit" class="btn btn-primary" value="Simpan Data"></p>
	</form>
@endsection
