<?php
// Parte 01: Identificar o arquivo aberto
$pagina = basename($_SERVER['PHP_SELF']); /* Essa função consegue extrair o nome do arquivo aberto - $_SERVER['PHP_SELF'] - é um array pré configurado, do PHP */


// Parte 02: Condicional para avaliar qual pág está aberta e definir qual título utilizar
switch($pagina){
    case 'index.php': $titulo = "Página Inicial"; break; /* break - se for verdadeiro pare por aqui - se não tivesse o break ia ficar carregando o pag infinitamemte ou poderia dar um resultsado inesperado */
    case 'noticias.php': $titulo = "Notícias e Apoio"; break;
     default: $titulo = "Contato e Inscrições"; break;
}

?>

<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titulo?></title>

        <!-- Atalho CTRL+clicar no link, cria pasta e arquivo automaticamente -->
        <link rel="stylesheet" href="css/estilos.css">

</head>
<body>

    <!-- Cabeçalho -->
    <header>
        <div class="limitador">
            <h1>

                <figure>   
                    <img src="imagens/logo-musical-talentos.jpg" alt="logo-projeto-musical-talentos"> <!-- colocar link para home -->
                </figure>

            </h1>
    
            <!-- Criar Menu usando código NAV -->
            <nav>
                
                <!-- Link será tratado no JavaScript -->
                <!-- Código &equiv; fará o desenho dos 3 traços ao lado da palavra menu -->
                <!-- Atalho h2>a - cria h2 com link-->
                <!-- <h2><a href="">Menu &equiv; </a></h2> -->
                <h2>
                
                    <!-- atalho li*3> - cria lista não ordenada com 4 links,  -->
                    <!-- <ul class="links-menu aberto"> -->
                    <ul class="links-menu">    
                        <li><a href="index.php">Página Inicial</a></li>
                        <li><a href="noticias.php">Noticias e Apoiadores</a></li>
                        <li><a href="contatoinscricoes.php">Contato e Inscrições</a></li>
                    </ul>
                </h2>
            </nav>
        </div>

    </header>
    <main>