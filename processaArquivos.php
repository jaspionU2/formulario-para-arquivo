<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>

    <style>

        .container {
           display: flex;
           flex-direction: row;
           justify-content: center;
           align-items: center;
        } 

        .arquivo-sucesso, .arquivo-erro{
            margin-top: 20px;
            min-width: 500px;
        }

        
    </style>

</head>

<body>


<?php

$nomeArquivo = $_POST['nomeArquivo'];
$nome = false;


if (empty($nomeArquivo)) {
    echo  '<div class="container">';
    echo '<div class="arquivo-erro alert alert-warning" role="alert">';
    echo  '<p>Arquivo gravado com sucesso!</p> <a href="index.html" class="alert-link">Voltar para a tela principal</a>.';
    echo  '</div>';
    echo  '</div>';
    exit();
} else {
    $nome = true;
    $nomeArquivo .= '.txt';
}

$conteudoArquivo = $_POST['conteudoGravado'];
$conteudo = false;

if (empty($conteudoArquivo)) {
    echo  '<div class="container">';
      echo '<div class="arquivo-erro alert alert-warning" role="alert">';
      echo  '<p>Arquivo gravado com sucesso!</p> <a href="index.html" class="alert-link">Voltar para a tela principal</a>.';
      echo  '</div>';
      echo  '</div>';
    exit();
} else {
    $conteudo = true;
    $conteudoArquivo .= " ";
}

$caminhoArquivo = 'c:\xampp\htdocs\PHP aprendizado\formulario-request\bancoArquivos';

$caminhoCompleto = $caminhoArquivo . '/' . $nomeArquivo;

$checkMarca = false;


if (isset($_POST['checkbox'])) {
    $checkMarca = true;
}

if ($checkMarca) {
    if ($nome && $conteudo) {
        file_put_contents($caminhoCompleto, $conteudoArquivo);
        echo  '<div class="container">';
        echo '<div class="arquivo-sucesso alert alert-success" role="alert">';
        echo  '<p>Arquivo gravado com sucesso!</p> <a href="index.html" class="alert-link">Voltar para a tela principal</a>.';
        echo  '</div>';
        echo  '</div>';  
    }
}

if (!$checkMarca) {
    if ($nome && $conteudo) {
        file_put_contents($caminhoCompleto, $conteudoArquivo, FILE_APPEND);
        echo  '<div class="container">';
        echo '<div class="arquivo-sucesso alert alert-success" role="alert">';
        echo  '<p>Arquivo gravado com sucesso!</p> <a href="index.html" class="alert-link">Voltar para a tela principal</a>.';
        echo  '</div>';
        echo  '</div>';  
    }
}

?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
</body>

</html> 