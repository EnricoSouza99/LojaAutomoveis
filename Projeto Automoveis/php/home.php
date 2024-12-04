<?php
session_start(); // Inicia a sessão para verificar dados do usuário

// Verifica se o usuário está logado, redirecionando caso não esteja
if (!isset($_SESSION['usuario'])) {
    header("Location: ../html/login.html"); // Redireciona para a página de login
    exit; // Interrompe o script após o redirecionamento
}

$usuario = $_SESSION['usuario']; // Armazena o nome do usuário na variável
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Automóveis - Home</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="home.php" class="active">Home</a></li> <!-- Link para a página inicial -->
                <li><a href="logout.php">Logout</a></li> <!-- Link para logout -->
            </ul>
        </nav>
    </header>
    
    <main>
        <!-- Seção de boas-vindas ao usuário -->
        <section class="welcome-section">
            <h1>Bem-vindo, <?php echo htmlspecialchars($usuario); ?>!</h1> <!-- Exibe o nome do usuário na tela -->
            <p>Estamos felizes em tê-lo aqui. Explore as funcionalidades disponíveis.</p>
        </section>

        <section class="hero-section">
            <h1>Bem-vindo à Loja de Automóveis</h1>
            <p class="slogan">"Seu sonho de dirigir começa aqui. Encontre o carro perfeito para você!"</p>
        </section>

        <section class="gallery-section">
            <h2>Nossos Veículos</h2>
            <div class="car-gallery">
                <div class="car">
                    <img src="../img/img1.jpg" alt="Carro esportivo vermelho">
                    <p>Carro Esportivo Vermelho</p>
                    <button class="btn-buy">Comprar</button>
                </div>
                <div class="car">
                    <img src="../img/img1.jpg" alt="SUV Preto">
                    <p>SUV Preto</p>
                    <button class="btn-buy">Comprar</button>
                </div>
                <div class="car">
                    <img src="../img/img1.jpg" alt="Carro Sedan Prata">
                    <p>Carro Sedan Prata</p>
                    <button class="btn-buy">Comprar</button>
                </div>
                <div class="car">
                    <img src="../img/img1.jpg" alt="Carro Hatch Azul">
                    <p>Carro Hatch Azul</p>
                    <button class="btn-buy">Comprar</button>
                </div>
                <div class="car">
                    <img src="../img/img1.jpg" alt="SUV Branco">
                    <p>SUV Branco</p>
                    <button class="btn-buy">Comprar</button>
                </div>
                <div class="car">
                    <img src="../img/img1.jpg" alt="Carro Conversível">
                    <p>Carro Conversível</p>
                    <button class="btn-buy">Comprar</button>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
