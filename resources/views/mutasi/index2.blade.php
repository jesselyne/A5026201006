@extends('layout.bahagia')

   @section('title', 'Data Mutasi Pegawai')
   @section('judulhalaman', 'Data Pegawai Mutasi')

   @section('konten')
	<a href="/mutasi/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table class="table table-bordered">
		<tr>
            <th>ID</th>
			<th>ID Pegawai</th>
			<th>Departemen</th>
			<th>Sub Departemen</th>
            <th>Mulai Bertugas</th>
			<th>Opsi</th>
		</tr>
		@foreach($mutasi as $m)
		<tr>
            <td>{{ $m->ID }}</td>
			<td>{{ $m->IDPegawai }}</td>
			<td>{{ $m->Departemen }}</td>
			<td>{{ $m->SubDepartemen }}</td>
            <td>{{ $m->MulaiBertugas }}</td>
			<td>
				<a class="btn btn-warning btn-sm" href="/mutasi/edit/{{ $m->ID }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/mutasi/hapus/{{ $m->ID }}">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
