@extends('layouts.admin')

@section('admincontent')

          <h1 class="h3 mb-2 text-gray-800">{{ $news->title }}</h1> <strong>
          <span class="text-mute">Time: {{ $news->created_at }}</span> | <span class="text-success">User: {{ $news->user->name }}</span> | <span class="text-primary">Category: {{ $news->category->name }}</span> | <span class="text-mute">Last Update: {{ $news->updated_at }}</span> </strong>
          <!-- DataTales Example -->
          <hr>
          <div class="card">
            {{ $news->body }}
          </div>
          
@endsection