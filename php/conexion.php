<!-- Conexión a travéz de PDO -->
<?php
$host = 'localhost';
$db   = 'bd_sistemaexcusas';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    echo "Conexión exitosa con PDO";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
