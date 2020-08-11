@extends('layouts.admin')

@section('admincontent')

  <h1 class="h3 mb-2 text-gray-800">All Categories</h1>

    <div class="row">
      
      <div class="col-md-6">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Categories Tables</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($cats as $cat)
                  <tr>
                    <td>{{$cat->name}}</td>
                    <td>{{$cat->slug}}</td>
                    <td><a href="/admin/category/delete/{{$cat->id}}" class="bnt btn-danger btn-circle"><i class="fas fa-trash"></i></a></td>
                  </tr>
                  @endforeach 
                  </tbody>
                </table>
              </div>
            </div>
          </div>

              
      </div>
      <div class="col-md-6">
        <h1 class="h3 mb-2 text-gray-800">Create Category</h1> 
        <form action="/admin/category/create" method="post">
        @csrf
          <div class="form-group">
            <label for="title">Name</label>
            <input type="text" name="title" id="title" class="form-control">
          </div>
          <input type="submit" value="Create" class="btn btn-info">
        </form>    
      </div>
    </div>
          
  

@endsection