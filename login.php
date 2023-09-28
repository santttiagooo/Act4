<!DOCTYPE html>
<html>
<head>
    <title>Actividad 3</title>
    <link rel="stylesheet" type="text/css" href="formato.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap">
</head>
<body>
    <div class="container">
        <div class="logo">Arquitectura cliente servidor - Verificación de Identidad</div>
        <div class="subtitle">Daniel Santiago Lopez Giraldo - Arquitectura de Software - Ingenieria de Software 5to semestre</div>

        <!-- Formulario para ingresar número de documento a verificar en la BBDD -->
        <form method="post" action="procesar_login.php">
            <label for="id">Documento (ID):</label>
            <input type="text" name="id" required><br><br>
            <input type="submit" value="Verificar">
        </form>
    </div>
</body>
</html>