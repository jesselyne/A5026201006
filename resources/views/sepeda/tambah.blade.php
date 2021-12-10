@extends('layout.bahagia')

   @section('title', 'Menambah Daftar Baru')
   @section('judulhalaman', 'Tambah Daftar Sepeda')

   @section('konten')
	<a href="/sepeda"><u>Kembali</u></a>

	<br/>
	<br/>

	<form action="/sepeda/store" method="post">
		{{ csrf_field() }}
        <div class="form-group">
            <label for="merk" class="col-sm-2 control-label">Merk Sepeda: </label>
		    <input type="text" name="merk" required="required"> <br/>
        </div>
        <div class="form-group">
            <label for="stok" class="col-sm-2 control-label">Jumlah Stock: </label>
		    <input type="text" name="stok" required="required"> <br/>
        </div>
		<div class="form-group">
            <label for="ketersediaan" class="col-sm-2 control-label">Ketersediaan: </label>
		    <input type="checkbox" name="ketersediaan" value="Y"> Tersedia <br>
            <input type="checkbox" name="ketersediaan" value="N"> Tidak Tersedia
        </div>
		<p style="text-align: center"><input type="submit" class="btn btn-primary" value="Simpan Data"></p>
	</form>
@endsection
