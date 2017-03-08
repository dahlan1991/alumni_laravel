@extends('admin-template')

@section('main')
	<div class="small-12 columns">
		
		<table class="hover">
			<thead>
				<tr>
					<td>No</td>
					<td>NIM</td>
					<td>NAMA</td>
					<td>TAHUN LULUS</td>
					<td>KETERANGAN</td>
				</tr>
			</thead>
			<tbody>
				{{-- 	penempatan perulangan
						$i = 1; taruh di atas
						@foreach()
						{{ $i++ }}
						@endforeach
				--}}
				@if (!empty($alumni_list))
				<?php $i=1; ?> 
				@foreach ($alumni_list as $data)
				<tr>
					<td><?php echo $i; ?></td>
					<td>{{ $data->nim }}</td>
					<td>{{ $data->nama }}</td>
					<td>{{ $data->tahun }}</td>
					<td>{{ $data->keterangan }}</td>
				</tr>
				<?php $i++; ?> 
				@endforeach
			</tbody>
		@else
			<p>Tidak ada data alumni</p>
		@endif
		</table>
		<div class="table-nav">
			<div class="jumlah-data">
				<strong>Jumlah Data : {{ $jumlah_alumni }}</strong>
			</div>
			<div class="paging">
				{{ $alumni_list->links()}}			
			</div>
		</div>
		
	</div>

@stop