@extends('layouts.layout')

@section('content')
<section class="category p-4">
    <h2>{{$cat->name}}</h2>
    <div class="row">
      @foreach($cat->posts as $post)
      <div class="col-md-3">
        <div class="card">
          <img src="/uploads/{{$post->cover}}" class="card-img-top" height="250px">
          <div class="card-body">
            <h5 class="card-text"><a href="/news/{{$post->slug}}">{{$post->title}}</a></h5>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>

  @endsection