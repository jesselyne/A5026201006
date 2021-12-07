@extends('layout.bahagia')

   @section('title', 'Edit Data Mutasi')
   @section('judulhalaman', 'Edit Data Mutasi')

   @section('konten')
	<a href="/mutasi"> <u>Kembali</u></a>

	<br/>
	<br/>

	@foreach($mutasi as $m)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->ID }}"> <br/>
        <div class="form-group">
            <label for="idpegawaimutasi" class="col-sm-2 control-label">ID Pegawai :</label>
		    <input type="number" name="idpegawai" required="required" value="{{ $m->IDPegawai }}"> <br/>
        </div>
        <div class="form-group">
            <label for="departemen" class="col-sm-2 control-label">Departemen :</label>
		    <input type="text" name="departemen" required="required" value="{{ $m->Departemen }}"> <br/>
        </div>
		<div class="form-group">
            <label for="subdepartemen" class="col-sm-2 control-label">Sub Departemen :</label>
		    <input type="text" name="subdepartemen" required="required" value="{{ $m->SubDepartemen }}"> <br/>
        </div>
		<div class="form-group">
            <label for="mulaibertugas" class="col-sm-2 control-label">Mulai Bertugas :</label>
		    <input type="datetime-local" name="mulaibertugas" required="required" value="{{ $m->MulaiBertugas }}"> <br/>
        </div>
		<p style="text-align: center"><input type="submit" class="btn btn-primary" value="Simpan Data"></p>
	</form>
	@endforeach
@endsection
