<div class="form-group">
	<label class="col-sm-2 control-label" id="dosen_id"> Id Mahasiswa</label>
	<div class="col-sm-10">
		{!! Form::select('mahasiswa_id',$mahasiswa->list('nama', 'id'),null,['class'=>'form-control','id'=> 'mahasiswa_id','placeholder'=>"mahasiswa"]) !!}		
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="dosen_id"> Id Dosen</label>
	<div class="col-sm-10">
		{!! Form::select('dosen_id',$dosenmatakuliah->list('nama', 'id'),null,['class'=>'form-control','id'=> 'dosen_id','placeholder'=>"dosen"]) !!}		
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label"> Id Ruangan</label>
	<div class="col-sm-10">
		{!!Form::select ('ruangan_id', $ruangan->lists('title','id'), null, ['class']=>'form-control', 'id'=>'ruangan')!!}
	</div>
</div>
