<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ABC Magazine</title>

  <link rel="stylesheet" href="/css/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <!-- nav start -->
  <div class="d-flex flex-column navbar-fixed-top flex-md-row align-items-center p-3 px-md-4  bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">ABC Magazine</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="/">Home</a>
      @foreach($cats as $cat)
        <a class="p-2 text-dark" href="/category/{{$cat->slug}}">{{$cat->name}}</a>
      @endforeach
    </nav>
  </div>
  <!-- nav end -->

    @yield('content')

  <!-- section end -->

  <!-- footer -->
  <footer class="bg-dark text-light p-4">
    <div class="row">
      <div class="col-md-4">
        <h3>Categories</h3>
        <ul>
          <li>Politics</li>
          <li>Sports</li>
          <li>World</li>
          <li>Nation</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h3>Socials</h3>
        <ul>
          <li>Facebook</li>
          <li>Twitter</li>
          <li>instagram</li>
          <li>pinterest</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h3>Newslatter</h3>
        <form action="#">
          <form class="mr-auto">
            <input class="form-control mr-sm-2 mb-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </form>
      </div>
    </div>
    <p>ABC Magazine &copy; all right reserved 2020</p>
  </footer>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>