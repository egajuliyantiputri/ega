@extends('layouts.master')
@section('isi')
<div class="row">
<center><h1>Data siswa</h1></center>
<div class="panel panel-primary">
<div class="panel-heading">Data siswa
<div class="panel-title pull-right"><a href="/siswa/create">Tambah Data</a></div>
</div>
<div class="panel-body">
<table class="table">
<thead>
<tr>
	<th>nama</th>
	<th>nama orangtua</th>
	<th>umur</th>
	<th>alamat</th>
	<th colspan="2">Action</th>
	</tr>
</thead>
<tbody>
@foreach($siswa as $data)
	<tr>
		<td>{{$data->nama}}</td>
		<td>{{$data->orangtua->nama_ayah}}
		    dengan {{$data->orangtua->nama_ibu}}
		</td>
			<td>{{$data->jenis_kelamin}}</td>
		<td>{{$data->Umur}}</td>
		<td>{{$data->Alamat}}</td>
		<td>
		</td>
		<td>
		<a class="btn btn-warning" href="/siswa/{{$data->id}}/
		edit">Edit</a><td>
		<a class="btn btn-primary" href="/siswa/{{$data->id}}/
		edit">Show</a></td></td>
		<td>
		<form action="{{route('siswa.destroy',$data->id)}}" method="post">
			<input name="_method" type="hidden" value="DELETE">
			<input name="_token" type="hidden">
			<input class="btn btn-danger" type="submit" value="
			DELETE">
			{{csrf_field()}}
		</form>
		</td>
	</tr>
	@endforeach
</tbody>
</table>
</div>
</div>
</div> 

@endsection