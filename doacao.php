<!DOCTYPE html>
<html lang="pt-br">

<?php include 'head.php'; ?>

<body>
    <?php include 'navbar.php'; ?>
    <?php include 'header.php'; ?>

    <?php
    $content = [
        'title' => 'Doe Agora',
        'description' => 'Veja como sua contribuição pode fazer a diferença na Biblioteca Comunitária Maria Dolores.',
    ];

    renderHeader(
        $content['title'], 
        $content['description'],
        "",
        "background-image: url('/assets/donation_background.jpg');" 
    );
    ?>

    <main class="main-content">
        <section class="donation-info">
            <h2>Como Ajudar</h2>
            <div class="donation-methods-container">
                <div class="donation-method">
                    <i class="fas fa-wallet donation-icon"></i>
                    <h3>Lorem ipsum dolor sit</h3>
                    <p>Toda contribuição, independentemente do valor, ajuda a manter nossas atividades e serviços.</p>
                </div>
                <div class="donation-method">
                    <i class="fas fa-box-open donation-icon"></i>
                    <h3>Doação de Materiais</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum placeat sapiente doloremque ab
                        iusto possimus quis eveniet molestiae ut reiciendis dolor, quae inventore delectus porro magnam
                        nostrum dolorem laboriosam animi.</p>
                </div>
                <div class="donation-method">
                    <i class="fas fa-calendar-alt donation-icon"></i>
                    <h3>Lorem ipsum dolor sit</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem et nobis, hic a iure aliquam alias
                        cupiditate, corrupti unde odio ut? Deserunt qui iure ratione veniam incidunt necessitatibus
                        aperiam! Pariatur..
                    </p>
                </div>
                <div class="donation-method">
                    <i class="fas fa-piggy-bank donation-icon"></i>
                    <h3>Depósito Identificado</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque magnam consequatur debitis
                        accusamus nesciunt beatae ad suscipit, explicabo repudiandae exercitationem, sit eius temporibus
                        eaque maxime! Perferendis illo et in quisquam!.</p>
                </div>
            </div>
        </section>

        <section class="details">
            <h2>Dados para Doação</h2>
            <p>Se você deseja contribuir com as despesas mensais e atividades da Biblioteca Comunitária Maria Dolores,
                segue abaixo os dados bancários para transferência:</p>
            <div class="bank-details">
                <p><strong>CHAVE PIX CNPJ:</strong> 63.659.213/0001-40</p>
                <p><strong>Centro Espírita Maria Dolores</strong></p>
                <p><strong>Banco:</strong> BASA</p>
            </div>
            <p class="important-note">Sua contribuição é muito importante!</p>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>

</html>