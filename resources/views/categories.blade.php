@extends('layouts.main')

@section('container')

<h1 class="mb-5">{{ $title }} </h1>
@foreach ($categories as $category)
<article class="mb-5 border-bottom">
    <ul>
        <li>
            <h2><a href="/categories/{{ $category->slug }} ">{{ $category->name }} </a></h2>
        </li>
    </ul>
</article>

@endforeach

@endsection