<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Backend</title>
</head>
<body>
<?php
include "modulos/cabezote.php";
include "modulos/menu.php";
include "modulos/footer.php";

if(isset($_GET["ruta"])){
    if ($_GET["ruta"] == "inicio" ||
            $_GET["ruta"] == "perfil" || $_GET["ruta"] == "productos"){
        include "modulos/".$_GET["ruta"]."php";
    }
}
?>

</body>
</html>