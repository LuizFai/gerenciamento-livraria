<?php
$host = "localhost";
$usuario = "root"; 
$senha = "";       
$banco = "livraria";

try {
    $conexao = new PDO("mysql:host=$host;dbname=$banco;charset=utf8", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode(["erro" => "Falha na conexão: " . $e->getMessage()]);
    exit;
}
?>
