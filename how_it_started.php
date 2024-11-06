<!DOCTYPE html>
<html lang="pt-br">

<?php include 'head.php'; ?>

<body>
    <?php include 'navbar.php'; ?>
    <?php include 'header.php'; ?>

    <?php
    $content = [
        'title' => 'Como Tudo Começou',
        'description' => 'Descubra a história e os serviços da Biblioteca Comunitária Maria Dolores.',
    ];
    renderHeader(
        $content['title'], 
        $content['description'],
        "", 
        "background-image: url('/assets/how_it_started_background.jpg');" 
    );
    ?>

    <main class="main-content">
        <section class="about-maria-dolores">
            <div class="about-content">
                <img src="assets/maria_dolores.jpg" alt="Maria Dolores" class="about-image">
                <div class="text-content">
                    <h2>Quem foi Maria Dolores?</h2>
                    <p>Mentora espiritual do Centro Espírita Maria Dolores, escritora e poetisa que lutou pela causa das
                        mulheres e meninas órfãs.</p>
                    <p>Saiba mais, acesse o link abaixo:</p>
                    <a href="https://feamazonas.org.br/noticias-das-casas/conheca-historia-do-centro-espirita-maria-dolores/"
                        class="learn-more-link" target="_blank">Conheça a história do Centro Espírita Maria Dolores</a>
                </div>
            </div>
        </section>
        <section class="logo-meaning">
            <h2>Conheça o significado dos elementos da logomarca da biblioteca.</h2>
            <div class="logo-image-container">
                <img src="assets/logo01.jpg" alt="Significado da Logomarca da Biblioteca">
            </div>
        </section>
        <section class="book-loan">
            <h2>Serviço de Empréstimo de Livros Disponível</h2>
            <p>Venha nos visitar e aproveite para conhecer nosso acervo literário.</p>
            <p>Empréstimo de livros – segunda à sábado.<br>Horário: 08h às 12h | 14h às 17h</p>
            <div class="book-images-container">
                <img src="assets/livros01.jpg" alt="Acervo de livros 1">
                <img src="assets/livros02.jpg" alt="Acervo de livros 2">

            </div>
            <div class="loan-banner">
                <h3>Empréstimo de livro?</h3>
                <p>Sim, é possível!</p>
                <p><em>Literatura infantil, juvenil e adulto</em></p>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>

</html>