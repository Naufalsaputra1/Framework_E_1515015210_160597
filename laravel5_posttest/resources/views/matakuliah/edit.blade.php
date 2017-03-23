@extends('master')
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('matakuliah')}}">
		<i class="fa text-default fa-chevron-left"></i>
		</a>Perbraui data Matakuliah</strong>
	</div>
	{!! form::model($matakuliah, ['method' => 'PATCH', 'route' => ['matakuliah.update', $matakuliah->id],'class' => 'form-horizontal']) !!}
       			 @include('matakuliah/form/form', ['submit_text' => 'Edit Data Matakuliah'])
		<div style="width: 100%;text-align: right;">
			<button class="btn btn-info">
				<i class="fa fa-save"></i>Perbarui
			</button>
			<button type="reset" class="btn btn-danger">
				<i class="fa fa-undo"></i>Ulangi
			</button>
		</div>
		{!!form::close()!!}
		</div>
@stop