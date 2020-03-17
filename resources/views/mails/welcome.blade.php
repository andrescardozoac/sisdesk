<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Informacion de Registro SISDESK</title>
</head>
<body>
    <p>Hola! {{ $user->name }} SISDESK le da la bienvenida</p>
    <p>Gracias por registrarse con nosotros!</p>
    <p>Estos son sus datos de ingreso:</p>
    <ul>
        <li>Inicio de Sesion: {{ $user->email }}</li>
        <li>Contraseña: {{ $pass }} </li>
    </ul>
    <p>Para consulta o ayuda escribirnos a:</p>
    <ul>
        <li>info.sisdesk@gmail.com</li>
    </ul>
</body>
</html>