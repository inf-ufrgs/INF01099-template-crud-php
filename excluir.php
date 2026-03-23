<?php
// 1. Pegar o ID enviado via URL (?id=X)
$id_para_remover = $_GET['id'];

// 2. Ler o arquivo atual
$arquivo = 'dados.json';
$lista = json_decode(file_get_contents($arquivo), true);

// 3. Verificar se o ID existe e remover do array
if (isset($lista[$id_para_remover])) {
    // Remove o item do array
    unset($lista[$id_para_remover]);
    
    // Reindexar o array para não deixar "buracos" no JSON
    $lista = array_values($lista);

    // 4. Salvar o arquivo atualizado
    file_put_contents($arquivo, json_encode($lista, JSON_PRETTY_PRINT));
}

// 5. Redirecionar de volta para a lista (Mágica do Header)
header("Location: listar.php");
exit;
?>