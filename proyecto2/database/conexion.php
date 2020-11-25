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
} catch (Exception $e) {
    die("¡Error de conexión!: " . $e->getMessage());
}
/*catch (Exception $e) {
  die("No se pudo conectar: " . $e->getMessage());
}*/
  


