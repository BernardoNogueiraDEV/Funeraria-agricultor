<?php
session_start(); // Inicia a sessão

include './conexao.php';

// Validar entrada
if (empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha'])) {
    echo "Todos os campos são obrigatórios.";
    exit();
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$password = $_POST['senha'];

// Gerar um hash seguro para a senha
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (nome, email, senha) VALUES (?, ?, ?)");
if ($stmt === false) {
    die("Erro ao preparar a consulta: " . $conn->error);
}

$stmt->bind_param("sss", $nome, $email, $passwordHash);
if ($stmt->execute()) {
    // Armazenando o nome e o email na sessão após o cadastro
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;

    header("Location: ../index.php"); // Redireciona para a página inicial
    exit();
} else {
    // Verificar erros específicos, como duplicidade de email
    if ($conn->errno === 1062) { // Código de erro para duplicidade de chave única (UNIQUE constraint)
        echo "O email já está cadastrado.";
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }
    header("Location: ../login.html"); // Redireciona para a página de login
    exit();
}

$conn->close();
?>
