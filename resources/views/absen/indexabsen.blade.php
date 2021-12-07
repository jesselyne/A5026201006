@extends('layout.bahagia')

   @section('title', 'Tabel Absensi')
   @section('judulhalaman', 'Daftar Absensi Pegawai')

   @section('konten')
	<a href="/absen/add"> + Tambah Absensi</a>

	<br/>
	<br/>

	<table class="table table-bordered">
		<tr>

			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>

			<td>{{ $a->IDPegawai }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a class="btn btn-warning btn-sm" href="/absen/edit/{{ $a->ID }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/absen/hapus/{{ $a->ID }}">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>
    <p>
        Keterangan Status: <br>
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
    </p>
@endsection
