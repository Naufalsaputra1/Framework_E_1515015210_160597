<div class="form-group">
	<label class="col-sm-2 control-label" id="Dosen_id">Dosen</label>
	<div class="col-sm-10">
		{!! Form::select('Dosen_id',$dosen->listDosenDanNip(),null,['class'=>'form-control','id'=>'Dosen_id','placeholder'=>"Dosen"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="matakuliah_id"> Matakuliah</label>
		<div class="col-sm-10">
			{!! Form::select('Matakuliah_id',$matakuliah->lists('Title', 'id'),null,['class'=>'form-control','id'=>'matakuliah_id','placeholder'=>"Matakuliah"]) !!}
		</div>
	</div>
	