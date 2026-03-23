<?php
$arquivo = 'dados.json';
chmod($arquivo, 0666);

$id_para_remover = $_GET['id'] ?? null;

if ($id_para_remover !== null) {
    $lista = json_decode(file_get_contents($arquivo), true);
    if (isset($lista[$id_para_remover])) {
        unset($lista[$id_para_remover]);
        $lista = array_values($lista);
        file_put_contents($arquivo, json_encode($lista, JSON_PRETTY_PRINT));
    }
}
header("Location: listar.php");
exit;