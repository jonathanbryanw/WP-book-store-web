<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

  <div class="container-fluid p-4 bg-primary text-white text-center">
    <p class="fs-1 fw-light">HAPPY BOOK STORE</p>
  </div>
  <div class="container">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/home') }}">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link  dropdown-toggle" data-bs-toggle="dropdown" href="#">Category</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ url('/category/fiction') }}">Fiction</a></li>
          <li><a class="dropdown-item" href="{{ url('/category/science') }}">Science</a></li>
          <li><a class="dropdown-item" href="{{ url('/category/computer') }}">Computer</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
      </li>
    </ul>
  </div>
  <div class="container mt-5">
    <div class="row ms-5">
      <div class="col-md-10">
        @yield('content')
      </div>
      <div class="col-md-2">
        <p class="fs-4 bg-warning">Category</p>
        <p><a href="{{ url('/category/fiction') }}">Fiction</a></p>
        <p><a href="{{ url('/category/science') }}">Science</a></p>
        <p><a href="{{ url('/category/computer') }}">Computer</a></p>
      </div>
    </div>
  </div>
  <div class="container-fluid p-1 mt-5 bg-primary text-white text-center">
    <small>&copy Happy Book Store {{ date("Y") }}</small>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
