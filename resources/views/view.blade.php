@extends('layouts.layout')

@section('content')

<section class="container category p-4">
    <h2>{{$news->title}}</h2><p><strong>By: {{$news->user->name}}</strong></p>
    <span class="badge badge-success">{{$news->category->name}}</span>
    <span class="badge badge-primary">{{$news->created_at}}</span>
    
      <div class="card">
        <img src="/uploads/{{$news->cover}}" class="card-img-top" height="500px">
        <div class="card-body">
          {{$news->body}}
        </div>
      </div>      
  </section>

@endsection