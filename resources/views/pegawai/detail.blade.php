@extends('layout.bahagia')

   @section('title', 'Detail Data Pegawai')
   @section('judulhalaman', 'Detail Data Pegawai')

   @section('konten')
	<a href="/pegawai"><u>Kembali</u></a>

	<br/>
	<br/>

	@foreach($pegawai as $p)

        <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Nama : </label>
		    {{ $p->pegawai_nama }}
        </div>
        <div class="form-group">
            <label for="jabatan" class="col-sm-2 control-label">Jabatan :</label>
		    {{ $p->pegawai_jabatan }}
        </div>
		<div class="form-group">
            <label for="umur" class="col-sm-2 control-label">Umur :</label>
		    {{ $p->pegawai_umur }}
        </div>
		<div class="form-group">
            <label for="alamat" class="col-sm-2 control-label">Alamat :</label>
		    {{ $p->pegawai_alamat }}
        </div>

	@endforeach

@endsection
