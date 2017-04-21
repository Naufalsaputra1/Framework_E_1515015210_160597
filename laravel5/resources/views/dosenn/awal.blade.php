@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data Dosen</strong>
			<a href="{{ url('dosenn/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> Dosen</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>Nama</th>
									<th>NIP</th>
									<th>Alamat</th>
									<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($semuaDosen as $dosenn)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $dosenn->Nama or 'Nama kosong'}}</td>
									<td>{{ $dosenn->NIP or 'NIP kosong'}}</td>
									<td>{{ $dosenn->Alamat or 'Alamat kosong'}}</td>
									<td>
										<div class="btn-group" role="group">
											<a href="{{url('dosenn/edit/'.$dosenn->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('dosenn/'.$dosenn->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('dosenn/hapus/'.$dosenn->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop