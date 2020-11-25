<body>
<?php 
//include_once("funciones_comunes.php");
include_once("cabecera.php");
include_once("menu.php");
include_once("col_izq.php"); 
?>
<!-- PROBANDO COSILLAS -> UTILIZAR PDO  --> 
   <?php
   /**SELECT titulo FROM receta WHERE vegana >= 1 --> No hay recetas veganas
    SELECT titulo FROM receta WHERE celiacos >= 1  --> No hay recetas para celiacos
    SELECT titulo FROM receta WHERE light >= 1 */

    $tipoDieta = $_GET['tipo'];
   try {
        $sql_select = "SELECT titulo FROM receta WHERE ? >= 1";
        $resultado = $conexion->prepare($sql_select);
        $resultado->execute(array($tipoDieta));

        while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)){
                echo "<h1>".$registro['titulo']."</h1>";
        }

        $resultado->closeCursor();
        
   } catch (Exception $e) {
        die("¡Error!: " . $e->getMessage());
   }
       
    ?>
    <h1><?php $result ?></h1>



    <h3>Título de la receta</h3>

    <h4>Ingredientes principales</h4>
    <h4>Ingredientes opcionales</h4>

    <p>Imágenes receta</p>

    <h3>Tabla aporte nutricional</h3>

    <h3>Preparación</h3>
    <h4>Dificultad</h4>
    <h4>Duración</h4>
    <h4>Número de comensales</h4>
    <h4>Utensilios</h4>

<?php include_once("pie.php");?>
</body>
