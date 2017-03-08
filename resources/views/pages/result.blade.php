@extends('template')

@section('main')
	<div>
		<h2>Pencarian</h2>
		<p>Berikut nama yang anda cari:</p>
		<table class="hover">
			<thead>
				<tr>
					<th>NIM</th>
					<th>NAMA</th>
					<th>TAHUN LULUS</th>
					<th>KETERANGAN</th>
				</tr>
			</thead>
			<tbody>
				@if (count($hasil) > 0)
				@foreach($hasil as $data)
				<tr>
					<td>{{ $data->nim }}</td>
					<td>{{ $data->nama }}</td>
					<td>{{ $data->tahun }}</td>
					<td>{{ $data->keterangan }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
				Benar - benar alumni dari Universitas Muhammadiyah Sukabumi Program Studi Akuntansi.<br>
				<p class="text-right">
					<i class="fa fa-angle-double-left text-right"></i><a href="{{ url('/') }}"> Kembali</a></li>
				</p>

				@else
				Data Tidak Ditemukan.<br>
				<p class="text-right">
					<i class="fa fa-angle-double-left"></i><a href="{{ url('/') }}"> Kembali</a>
				</p>
				@endif
	</div>
@stop