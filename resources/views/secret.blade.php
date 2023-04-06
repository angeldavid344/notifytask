<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
    crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between
        py-3 mb-4 border-bottom">
        <a class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            bienvenido @auth {{Auth::user()->name}} @endauth
        </a>
        <div class="col-md-3 text-end">
            <a href="{{route('logout')}}"><button type="button" class="btn btn-outline-primary me-2">Cerrar sesion</button></a>
        </div>
        </header>
    </div>
    <article class="container">
        <h2>Dasboard</h2>
    </article>
</body>
</html>