<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Enlace</title>
</head>
<body>
    <div class="div-logo">
        <a href="enlace.php"><img src="images/enlace.png" alt="Enlace"></a>
    </div>
    <div class="div-perfil">
        <a href="perfil.html">Perfil</a>
    </div>
    <nav>
        <div class="nav-element">
            <a href="eventos.html">Eventos</a>
        </div>
        <div class="nav-element">
            <a href="organizaciones.html">Organizaciones</a>
        </div>
        <div class="nav-element">
            <a href="mapa.html">Mapa</a>
        </div>
        <div class="nav-element">
            <a href="buscar.html" class="a-buscar"><img class="img-buscar" src="images/buscar.jpg" alt="Buscar"></a>
        </div>
    </nav>
    <div class="div-filtros">

    </div>
    <div class="div-content">
        <?php
        extract($_POST);

        $mysqli = new mysqli("127.0.0.1", "root", "", "enlace_db");

        $query = "INSERT INTO Publicaciones (id_pk, titulo, descripcion, imagen) VALUES (2, $titulo, $descripcion, $imagen)";

        if($mysqli->query($query)  === FALSE)
		{
			echo "Error - the query could not be executed: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
		else
			echo "El record fue registrado para " . $titulo;
        
        $mysqli->close();
        ?>
    </div>
</body>
</html>