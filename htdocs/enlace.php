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

        $query = "SELECT * FROM Publicaciones";
        $result = $mysqli->query($query);

        while($row = $result->fetch_assoc()) {
            echo '<br>
                    <div class="div-publicacion">
                        <div class="div-post">
                            <a href="organizacion.html"><h1>' . $row["titulo"] .'</h1></a>
                            <p>' . $row["descripcion"] . '</p>
                            <img src="data:image/jpeg;base64,'.base64_encode($row['imagen']).'" alt="imagen de la publicacion">
                        </div>
                        <div class="div-chat">
                            <h3>Discusión</h3>
                            <p>Persona1: Excelente!</p>
                            <p>Persona2: Espero poder formar parte.</p>
                            <p>Persona3: Mucho éxito.</p>
                            <form action="">
                                <input type="text">
                                <input type="submit" value="Enviar">
                            </form>
                        </div>
                    </div>';
        }
        $mysqli->close();
        ?>
        <form action="processPublicacion.php" method="post">
            <label for="titulo">Titulo</label>
            <input type="text" id="titulo" name="titulo">
            <br>
            <label for="descripcion">Descripcion</label>
            <input type="text" id="descripcion" name="descripcion">
            <br>
            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" name="imagen">
            <br>
            <input type="submit" value="Someter">
        </form>
        <br>
    </div>
</body>
</html>