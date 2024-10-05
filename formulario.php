<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1><?php echo "Mi primer formulario con PHP"; ?></h1>
    
    <form method="post" action="datos.php">
        Nombre: <input type="text" name="nombre"/>
        Apellido <input type="text" name="apellido"/> 
        Edad <input type="text" name="edad"/>
        <input type="submit"/>
    </form>
</body>
</html>


