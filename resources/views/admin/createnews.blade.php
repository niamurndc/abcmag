@extends('layouts.admin')

@section('admincontent')

  <h1 class="h3 mb-2 text-gray-800">Create News</h1>

  <!-- form Example -->

  <form action="/admin/news/create" method="post" class="col-md-6" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control">
    </div>
    <div class="form-group">
      <label for="category">Category</label>
      <select name="category" id="category" class="form-control">
        @foreach($cats as $cat)
          <option value="{{$cat->id}}">{{$cat->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="cover">Image</label>
      <input type="file" name="cover" id="cover" class="form-control">
    </div>
    <div class="form-group">
      <label for='body'>Body</label>
      <textarea name="body" id="body" rows="10" class="form-control"></textarea>
    </div>
    <input type="submit" value="Publish" class="btn btn-info">
  </form>
          
@endsection