@extends('layouts.master')
@section('isi')

 @foreach ($ortu as $data ){
          nama ibu : {{$data->nama_ayah}}<br>
          nama ayah : {{$data->nama_ibu}}<br>
          umur ibu : {{$data->umur_ayah}}<br>
          umur ayah : {{$data->umur_ibu}}<br>
          nama anak :
            @foreach ($data->siswa as $key)
            <li>{{ $key->nama}}</li>
            @endforeach
            <hr>
            @endforeach

        @endsection