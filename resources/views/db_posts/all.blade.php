@extends('layouts.app')

@section('content')

<form action="/article" method="POST">
    @csrf
    <label for="title">Title</label><br/>
    <input type="text" name="title" id="title" autocomplete="off" value="{{ old('title') }}"/><br/>
    <label for="content">Content</label><br/>
    <textarea name="content" id="content" cols="30" rows="10">{{ old('content') }}</textarea><br/>

    <button>Submit</button>

</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@forelse ($articles as $article)

<article>
    <h1><a href="{{ $article->id }}">{{ $article->title }}</a></h1>
    {!! $article->content !!}
</article>

@empty
No articles found.
@endforelse



@endsection