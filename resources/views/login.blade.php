<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
    crossorigin="anonymous">
</head>
<body>
    <main class="container align-center p-5">
        <form method="POST" action="{{route('inicia-sesion')}}">
            @csrf
            <div class="mb-3">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" name="email" id="emailInput" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="passwordInput" class="form-label">password</label>
                <input type="password" name="password" id="passwordInput" class="form-control" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberInput" name="remember">
                <label class="form-check-label" for="rememberCheck">Mantener sesion iniciada</label>
            </div>
            <div>
                <p>¿No tienes cuenta? <a href="{{route('register')}}">Registrate</a></p>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar sesion</button>
        </form>
    </main>
</body>
</html>