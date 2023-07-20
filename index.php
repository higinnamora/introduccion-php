<!DOCTYPE html>
<html>
<head>
    <title>Validación Servicio Militar</title>
</head>
<body>
    <h1>Validación Servicio Militar</h1>
    <form method="post" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" required><br>

        <label for="genero">Género:</label>
        <select name="genero" required>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
        </select><br>

        <label for="nacionalidad">Nacionalidad:</label>
        <input type="text" name="nacionalidad" required><br>

        <label for="rh">Tipo de RH:</label>
        <input type="text" name="rh" required><br>

        <input type="submit" value="Validar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener datos ingresados por el usuario
        $nombre = $_POST["nombre"];
        $edad = intval($_POST["edad"]);
        $genero = $_POST["genero"];
        $nacionalidad = $_POST["nacionalidad"];
        $rh = $_POST["rh"];

        // Obtener el año actual
        $anio_actual = date("Y");

        // Calcular el año de nacimiento
        $anio_nacimiento = $anio_actual - $edad;

        // Realizar las validaciones
        $admitido = true;

        if ($edad < 18 || $edad > 26) {
            $admitido = false;
        }

        if ($genero !== "masculino") {
            $admitido = false;
        }

        if (strtolower($nacionalidad) !== "colombiano") {
            $admitido = false;
        }

        // Mostrar los resultados
        echo "<h2>Resultados:</h2>";
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Edad: $edad años</p>";
        echo "<p>Género: $genero</p>";
        echo "<p>Año de nacimiento: $anio_nacimiento</p>";
        echo "<p>Nacionalidad: $nacionalidad</p>";
        echo "<p>Tipo de RH: $rh</p>";

        if ($admitido) {
            echo "<p>¡Felicidades! Eres apto para prestar servicio militar.</p>";
        } else {
            echo "<p>Lo sentimos, no cumples con los requisitos para prestar servicio militar.</p>";
        }
    }
    ?>
</body>
</html>

