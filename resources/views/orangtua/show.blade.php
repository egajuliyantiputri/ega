@extends('layouts.master')
@section('isi')
<div class="row">
<center><h1>Data siswa</h1></center>
<div class="panel panel-primary">
<div class="panel-heading">Data siswa
<div class="panel-title-pull-right">
	<a href="{{ URL::previous()}}">kembali</a></div>
</div>

<div class="panel-body">
		<div class="form-group">
		<label class="control-lable">Nama</label>
		<input type="text" name="a" value="{{$$data->nama}}" class="form-control" readonly="">
		</div>
		<div class="form-group">
		<label class="control-lable">Nama orangtua</label>
		<input type="text" name="b" value="{{$$data->nama orangtua}}" class="form-control" readonly="">
		</div>
		<div class="form-group">
		<label class="control-lable">Umur</label>
		<input type="text" name="c" value="{{$$data->umur}}" class="form-control" readonly="">
		</div>
		<div class="form-group">
		<label class="control-lable">Alamat</label>
		<textarea class="form-control" rows="10" name="e" readonly="">{{$$data->alamat}}"</textarea>
		</div>
		</div>
		</form>
		</div>
		</div>
</div>
@endsection