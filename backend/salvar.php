<?php
header("Content-Type: application/json");
require_once "../database/conexao.php";

$dados = json_decode(file_get_contents("php://input"), true);

if (!empty($dados['titulo']) && !empty($dados['autor']) && !empty($dados['preco'])) {
    $stmt = $conexao->prepare("INSERT INTO livros (titulo, autor, preco) VALUES (:t, :a, :p)");
    $stmt->bindParam(':t', $dados['titulo']);
    $stmt->bindParam(':a', $dados['autor']);
    $stmt->bindParam(':p', $dados['preco']);
    
    if ($stmt->execute()) {
        echo json_encode(["mensagem" => "Livro cadastrado com sucesso!"]);
    } else {
        echo json_encode(["mensagem" => "Erro ao salvar livro."]);
    }
} else {
    echo json_encode(["mensagem" => "Dados incompletos."]);
}
?>
