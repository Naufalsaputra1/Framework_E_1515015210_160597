@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('dosenn') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data Dosen</strong>
			</div>
			<table class="table">
				<tr>
						<td>Nama</td>
						<td>:</td>
						<td>{{ $dosenn->Nama }}</td>
				</tr>
				<tr>
						<td>NIP</td>
						<td>:</td>
						<td>{{ $dosenn->NIP }}</td>
				</tr>
				<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>{{ $dosenn->Alamat }}</td>
				</tr>
				<tr>
						<td>Username</td>
						<td>:</td>
						<td>{{ $dosenn->pengguna->username }}</td>
				</tr>
				<tr>
						<td>Password</td>
						<td>:</td>
						<td>{{ $dosenn->pengguna->password }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$dosenn->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$dosenn->updated_at}}</td>
				</tr>
		</table>
</div>
@stop