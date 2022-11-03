<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('clients/')}}" method="post">
        @method('PUT')
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="name" placeholder="Pedro" value="{{$client->name}}">
        <br>
        <br>
        <label for="">Email</label>
        <input type="text" name="email"  placeholder="Pedro@sdhfaisf.com" value="{{$client->email}}">
        <br>
        <br>
        <label for="">Phone Number</label>
        <input type="text" name="phone_number"  placeholder="612XXXXXXXX" value="{{$client->phone_number}}">
        <br>
        <br>

        <input type="hidden" name="id" value="{{$client->id}}">
        <button type="submit">Guardar</button>
    </form>
</body>
</html>