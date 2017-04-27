@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('mahasiswa') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data mahasiswa</strong>
			</div>
			<table class="table">
				<tr>
						<td>Nama</td>
						<td>:</td>
						<td>{{ $mahasiswa->Nama }}</td>
				</tr>
				<tr>
						<td>NIM</td>
						<td>:</td>
						<td>{{ $mahasiswa->NIM }}</td>
				</tr>

				<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>{{ $mahasiswa->Alamat }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$mahasiswa->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$mahasiswa->updated_at}}</td>
				</tr>
		</table>
</div>
@stop