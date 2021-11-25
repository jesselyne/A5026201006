<!DOCTYPE html>
<html>
<head>
	<title>Tugas PWEB A</title>
</head>
<body>
	<h3>Tugas PWEB Query Builder</h3>

	<a href="/mutasi/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table border="1">
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
				<a href="/mutasi/edit/{{ $m->ID }}">Edit</a>
				|
				<a href="/mutasi/hapus/{{ $m->ID }}">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
