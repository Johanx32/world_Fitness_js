<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    
    <title>Login</title>
</head>
<body>
      <div class="login-container"> 
          <div class="login-info-container">
            <h1 class="title">Inicia sesion</h1>
            <form class="inputs-container" action="/login" method="POST">
            @csrf
                <input class="input" type="text" placeholder="Usuario" name="email">
                <input class="input" type="password" placeholder="Contraseña" name="password">
                <button class="btn">Iniciar sesion</button>

            @error('message')
                <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*{{ $message }}</p>
            @enderror
            </form>
          </div>
            <img class="image-container" src="{{ asset('img/pexels-leon-ardho-2468339.jpg') }}">
      </div>

</body>
</html>