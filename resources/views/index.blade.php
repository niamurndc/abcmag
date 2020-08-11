  @extends('layouts/layout')
  
  @section('content')

  <!-- breaking news section -->
  <div class="breaking-news p-2 bg-dark text-light">
    <div class="row">
      <div class="col-md-2 text-center"><p class="text-light bg-danger p-1 mb-0">BREAKING NEWS</p></div>
      <div class="col-md-10">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            @foreach($posts as $post)
              @if($loop->first)
                <div class="carousel-item active">
                  <span>{{$post->title}}</span>
                </div>
              @else
                <div class="carousel-item">
                  <span>{{$post->title}}</span>
                </div>
              @endif
            @endforeach
          </div>
        </div>
      </div>
    </div> 
  </div>
  <!-- breaking news end -->


  <!-- latest new section -->
  <section>
    <div class="row p-2 mx-4">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
              @foreach($posts as $post)
                @if($loop->first)
                  <div class="carousel-item active">
                    <img src="/uploads/{{$post->cover}}" class="d-block w-100" alt="coffee.jpg">
                    <div class="carousel-caption d-none d-md-block">
                      <h5><a href="/news/{{$post->slug}}">{{$post->title}}</a></h5>
                      <span class="badge badge-primary">{{$post->category->name}}</span>
                      <span><i class="far fa-eye"></i> {{$post->vcount}}</span><span><i class="fas fa-user"></i> {{$post->user->name}}</span>
                    </div>
                  </div>
                @else
                  <div class="carousel-item">
                    <img src="/uploads/{{$post->cover}}" class="d-block w-100" alt="coffee.jpg">
                    <div class="carousel-caption d-none d-md-block">
                      <h5><a href="/news/{{$post->slug}}">{{$post->title}}</a></h5>
                      <span class="badge badge-primary">{{$post->category->name}}</span>
                      <span><i class="far fa-eye"></i> {{$post->vcount}}</span><span><i class="fas fa-user"></i> {{$post->user->name}}</span>
                    </div>
                  </div>
                @endif
              @endforeach
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-6 px-2">
        <h2>Latest News</h2>
        <ul class="list-group list-group-flush">
            @foreach($posts as $post)
              <li class="list-group-item d-flex"> <img src="/uploads/{{$post->cover}}" height="80px" width="110px" class="mr-2"> <p><a href="/news/{{$post->slug}}">{{$post->title}}</a>
              <br>
              <span><i class="far fa-eye"></i> {{$post->vcount}}</span><span><i class="fas fa-user"></i> {{$post->user->name}}</span><span class="badge badge-success">{{$post->category->name}}</span>
              </p></li>
              
            @endforeach
        </ul>
      </div>
    </div>
  </section>
  <!-- latest seciton end -->

  <!-- category section start -->
  @foreach($cat3 as $cate)
  <section class="category p-4">
    <h2>{{$cate->name}}</h2>
    <div class="row">
      @foreach($cate->posts as $post)
      <div class="col-md-3">
        <div class="card">
          <img src="/uploads/{{$post->cover}}" class="card-img-top" height="250px">
          <div class="card-body">
            <h5 class="card-text"><a href="/news/{{$post->slug}}">{{$post->title}}</a></h5>
            <span><i class="far fa-eye"></i> {{$post->vcount}}</span><span><i class="fas fa-user"></i> {{$post->user->name}}</span><span class="badge badge-success">{{$post->category->name}}</span>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>
  @endforeach
<!-- section end -->


<!-- all section Start -->

<section class="category p-4">
    <div class="row">
      <div class="col-md-4">
        <h3>Latest News</h3>
        <ul class="list-group list-group-flush">
          @foreach($newslat as $lt)
          <li class="list-group-item d-flex"> <img src="/uploads/{{$lt->cover}}" height="80px" width="110px" class="mr-2"> <p><a href="/news/{{$lt->slug}}">{{$lt->title}}</a>
            <br>
            <span><i class="far fa-eye"></i> {{$lt->vcount}}</span><span><i class="fas fa-user"></i> {{$lt->user->name}}</span><span class="badge badge-success">{{$lt->category->name}}</span>
          </p></li>
          @endforeach
        </ul>
      </div>
      <!-- more read -->
      <div class="col-md-4">
        <h3>Most Popular</h3>
        <ul class="list-group list-group-flush">
          @foreach($popu as $post)
          <li class="list-group-item d-flex"> <img src="/uploads/{{$post->cover}}" height="80px" width="110px" class="mr-2"> <p><a href="/news/{{$post->slug}}">{{$post->title}}</a>
          <br>
            <span><i class="far fa-eye"></i> {{$post->vcount}}</span><span><i class="fas fa-user"></i> {{$post->user->name}}</span><span class="badge badge-success">{{$post->category->name}}</span>
          </p></li>
          @endforeach
        </ul>
      </div>
      <!-- Random -->
      <div class="col-md-4">
        <h3>Random News</h3>
        <ul class="list-group list-group-flush">
          @foreach($random as $post)
          <li class="list-group-item d-flex"> <img src="/uploads/{{$post->cover}}" height="80px" width="110px" class="mr-2"> <p><a href="/news/{{$post->slug}}">{{$post->title}}</a>
          <br>
            <span><i class="far fa-eye"></i> {{$post->vcount}}</span><span><i class="fas fa-user"></i> {{$post->user->name}}</span><span class="badge badge-success">{{$post->category->name}}</span>
          </p></li>
          @endforeach
        </ul>
      </div>
    </div>
  </section>
<!-- section end -->

@endsection