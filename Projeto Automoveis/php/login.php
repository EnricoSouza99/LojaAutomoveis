<?php
session_start();

// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projeto_automoveis";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar se houve erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $senha = $_POST['senha'];

    // Consultar o banco de dados
    $sql = "SELECT * FROM usuarios WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        // Verificar se a senha é válida
        if (password_verify($senha, $user['senha'])) {
            $_SESSION['usuario'] = $user['nome']; // Salva o nome do usuário na sessão
            header("Location: home.php");  // Redireciona para a página inicial
            exit();
        } else {
            echo "Email ou senha inválidos.";  // Mensagem de erro se a senha não bater
        }
    } else {
        echo "Email ou senha inválidos.";  // Mensagem de erro se o e-mail não existir
    }
}

$conn->close();
?>
