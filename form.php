<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="est_form.css">
</head>
<body>
    <form method="post">
        <h2>SPA FB</h2><b>
        <p>Bienvenida, llena los campos para continuar con nosotras</p>
        <b>

    <div class="input-wrapper">
        <input type="text" name="dni" placeholder="    DNI">
        <img class="input-icon" src="imagenes/contra.png" alt="">
    </div><b>

    <div class="input-wrapper">
        <input type="text" name="nom" placeholder="    Nombre">
        <img class="input-icon" src="imagenes/usuario.png" alt="">
    </div>

    <div class="input-wrapper">
        <input type="text" name="direc" placeholder="    Dirección">
        <img class="input-icon" src="imagenes/direccion.png" alt="">
    </div>

    <div class="input-wrapper">
        <input type="text" name="edad" placeholder="    Edad">
        <img class="input-icon" src="imagenes/edad.png" alt="">
    </div>

    <div class="input-wrapper">
        <input type="text" name="correo" placeholder="    Correo">
        <img class="input-icon" src="imagenes/correo.png"alt="">
    </div>
    <div class="input-wrapper">
        <input type="text" name="cel" placeholder="    Celular">
        <img class="input-icon" src="imagenes/cel.png"alt="">
    </div>

    <input class="btn" type="submit" name="regis" value="Enviar">
    </form>

    <?php
    include("reg.php");
    ?>
</body >
</html>