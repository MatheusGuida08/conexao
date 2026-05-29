<?php
require'../conexao.php';
$sql = "SELECT * FROM livros";
$smtp = $pdo->query($sql);
$livros = $smtp->fetchAll(PDO::FETCH_ASSOC);
 
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Lista de Livros</title>
<link rel="stylesheet" href="../style.css">
 
 
</head>
<body>
 
<div class="lista-container">
    <h1>Lista de Livros</h1>
 
    <!-- BOTÃO VOLTAR -->
    <a class="btn-voltar" href="../painel.php">Voltar para o Painel</a>
 
    <table class="tabela-livros">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Disponível</th>
            </tr>
        </thead>
 
        <tbody>
            <?php foreach ($livros as $l): ?>
            <tr>
                <td><?= $l['id'] ?></td>
                <td><?= $l['titulo'] ?></td>
                <td><?= $l['autor'] ?></td>
                <td><?= $l['disponivel'] ? 'Sim' : 'Não' ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
 
</body>
</html>