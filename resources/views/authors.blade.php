@extends('layouts.main')

@section('container')

<h1 class="mb-5">{{ $title }} </h1>
@foreach ($authors as $author)
<article class="mb-5 border-bottom">
    <ul>
        <li>
            <h2><a href="/author/{{ $author->username }} ">{{ $author->name }} </a></h2>
        </li>
    </ul>
</article>

@endforeach

@endsection