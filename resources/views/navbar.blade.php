<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .h1 {
            font-size: 30px;
        }

        .h6 {
            font-size: 16px;
        }
    </style>
    @yield('css')

</head>

<body>
    <nav class="navbar bg-warning">
        <div class="container-fluid justify-content-center ">
          <span class="navbar-brand mb-0 h1">Giant Book Supplier</span>
        </div>
    </nav>

    <ul class="nav justify-content-center bg-secondary">
        <li class="nav-item">
            <a class="nav-link text-light " href="/">Home</a>
          </li>
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>

            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/category/manga">Manga</a></li>
              <li><a class="dropdown-item" href="/category/slice-of-life">Slice-of-Life</a></li>
              <li><a class="dropdown-item" href="/category/fantasy">Fantasy</a></li>
              <li><a class="dropdown-item" href="/category/sports">Sports</a></li>
            </ul>
        </div>
        <li class="nav-item">
          <a class="nav-link text-light" href="/publisher">Publisher</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="/contact">Contact</a>
        </li>
      </ul>

    @yield('content')


    <nav class="navbar bg-dark">
        <div class="container-fluid justify-content-center ">
        <span class="navbar-brand mb-0 h6 text-white">© Happy Books Store 2022</span>
        </div>
    </nav>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
