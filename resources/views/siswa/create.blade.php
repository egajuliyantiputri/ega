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
	<form action="{{route('siswa.store')}}" method="post">
		{{csrf_field()}}
	
<div class="panel-body">
		<div class="form-group">
		<label class="control-lable">Nama</label>
		<input type="text" name="nama" class="form-control">
		</div>

<div class="form-group">
		<label class="control-lable">nama orangtua</label>
		<select name="no" class="form-control">
			@foreach($ortu as $a)
			<option value="{{$a->id}}">{{$a->nama_ayah}} 
			dan {{$a->nama_ibu}}
			</option>
			@endforeach
		</select>
		</div>

		<div class="form-group">
		<label class="control-lable">umur</label>
		<input type="text" name="umur" class="form-control">
		</div>

		<div class="form-group">
		<label class="control-lable">Jenis Kelamin</label>
		<input type="radio" name="jk" class="form-control" value="laki laki">laki laki
		<input type="radio" name="jk" class="form-control" value="perempuan">perempuan
		</div>

		<div class="form-group">
		<label class="control-lable">alamat</label>
		<textarea class="form-control" rows="10" name="alamat"></textarea>
			<button type="submit" class="btn btn-succes">Simpan
			</button>
			<button type="reset" class="btn btn-danger">Reset
			</button>
		</div>
		</div>
</div>
@endsection