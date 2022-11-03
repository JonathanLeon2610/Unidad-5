<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://127.0.0.1:8000/clients" method="post">
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="name" placeholder="Pedro">
        <br>
        <br>
        <label for="">Email</label>
        <input type="text" name="email"  placeholder="Pedro@sdhfaisf.com">
        <br>
        <br>
        <label for="">Phone Number</label>
        <input type="text" name="phone_number"  placeholder="612XXXXXXXX">
        <br>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>