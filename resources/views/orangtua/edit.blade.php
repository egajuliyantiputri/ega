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
	<form action="{{route('orangtua.update',$orangtua->id)}}" method="post">
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
		<label class="control-lable">Nama Ayah</label>
		<input type="text" name="a" value="{{$orangtua->nama_ayah}}" class="form-control" required="">
		</div>

		<div class="form-group">
		<label class="control-lable">Nama Ibu</label>
		<input type="text" name="b" value="{{$orangtua->nama_ibu}}" class="form-control" required="">
		</div>

		<div class="form-group">
		<label class="control-lable">Umur Ayah</label>
		<input type="text" name="c" value="{{$orangtua->umur_ayah}}" class="form-control" required="">
		</div>

		<div class="form-group">
		<label class="control-lable">Umur Ibu</label>
		<input type="text" name="d" value="{{$orangtua->umur_ibu}}" class="form-control" required="">
		</div>

		<div class="form-group">
		<label class="control-lable">Alamat</label>
		<textarea class="form-control" rows="10" name="e" required="">{{$orangtua->alamat}}</textarea>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-succes">Simpan
			</button>
			<button type="reset" class="btn btn-danger">Reset
			</button>
		</div>
		</form>
		</div>
		</div>
</div>
@endsection