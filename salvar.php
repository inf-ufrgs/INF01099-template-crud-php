<?php
chmod("dados.json", 0666);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $arquivo = 'dados.json';
    
    // Pegando os dados (mesmos nomes do SQL)
    $nova_ref = [
        "Ref_type"    => $_POST['Ref_type'],
        "Ref_authors" => $_POST['Ref_authors'],
        "Ref_title"   => $_POST['Ref_title'],
        "Ref_year"    => $_POST['Ref_year'],
        "Ref_URL"     => $_POST['Ref_url'] ?? ""
    ];

    // Persistência simples
    $lista = json_decode(file_get_contents($arquivo), true) ?? [];
    $lista[] = $nova_ref;
    file_put_contents($arquivo, json_encode($lista, JSON_PRETTY_PRINT));

    echo "<h1>Publicação Salva!</h1>";
    echo "<a href='index.html'>Voltar</a>";
}
?>
