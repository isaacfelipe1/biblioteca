<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navegação e Modal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/nav.css">
</head>

<body>
    <nav class="navbar" id="navbar">
        <div class="container">
            <a href="#" class="logo">
                <img src="assets/logo.png" alt="Logo Biblioteca Maria Dolores" width="80">
            </a>
            <div class="menu">
                <a href="/" class="menu-item">INÍCIO</a>
                <a href="/nosso-time" class="menu-item">NOSSO TIME</a>
                <a href="/como-comecou" class="menu-item">COMO TUDO COMEÇOU</a>
                <a href="/contato" class="menu-item">CONTATO</a>
                <a href="/atividade" class="menu-item">ATIVIDADES</a>
            </div>
        </div>
        <div class="donate-button-container">
            <button onclick="toggleModal()" class="donate-button">Doe Agora</button>
        </div>
    </nav>

    <div id="donationModal" style="display: none;">
        <div class="modal-content">
            <h3>Faça uma Doação</h3>
            <p>Contribua com a Biblioteca Comunitária Maria Dolores.</p>
            <button onclick="toggleModal()" class="menu-item">Fechar</button>
        </div>
    </div>

    <script>
    function toggleModal() {
        const modal = document.getElementById("donationModal");
        modal.style.display = modal.style.display === "flex" ? "none" : "flex";
    }

    window.addEventListener("scroll", () => {
        const navbar = document.getElementById("navbar");
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });
    </script>
</body>

</html>