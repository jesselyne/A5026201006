@extends('layout.bahagia')

   @section('title', 'Edit Data Pegawai')
   @section('judulhalaman', 'Edit Data Pegawai')

   @section('konten')
	<a href="/pegawai"><u>Kembali</u></a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Nama :</label>
		    <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
        </div>
        <div class="form-group">
            <label for="jabatan" class="col-sm-2 control-label">Jabatan :</label>
		    <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
        </div>
		<div class="form-group">
            <label for="umur" class="col-sm-2 control-label">Umur :</label>
		    <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
        </div>
		<div class="form-group">
            <label for="alamat" class="col-sm-2 control-label">Alamat :</label>
		    <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
        </div>
		<p style="text-align: center"><input type="submit" class="btn btn-primary" value="Simpan Data"></p>
	</form>
	@endforeach

@endsection
