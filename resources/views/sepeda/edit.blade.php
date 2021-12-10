@extends('layout.bahagia')

   @section('title', 'Mengubah Daftar Sepeda')
   @section('judulhalaman', 'Ubah Daftar Sepeda')

   @section('konten')
	<a href="/sepeda"><u>Kembali</u></a>

	<br/>
	<br/>

	@foreach($sepeda as $s)
	<form action="/sepeda/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $s->kodesepeda }}"> <br/>
        <div class="form-group">
            <label for="merk" class="col-sm-2 control-label">Merk Sepeda: </label>
		    <input type="text" required="required" name="merk" value="{{ $s->merksepeda }}"> <br/>
        </div>
        <div class="form-group">
            <label for="stok" class="col-sm-2 control-label">Jumlah Stock: </label>
		    <input type="text" required="required" name="stok" value="{{ $s->stocksepeda }}"> <br/>
        </div>
		<div class="form-group">
            <label for="ketersediaan" class="col-sm-2 control-label">Ketersediaan: </label>
		    <input type="checkbox" name="ketersediaan" value="Y" @if ($s->tersedia === "Y" ) checked="checked" @endif> Tersedia <br>
            <input type="checkbox" name="ketersediaan" value="N" @if ($s->tersedia === "N" ) checked="checked" @endif> Tidak Tersedia
        </div>
		<p style="text-align: center"><input type="submit" class="btn btn-primary" value="Simpan Data"></p>
	</form>
	@endforeach

@endsection
