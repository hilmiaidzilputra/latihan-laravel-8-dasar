@extends('layouts.main')

@section('container')

<h1 class="mb-5">{{ $judul }} </h1>
@foreach ($post as $p)
<article class="mb-5 border-bottom pb-4">
    <h3>
        <a href="/post/{{ $p->slug }} " class="text-decoration-none">{{ $p->title }} </a>
    </h3>
    <p>By. <a href="/author/{{ $p->author->username }}" class="text-decoration-none">{{ $p->author->name  }} </a> in <a href="/categories/{{ $p->category->slug }} " class="text-decoration-none">{{ $p->category->name }} </a></p>

    <p>{{ $p->excerpt }} </p>
    <a href="/post/{{$p->slug}} " class="text-decoration-none">Read More....</a>
</article>

@endforeach

@endsection