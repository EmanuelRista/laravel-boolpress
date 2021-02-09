@extends('layouts.blog')

@section('content')

<div class="row">

  @foreach($blogs as $blog)

  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <a href="{{ route('blog_path', $blog->id) }}">{{ $blog->title }}</a>
        
      </div>
      <div class="card-body">

        <a href="{{ route('blog_path', $blog->id) }}">
          <img src="{{ asset($blog->image) }}" alt="" class="card-img-top">
        </a>
        
          <br><br>
          <p class="lead">
            Posted
            {{ $blog->created_at->diffForHumans() }}
          </p>

          <a class="btn btn-outline-primary" href="{{ route('blog_path', $blog->id) }}">Leggi l'articolo</a>
      </div>

    </div>

  </div>


@endforeach
</div>

@endsection