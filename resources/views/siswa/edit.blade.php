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
	<form action="{{route('siswa.update',$siswa->id)}}" method="post">
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{csrf_token()}}">

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
		<input type="text" name="i" value="{{$siswa->nama}}" class="form-control" readonly="">
		</div>
<div class="form-group">
		<label class="control-lable">nama orangtua</label>
		<input type="text" name="b" class="form-control" readonly="" value="{{$siswa->orangtua->nama_ayah}} dan {{$siswa->orangtua->nama_ayah}}">
		</div>
		</div>
		<div class="form-group">
		<label class="control-lable">umur</label>
		<input type="text" name="c" value="{{$siswa->umur}}" class="form-control" readonly="">
		</div>
		<div class="form-group">
		<label class="control-lable">Jenis Kelamin</label>
		<input type="radio" name="jk" class="form-control" value="laki laki">laki laki
		<input type="radio" name="jk" class="form-control" value="perempuan">perempuan
		</div>

		<div class="form-group">
		<label class="control-lable">alamat</label>
		<textarea class="form-control" rows="10" name="e" readonly="">{{$siswa->alamat}}"</textarea>		<button type="submit" class="btn btn-succes">Simpan
			</button>
			<button type="reset" class="btn btn-danger">Reset
			</button>
		</div>
		</div>
</div>
@endsection