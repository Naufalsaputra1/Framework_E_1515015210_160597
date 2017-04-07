@extends('master')
@section('container')

<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('jadwalmatakuliah') }}">
		<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i>
		</a>Detail data jadwalmatakuliah</strong>
	</div>
	
	<table class="table">
		<tr>
			<td>id</td>
			<td>:</td>
			<td>{{$jadwalmatakuliah->id}}</td>
		</tr>

		<tr>
			<td>id mahasiswa</td>
			<td>:</td>
			<td>{{ $jadwalmatakuliah->mahasiswa_id}}</td>
		</tr>
		<tr>
			<td>id dosen</td>
			<td>:</td>
			<td>{{ $jadwalmatakuliah->dosen_matakuliah_id}}</td>
		</tr>

		<tr>
			<td>ruangan id</td>
			<td>:</td>
			<td>{{ $jadwalmatakuliah->ruangan_id}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$jadwalmatakuliah->created_at}}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$jadwalmatakuliah->updated_at}}</td>
		</tr>
	</table>
	</div>
@stop