<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header class="ps-5 pe-5 blog-header bg-light py-3 mb-5">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="#">Subscribe</a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="{{route('welcome')}}">Large</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>

            <a class="btn btn-sm btn-outline-secondary me-1" href="{{route('login')}}">Login</a>
            <a class="btn btn-sm btn-outline-danger" href="{{route('register')}}">Register</a>
          </div>
        </div>
      </header>
    <div class="container">
     
  
  
        @yield('content')
    </div>
  
      <footer class="blog-footer bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">Blog template built with <a href="https://getbootstrap.com/" class="text-light">Bootstrap</a> by <a href="https://twitter.com/mdo" class="text-light">@mdo</a>.</p>
                </div>
                <div class="col-md-6 text-md-end mt-3 mt-md-0">
                    <p class="mb-0">
                        <a href="#" class="text-light">Privacy Policy</a>
                        <span class="mx-2 text-light">|</span>
                        <a href="#" class="text-light">Terms of Service</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>