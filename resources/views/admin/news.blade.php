@extends('layouts.admin')

@section('admincontent')

          <h1 class="h3 mb-2 text-gray-800">All News</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">News Tables</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Cover Image</th>
                      <th>Category</th>
                      <th>User</th>
                      <th>Date</th>
                      <th>View</th>
                      <th>edit </th>
                      <th>delete </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($news as $new)
                    <tr>
                      <td>{{ $new->title }}</td>
                      <td><img src="/uploads/{{ $new->cover }}" alt="Cover" height="40px" width="70px"></td>
                      <td>{{ $new->category->name }}</td>
                      <td>{{ $new->user->name }}</td>
                      <td>{{ $new->created_at }}</td>
                      <td>
                        <a href="/admin/news/{{$new->id}}"" class="btn btn-primary btn-circle"><i class="far fa-eye"></i></a> 
                      </td>
                      <td>
                        <a href="/admin/news/edit/{{$new->id}}" class="btn btn-warning btn-circle"><i class="fas fa-pen"></i></a> 
                      </td>
                      <td>
                        <a href="/admin/news/delete/{{$new->id}}" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a> 
                      </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
  

@endsection