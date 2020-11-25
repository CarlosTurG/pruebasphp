<?php
$server_and_bd = "mysql:host=localhost; dbname=bd_recetas";
$username = "root";
$password = "root";
try {
    // Crear conexión
    $conexion = new PDO($server_and_bd, $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET utf8");
    echo "Conectado con éxito";



        $tipoDieta = "vegetariana";
        $sql_select = "SELECT titulo FROM receta WHERE ? >= 1";
        $resultado = $conexion->prepare($sql_select);
        $resultado->execute(array($tipoDieta));

        while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)){
                echo "Título receta ".$registro['titulo'];
        }

        $resultado->closeCursor();
} catch (Exception $e) {
    die("¡Error de conexión!: " . $e->getMessage());
}