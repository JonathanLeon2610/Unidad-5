<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>
        @if (Auth::user())
        {{Auth::user()->name}}
        @endif
    </h1>
    <form action="{{url('login/')}}" method="post">
        @csrf
        <label for="">Email</label>
        <input type="text" name="email"  placeholder="Pedro@sdhfaisf.com" value="">
        <br>
        <br>
        <label for="">Passwod</label>
        <input type="password" name="password" placeholder="*****" value="">
        <br>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>