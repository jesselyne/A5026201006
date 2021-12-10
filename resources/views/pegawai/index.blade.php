@extends('layout.bahagia')

   @section('title', 'Tabel Data Pegawai')
   @section('judulhalaman', 'Data Pegawai')

   @section('konten')
	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>
    <div class="container" align="center">
        <form action="/pegawai/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Pegawai berdasarkan nama atau alamat .." value="{{ old('cari') }}"> <br>
            <input type="submit" class="btn btn-default" value="CARI">
        </form>
        <br>
    </div>
	<table class="table table-bordered">
		<tr>
			<th style="width:40%">Nama</th>
			<th style="width:30%">Alamat</th>
			<th style="width:30%">Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a class="btn btn-default btn-sm" href="/pegawai/view/{{ $p->pegawai_id }}">View Detail</a>
				|
				<a class="btn btn-warning btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $pegawai->links() }}

@endsection
