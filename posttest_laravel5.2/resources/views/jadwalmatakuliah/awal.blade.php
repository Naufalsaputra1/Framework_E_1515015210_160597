@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data jadwalmatakuliah</strong>
		<a href="{{url('jadwalmatakuliah/tambah') }}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>jadwalmatakuliah</a>
			<div class="clearfix"></div>
	</div>
	
	<table class="table">
		<thead>
		<tr>
			<th>id</th>
			<th>mahasiswa id</th>
			<th>ruangan id</th>
			<th>dosen matakuliah id</th>
			<th>Aksi</th>
		</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $jadwalmatakuliah)
				<tr>
					<td>{{ $x++ }}</td>
					
					<td>{{ $jadwalmatakuliah->mahasiswa_id or 'id kosong'}}</td>
					<td>{{ $jadwalmatakuliah->ruangan_id or 'id kosong'}}</td>
					<td>{{ $jadwalmatakuliah->dosen_matakuliah_id or 'id kosong'}}</td>
					<td>
						<div class="btn-group" role="group">
							<a href="{{url('jadwalmatakuliah/edit/'.$jadwalmatakuliah->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
								<i class="fa fa-pencil"></i>
							</a>

							<a href="{{url('jadwalmatakuliah/'.$jadwalmatakuliah->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
								<i class="fa fa-eye"></i>
							</a>

							<a href="{{url('jadwalmatakuliah/hapus/'.$jadwalmatakuliah->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
								<i class="fa fa-premove"></i>
							</a>
						</div>

						</td>
						</tr>
						@endforeach	
				</tr>
		</tbody>
	</table>
</div>
@stop