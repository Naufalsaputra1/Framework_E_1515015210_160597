<div class="form-group">
	<label class="col-sm-2 control-label" id="Mahasiswa_id">Mahasiswa</label>
	<div class="col-sm-10">
		{!! Form::select('Mahasiswa_id',$mahasiswa->listMahasiswaDanNim(),null,['class'=>'form-control','id'=>'Mahasiswa_id','placeholder'=>"Mahasiswa"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="Dosen_Matakuliah_id"> Matakuliah</label>
		<div class="col-sm-10">
			{!! Form::select('Dosen_Matakuliah_id',$dosen_matakuliah->listDosenDanMatakuliah(),null,['class'=>'form-control','id'=>'Dosen_Matakuliah_id','placeholder'=>"Matakuliah"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="Ruangan_id"> Ruangan</label>
		<div class="col-sm-10">
			{!! Form::select('Ruangan_id',$ruangan->lists('title','id'),null,['class'=>'form-control','id'=>'Ruangan_id','placeholder'=>"Ruangan"]) !!}
		</div>
	</div>
	