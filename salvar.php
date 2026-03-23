<?php
// Arquivo onde os dados serão salvos
$arquivo = 'dados.json';

// A linha seguinte garante permissão de escrita no ambiente Linux/Codespaces
if(file_exists($arquivo)) chmod($arquivo, 0666);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Atenção: garanta que esses dados cheguem preenchidos via JS!
    $nova_ref = [
        "Ref_type"    => $_POST['Ref_type'],
        "Ref_authors" => $_POST['Ref_authors'],
        "Ref_title"   => $_POST['Ref_title'],
        "Ref_year"    => $_POST['Ref_year'],
        "Ref_URL"     => $_POST['Ref_url'] ?? "" 
    ];
    
    // lógica de persistência
    $conteudo = file_get_contents($arquivo);
    $lista = json_decode($conteudo, true) ?? [];    
    
    $lista[] = $nova_ref;
    
    file_put_contents($arquivo, json_encode($lista, JSON_PRETTY_PRINT));

    // redireciona para a lista de referências cadastradas
    header("Location: listar.php"); 
    exit;
}
?>
