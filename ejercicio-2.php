<!DOCTYPE html>
<html lang="es">
<head>
  <title>Php condicionales</title>

  <style>
        body {
            background-color: #F4E1E1;
            color: #444444;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        header {
            background-color: #FFD1D1;
            padding: 10px;
        }
        nav {
            background-color: #FFA5A5; 
            padding: 20px;
        }
        a {
          color: black;
        }
        h2 {
          color: #c37f7f;
        }
        section {
            padding: 20px;
        }
        footer {
            background-color: #FFD1D1; 
            width: 100%;
            text-align: center;
            padding: 20px 0;
        }

    </style>
</head>
<body>
<header>
        <h1>Condicionales en PHP</h1>
    </header>
    <nav>
        <a href="#if">if</a> |
        <a href="#if-else">if...else</a> |
        <a href="#if-elseif-else">If...elseif...else</a> |
        <a href="#switch">switch</a>
    </nav>
    <section>
      
        <h2>Ejercicios if</h2>

        <!-- Ejercicio con if -->
        <h3 id="if">Primer ejemplo de uso de "if"</h3>
        <?php
        // Ejemplo con "if"
        $edad = 20;
        if ($edad >= 18) {
            echo "Eres mayor de edad.";
        }
        ?>
        <h3 id="if">Segundo ejemplo de uso de "if"</h3>
        <?php
             $numero = 10;
           if ($numero > 0) {
               echo "El número es positivo.";
            } elseif ($numero < 0) {
                  echo "El número es negativo.";
            } else {
                    echo "El número es cero.";
            }
        ?>
        <hr>
        <h2>Ejercicios if...else</h2>
        <!-- Ejercicio con if...else -->
        <h3 id="if-else">Primer ejemplo de uso de "if...else"</h3>
        <?php
        // Ejemplo con "if...else"
        $calificacion = 75;
        if ($calificacion >= 60) {
            echo "Aprobado";
        } else {
            echo "Reprobado";
        }
        ?>

        <h3 id="if">Segundo ejemplo de uso de "if...else"</h3>
        <?php
        // Ejemplo con "if...else"
        $lamparaEncendida = false;
        if ($lamparaEncendida) {
           echo "La lámpara está encendida.";
        } else {
           echo "La lámpara está apagada.";
        }
        ?>
        <hr>
        <h2>Ejercicios if...elseif...else</h2>
        <!-- Ejercicio con If...elseif...else -->
        <h3 id="if-elseif-else">Primer ejemplo de uso de "if...elseif...else"</h3>
        <?php
        // Ejemplo con "if...elseif...else"
        $diaSemana = "lunes";
        if ($diaSemana == "lunes") {
            echo "Hoy es lunes.";
        } elseif ($diaSemana == "martes") {
            echo "Hoy es martes.";
        } else {
            echo "Hoy es otro día de la semana.";
        }
        ?>
        <h3 id="if-elseif-else">Segundo ejemplo de uso de "if...elseif...else"</h3>

        <?php
        // Ejemplo con "if...elseif...else"
        $nota1 = 80;
        $nota2 = 90;
        $nota3 = 85;
        $promedio = ($nota1 + $nota2 + $nota3) / 3;
       
        if ($promedio >= 90) {
            echo "Excelente rendimiento académico.";
        } elseif ($promedio >= 80) {
            echo "Buen rendimiento académico.";
        } elseif ($promedio >= 70) {
            echo "Rendimiento académico satisfactorio.";
        } else {
            echo "Necesita mejorar su rendimiento académico.";
        }
        ?>
        <hr>
        <h2>Ejercicios switch</h2>
        <!-- Ejercicio con switch -->
        <h3 id="switch">Primer ejemplo de uso de "switch"</h3>
        <?php
        // Ejemplo con "switch"
        $opcion = 2;
        switch ($opcion) {
            case 1:
                echo "Seleccionaste la opción 1.";
                break;
            case 2:
                echo "Seleccionaste la opción 2.";
                break;
            default:
                echo "Opción no válida.";
        }
        ?>
        <h3 id="switch">Segundo ejemplo de uso de "switch"</h3>
        <?php
        $numeroDia = 4;
        // Ejemplo con "switch"
        switch ($numeroDia) {
            case 1:
                echo "Lunes";
                break;
            case 2:
                echo "Martes";
                break;
            case 3:
                echo "Miércoles";
                break;
            case 4:
                echo "Jueves";
                break;
            case 5:
                echo "Viernes";
                break;
            case 6:
                echo "Sábado";
                break;
            case 7:
                echo "Domingo";
                break;
            default:
                echo "Número de día inválido.";
        }
        ?>

    </section>
    <footer>
        <p>Desarrollado por Ginna Mora</p>
    </footer>
  
  
  
</body>
</html>