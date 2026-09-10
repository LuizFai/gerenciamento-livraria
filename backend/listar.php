
<?php
header("Content-Type: application/json");
require_once "../database/conexao.php";


$stmt = $conexao->query("SELECT * FROM livros ORDER BY id DESC");
$livros = $stmt->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($livros);
?>
