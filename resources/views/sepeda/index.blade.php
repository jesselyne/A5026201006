@extends('layout.bahagia')

   @section('title', 'Praktikum Modul 3')
   @section('judulhalaman', 'Daftar Ketersediaan Sepeda')

   @section('konten')
	<a href="/sepeda/tambah"> + Tambah Daftar Baru</a>

	<br/>
	<br/>
    <div class="container" align="center">
        <form action="/sepeda/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari sepeda berdasarkan merk .." value="{{ old('cari') }}"> <br>
            <input type="submit" class="btn btn-default" value="CARI">
        </form>
        <br>
    </div>
	<table class="table table-bordered">
		<tr>
			<th style="width:40%">Merk Sepeda</th>
			<th style="width:30%">Ketersediaan</th>
			<th style="width:30%">Opsi</th>
		</tr>
		@foreach($sepeda as $s)
		<tr>
			<td>{{ $s->merksepeda }}</td>
			<td>{{ $s->tersedia }}</td>
			<td>
                <a class="btn btn-info btn-sm" href="/sepeda/view/{{ $s->kodesepeda}}">Lihat</a>
				|
				<a class="btn btn-warning btn-sm" href="/sepeda/edit/{{ $s->kodesepeda }}">Ubah</a>
				|
				<a class="btn btn-danger btn-sm" href="/sepeda/hapus/{{ $s->kodesepeda }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $sepeda->links() }}

    <p>
        <b>Keterangan Ketersediaan: </b><br>
        Y : Yes (Tersedia) <br>
        N : No (Tidak Tersedia) <br>
    </p>

@endsection
