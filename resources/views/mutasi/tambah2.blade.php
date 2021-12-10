@extends('layout.bahagia')

   @section('title', 'Menambah Data Mutasi')
   @section('judulhalaman', 'Tambah Data Mutasi')

   @section('konten')
	<a href="/mutasi"> <u>Kembali</u></a>

	<br/>
	<br/>

	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}
        <div class="form-group">
            <label for="idpegawai" class="col-sm-2 control-label">ID Pegawai :</label>
            <select name="idpegawai" >
                @foreach($pegawai as $p)
                <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="departemen" class="col-sm-2 control-label">Departemen :</label>
		    <input type="text" name="departemen" required="required"> <br/>
        </div>
		<div class="form-group">
            <label for="subdepartemen" class="col-sm-2 control-label">Sub Departemen :</label>
		    <input type="text" name="subdepartemen" required="required"> <br/>
        </div>
		<div class="form-group">
            <label for="mulaibertugas" class="col-sm-2 control-label">Mulai Bertugas :</label>
		    <input type="datetime-local" name="mulaibertugas" required="required"> <br/>
        </div>
		<p style="text-align: center"><input type="submit" class="btn btn-primary" value="Simpan Data"></p>
	</form>

    @endsection
