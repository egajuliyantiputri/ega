@extends('layouts.master')
@section('isi')
<div class="row">
<center><h1>Data Orang Tua</h1></center>
<div class="panel panel-primary">
<div class="panel-heading">Data Orangtua
<div class="panel-title-pull-right">
	<a href="{{ URL::previous()}}">kembali</a></div>
</div>

<div class="panel-body">
		<div class="form-group">
		<label class="control-lable">Nama Ayah</label>
		<input type="text" name="a" value="{{$$data->nama ayah}}" class="form-control" readonly="">
		</div>
		<div class="form-group">
		<label class="control-lable">Nama Ibu</label>
		<input type="text" name="b" value="{{$$data->nama ibu}}" class="form-control" readonly="">
		</div>
		<div class="form-group">
		<label class="control-lable">Umur Ayah</label>
		<input type="text" name="c" value="{{$$data->umur ayah}}" class="form-control" readonly="">
		</div>
		<div class="form-group">
		<label class="control-lable">Umur Ibu</label>
		<input type="text" name="d" value="{{$$data->umur ibu}}" class="form-control" readonly="">
		</div>
		<div class="form-group">
		<label class="control-lable">Alamat</label>
		<textarea class="form-control" rows="10" name="e" readonly="">{{$$data->nama ayah}}"</textarea>
		</div>
		</div>
		</form>
		</div>
		</div>
</div>
@endsection