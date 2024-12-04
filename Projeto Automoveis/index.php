<?php
session_start(); // Inicia a sessão para acessar os dados armazenados

// Verifica se o usuário já está logado
if (isset($_SESSION['usuario'])) {
    header("Location: php/home.php"); // Redireciona para a página home.php se o usuário estiver logado
    exit; // Interrompe a execução após o redirecionamento
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Automóveis - Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="index.php" class="active">Home</a> <!-- Página principal -->
            <a href="html/cadastro.html">Cadastro</a> <!-- Página de cadastro -->
            <a href="html/login.html">Login</a> <!-- Página de login -->
        </nav>
    </header>

    <main>
        <section class="hero-section">
            <h1>Bem-vindo à Loja de Automóveis</h1>
            <p class="slogan">"Seu sonho de dirigir começa aqui. Encontre o carro perfeito para você!"</p>
        </section>

        <section class="gallery-section">
            <h2>Nossos Veículos</h2>
            <div class="car-gallery">
                <div class="car">
                    <img src="img/img1.jpg" alt="Carro esportivo vermelho">
                    <p>Carro Esportivo Vermelho</p>
                    <button class="btn-buy">Comprar</button>
                </div>
                <div class="car">
                    <img src="img/img1.jpg" alt="SUV Preto">
                    <p>SUV Preto</p>
                    <button class="btn-buy">Comprar</button>
                </div>
                <div class="car">
                    <img src="img/img1.jpg" alt="Carro Sedan Prata">
                    <p>Carro Sedan Prata</p>
                    <button class="btn-buy">Comprar</button>
                </div>
                <div class="car">
                    <img src="img/img1.jpg" alt="Carro Hatch Azul">
                    <p>Carro Hatch Azul</p>
                    <button class="btn-buy">Comprar</button>
                </div>
                <div class="car">
                    <img src="img/img1.jpg" alt="SUV Branco">
                    <p>SUV Branco</p>
                    <button class="btn-buy">Comprar</button>
                </div>
                <div class="car">
                    <img src="img/img1.jpg" alt="Carro Conversível">
                    <p>Carro Conversível</p>
                    <button class="btn-buy">Comprar</button>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
