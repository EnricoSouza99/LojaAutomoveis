<?php
// Habilitar erros para depuração
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projeto_automoveis";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Receber e sanitizar os dados do formulário
$nome = $conn->real_escape_string($_POST['nome']);
$email = $conn->real_escape_string($_POST['email']);
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografa a senha
$numero = $conn->real_escape_string($_POST['numero']);
$endereco = $conn->real_escape_string($_POST['endereco']);
$cpf = $conn->real_escape_string($_POST['cpf']);

// Validar os dados
if (empty($nome) || empty($email) || empty($senha) || empty($cpf)) {
    echo "Preencha todos os campos obrigatórios.";
    exit;
}

// Comando SQL para inserir os dados no banco
$sql = "INSERT INTO usuarios (nome, email, senha, numero, endereco, cpf)
        VALUES ('$nome', '$email', '$senha', '$numero', '$endereco', '$cpf')";

// Executa o comando SQL e verifica se foi bem-sucedido
if ($conn->query($sql) === TRUE) {
    header("Location: ../html/login.html"); // Redireciona para a página de login
    exit;
} else {
    echo "Erro ao cadastrar o usuário: " . $conn->error; // Exibe mensagem de erro
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
