@extends('layout.bahagia')

   @section('title', 'Detail Daftar Sepeda')
   @section('judulhalaman', 'Detail Data Sepeda')

   @section('konten')
	<a href="/sepeda"><u>Kembali</u></a>

	<br/>
	<br/>

	@foreach($sepeda as $s)

        <div class="form-group">
            <label for="kode" class="col-sm-2 control-label">Kode Sepeda : </label>
		    {{ $s->kodesepeda }}
        </div>
        <div class="form-group">
            <label for="merk" class="col-sm-2 control-label">Merk Sepeda :</label>
		    {{ $s->merksepeda }}
        </div>
		<div class="form-group">
            <label for="stok" class="col-sm-2 control-label">Stock Sepeda :</label>
		    {{ $s->stocksepeda }}
        </div>
		<div class="form-group">
            <label for="ketersediaan" class="col-sm-2 control-label">Ketersediaan :</label>
		    {{ $s->tersedia}}
        </div>

	@endforeach
    <br>
    <p>
        <b>Keterangan Ketersediaan: </b><br>
        Y : Yes (Tersedia) <br>
        N : No (Tidak Tersedia) <br>
    </p>

@endsection
