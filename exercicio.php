<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <title>Exercício PHP - COD3R</title>
</head>

<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP - COD3R</h1>
        <h2>Visualização dos Exercícios</h2>
    </header>
    <nav class="navegacao">
        <a href="<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?>" class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                // include($_GET['dir'] . "/" . $_GET['file'] . ".php");
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>

</html>