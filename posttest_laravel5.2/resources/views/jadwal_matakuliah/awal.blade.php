@extends('master')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
	<strong>Seluruh Data Jadwal Mahasiswa</strong>
	<a href="{{url('jadwal_matakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right">
	<i class="fa fa-plus"></i>Jadwal Mahasiswa</a>
	<div class="clearfix"></div>
</div>
	<table class="table">
		<thead><tr>
			<th>No.</th>
			<th>Nama Mahasiswa</th>
			<th>NIM Mahasiswa</th>
			<th>Nama Matakuliah</th>
			<th>Aksi</th>
		</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach($semuaJadwalMatakuliah as $Jadwal_Matakuliah)
			<tr>
				<td>{{$x++ }}</td>
				<td>{{ $jadwal_matakuliah->mahasiswa->nama or 'nama kosong'}}</td>
				<td>{{ $jadwal_matakuliah->mahasiswa->nim or 'nim kosong'}}</td>
				<td>{{ $jadwal_matakuliah->dosen_matakuliah->matakuliah->title or 'matakuliah kosong'}}</td>
				<td>
					<div class="btn-group" role="group">
	<a href="{{url('jadwal_matkuliah/edit/'.$jadwal->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Edit">Edit</a>
	<a href  ="{{url('jadwal_matkuliah/lihat/'.$jadwal->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="lihat">Lihat</a>
	<a href="{{url('jadwal_matkuliah/hapus/'.$jadwal->id)}}}/" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="hapus">Hapus</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop