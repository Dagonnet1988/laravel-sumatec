<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de Usuarios</h1>


    <ul>
        @foreach($users for $user)
        <li>{{user->client_code}} *** {{user->client_name}} *** {{user->destination_address}}</li>
        @endforeach
     </ul>

</body>
</html>


