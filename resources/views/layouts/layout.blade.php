<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titre')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- MDB eCommerce core CSS -->
    <link rel="stylesheet" href="css/mdb-ecommerce.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="./css/mdb-pro.min.css">
    <!-- Material Design Bootstrap Ecommerce -->
    <link rel="stylesheet" href="./css/mdb.ecommerce.min.css">
    <!-- Your custom styles (optional) -->
    
  

</head>


<body>
    <div class="container">

        {{-- Header --}}
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a href=" {{ route('cart.index') }} " type="button" class="btn btn-primary">
                        Panier <span class="badge badge-dark"> {{ Cart::count() }} </span>
                    </a>
                </div>
                <div class="col-4 text-center">
                    <a class="h1 text-dark text-decoration-none" href=" {{ route('products.index') }} ">🛍 E-Commerce</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="text-muted" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="mx-3">
                            <circle cx="10.5" cy="10.5" r="7.5"></circle>
                            <line x1="21" y1="21" x2="15.8" y2="15.8"></line>
                        </svg>
                    </a>
                    <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
                </div>
            </div>
        </header>


        {{-- Catégories --}}
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 text-muted" href="#">World</a>
                <a class="p-2 text-muted" href="#">U.S.</a>
                <a class="p-2 text-muted" href="#">Technology</a>
                <a class="p-2 text-muted" href="#">Design</a>
                <a class="p-2 text-muted" href="#">Culture</a>
                <a class="p-2 text-muted" href="#">Business</a>
                <a class="p-2 text-muted" href="#">Politics</a>
                <a class="p-2 text-muted" href="#">Opinion</a>
                <a class="p-2 text-muted" href="#">Science</a>
                <a class="p-2 text-muted" href="#">Health</a>
                <a class="p-2 text-muted" href="#">Style</a>
                <a class="p-2 text-muted" href="#">Travel</a>
            </nav>
        </div>

        {{-- Panel --}}
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark mb-5">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">E-Commerce</h1>
                <p class="lead my-3">Superbe E-Commerce développé sur Laravel</p>
                <p class="lead mb-0"><a href="http://github.com/Alexandre-Vernet/" target="_blank"
                        class="text-white font-weight-bold">Voir plus</a></p>
            </div>
        </div>

        {{-- Page content --}}
        @yield('content')

        {{-- Footer --}}
        <footer class=" text-center p-5 bg-light">
            <div class="container">
                <p><a href="http://github.com/Alexandre-Vernet" target="_blank">Alexandre Vernet</a> - 🛒 E-Commerce - Laravel 7.3</p>
            </div>
        </footer>
    </div>

</body>

</html>
