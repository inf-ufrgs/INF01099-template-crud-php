<?php
$dados = json_decode(file_get_contents('dados.json'), true) ?? [];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Referências</title>
    <style>table { width: 100%; border-collapse: collapse; } th, td { padding: 10px; border: 1px solid #ccc; }</style>
</head>
<body>
    <h2>Referências Cadastradas</h2>
    <table>
        <tr><th>Título</th><th>Autor</th><th>Ano</th><th>Ações</th></tr>
        <?php foreach ($dados as $id => $item): ?>
            <tr>
                <td><?php echo htmlspecialchars($item['Ref_title']); ?></td>
                <td><?php echo htmlspecialchars($item['Ref_authors']); ?></td>
                <td><?php echo htmlspecialchars($item['Ref_year']); ?></td>
                <td><a href="excluir.php?id=<?php echo $id; ?>" onclick="return confirm('Excluir?')">Remover</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="index.html">Cadastrar Nova</a>
</body>
</html>