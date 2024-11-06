<!DOCTYPE html>
<html lang="pt-br">

<?php include 'head.php'; ?>

<body>
    <?php include 'navbar.php'; ?>
    <?php include 'header.php'; ?>

    <?php
    $content = [
        'title' => 'Nosso Time',
        'description' => 'Conheça os membros da nossa equipe.',
    ];

    $teamDescription = [
        'heading' => 'Voluntários e bolsistas', 
        'subheading' => 'Biblioteca comunitária Maria Dolores Chico Xavier',
    ];
    $teamMembers = [
        [
            'name' => 'Eveli Rayane da Silva Ramos',
            'role' => 'Diretora',
            'imageUrl' => 'https://picsum.photos/400?random=1',
        ],
        [
            'name' => 'Kainny',
            'role' => 'Coordenadora',
            'imageUrl' => 'https://picsum.photos/400?random=2',
        ],
        [
            'name' => 'Dani',
            'role' => 'Educadora',
            'imageUrl' => 'https://picsum.photos/400?random=3',
        ],
        [
            'name' => 'Cícero',
            'role' => 'Monitor',
            'imageUrl' => 'https://picsum.photos/400?random=4',
        ],
        [
            'name' => 'Ana Clara',
            'role' => 'Secretária',
            'imageUrl' => 'https://picsum.photos/400?random=5',
        ],
        [
            'name' => 'Bruno Ferreira',
            'role' => 'Instrutor',
            'imageUrl' => 'https://picsum.photos/400?random=6',
        ],
        [
            'name' => 'Fernanda Souza',
            'role' => 'Gestora de Projetos',
            'imageUrl' => 'https://picsum.photos/400?random=7',
        ],
        [
            'name' => 'Lucas Oliveira',
            'role' => 'Desenvolvedor',
            'imageUrl' => 'https://picsum.photos/400?random=8',
        ],
    ];
    renderHeader(
        $content['title'], 
        $content['description'],
        "",
        "background-image: url('/assets/fundo.jpg');" 
    );
    ?>

    <main class="main-content">
        <section class="team-section">
            <div class="team-intro">
                <h2><?php echo $teamDescription['heading']; ?></h2>
                <p><?php echo $teamDescription['subheading']; ?></p>
            </div>

            <div class="team-container">
                <?php foreach ($teamMembers as $member): ?>
                <div class="team-member-card">
                    <div class="image-container">
                        <img src="<?php echo $member['imageUrl']; ?>" alt="<?php echo $member['name']; ?>">
                    </div>
                    <div class="text-container">
                        <h3><?php echo $member['name']; ?></h3>
                        <p class="role"><?php echo $member['role']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>

</html>