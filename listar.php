<?php
$dados = json_decode(file_get_contents('dados.json'), true);
?>
<!DOCTYPE html>
<html>
<head><title>Lista de Referências</title></head>
<body>
    <h2>Referências Cadastradas</h2>
    <table border="1">
        <tr><th>Título</th><th>Autor</th><th>Ano</th></tr>
        <?php foreach ($dados as $item): ?>
            <tr>
                <td><?php echo $item['titulo']; ?></td>
                <td><?php echo $item['autor']; ?></td>
                <td><?php echo $item['ano']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="index.html">Cadastrar Nova</a>
</body>
</html>