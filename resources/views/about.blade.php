@extends('layouts.main')

@section('container')
<h1>Ini Halaman About</h1>
<h3>{{ $name }} </h3>
<p>{{ $email }}</p>
<img src="img/{{$gambar}} " alt="{{ $name }}" width="300" height="300" class="img-thumbnail rounded-circle">
@endsection