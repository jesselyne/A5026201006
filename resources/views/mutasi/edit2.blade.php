<!DOCTYPE html>
<html>
<head>
    <title>Tugas PWEB A</title>
</head>
<body>
    <h3>Tugas PWEB Query Builder</h3>

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	@foreach($mutasi as $m)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->ID }}"> <br/>
		ID Pegawai <input type="number" name="idpegawai" required="required" value="{{ $m->IDPegawai }}"> <br/>
		Departemen <input type="text" name="departemen" required="required" value="{{ $m->Departemen }}"> <br/>
		Sub Departemen <input type="text" name="subdepartemen" required="required" value="{{ $m->SubDepartemen }}"> <br/>
		Mulai Bertugas <input type="datetime-local" name="mulaibertugas" required="required" value="{{ $m->MulaiBertugas }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
