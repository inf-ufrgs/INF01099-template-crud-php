<?php
$arquivo = 'dados.json';
// Garantir permissão de escrita no ambiente Linux/Codespaces
if(file_exists($arquivo)) chmod($arquivo, 0666);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mapeamento idêntico ao DBschema.sql
    $nova_ref = [
        "Ref_type"    => $_POST['Ref_type'],
        "Ref_authors" => $_POST['Ref_authors'],
        "Ref_title"   => $_POST['Ref_title'],
        "Ref_year"    => $_POST['Ref_year'],
        "Ref_URL"     => $_POST['Ref_url'] ?? "" 
    ];

    $lista = json_decode(file_get_contents($arquivo), true) ?? [];
    $lista[] = $nova_ref;
    file_put_contents($arquivo, json_encode($lista, JSON_PRETTY_PRINT));

    header("Location: listar.php"); // Redireciona direto para a lista
    exit;
}
?>