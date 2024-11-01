<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/destaque.css">
    <link rel="stylesheet" href="css/sobre.css">
    <link rel="stylesheet" href="css/partners.css">
    <link rel="stylesheet" href="css/localizacao.css">

</head>

<body>

    <?php include 'navbar.php'; ?>
    <?php include 'header.php'; ?>

    <?php
    renderHeader(
        "Biblioteca Comunitária Maria Dolores",
        "Promover um ponto de cultura.",
        "", 
        "background-image: url('assets/paginaInicial.jpg');" 
    );
    ?>

    <main>
        <?php include 'sobre.php'; ?>
        <?php include 'partners.php'; ?>
        <?php include 'localizacao.php'; ?>

    </main>

    <?php include 'footer.php'; ?>

</body>

</html>