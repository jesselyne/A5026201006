@extends('layout.bahagia')

   @section('title', 'UAS')
   @section('judulhalaman', 'Data Nilai Kuliah Mahasiswa')

   @section('konten')
	<a href="/nilaikuliah/tambah"> + Data Mahasiswa</a>

	<br/>
	<br/>
	<table class="table table-bordered">
		<tr>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $n)
		<tr>
			<td>{{ $n->NRP }}</td>
			<td>{{ $n->NilaiAngka }}</td>
			<td>{{ $n->SKS }}</td>
            <td>
                @if($n->NilaiAngka <= 40)
                    <p>D</p>
                @elseif ($n->NilaiAngka <= 60)
                    <p>C</p>
                @elseif ($n->NilaiAngka <= 80)
                    <p>B</p>
                @else
                    <p>A</p>
                @endif
            </td>
            <td>{{ $n-> $n->SKS * $n->NilaiAngka }} </td>
		</tr>
		@endforeach
	</table>
    {{ $nilaikuliah->links() }}
@endsection
