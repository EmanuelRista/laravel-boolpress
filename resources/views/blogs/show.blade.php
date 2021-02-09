@extends('layouts.blog') @section('content')

<div class="row">
    <div class="col-md-12">
        <br>
        <img src="{{ asset($blog->image) }}" class="card-img-top">
        <br /><br />
        <h3>{{ $blog->title }}</h3>
        <hr>
        <p class="lead">
            {{ $blog->content }}
        </p>
        @if(Auth::check())
        <a href="{{ route('edit_blog_path', $blog->id) }}" class="btn btn-outline-info">Modifica</a>
        @endif
        <a href="{{ route('blogs_path') }}" class="btn btn-outline-secondary">Indietro</a>
        @if(Auth::check())
        <form action="{{ route('delete_blog_path', $blog->id) }}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-outline-danger">Elimina</button>
        </form>
        @endif
    </div>
    
   
</div>

@endsection
