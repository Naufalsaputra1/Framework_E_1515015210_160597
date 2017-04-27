<div class="form-group">
	<label class="col-sm-2 control-label" id="Nama">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('Nama',null,['class'=>'form-control','id'=>'Nama','placeholder'=>"Nama"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="NIM"> Nim</label>
		<div class="col-sm-10">
			{!! Form::text('NIM',null,['class'=>'form-control','id'=>'NIM','placeholder'=>"NIM"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="Alamat"> Alamat</label>
		<div class="col-sm-10">
			{!! Form::textarea('Alamat',null,['class'=>'form-control','id'=>'Alamat','placeholder'=>"Alamat"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label"> Username</label>
		<div class="col-sm-10">
			{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label"> Password</label>
		<div class="col-sm-10">
			{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
		</div>
	</div>