<?php
session_start();

if (isset($_POST['submit'])) {
    include './conexao.php';

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Prepare a SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? LIMIT 1");
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("s", $email);
    if ($stmt->execute() === false) {
        die("Execute failed: " . $stmt->error);
    }

    $result = $stmt->get_result();
    if ($result === false) {
        die("Get result failed: " . $stmt->error);
    }

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row['senha'])) {
            // Salva o nome e o email na sessão
            $_SESSION['email'] = $row['email'];
            $_SESSION['nome'] = $row['nome']; // Adiciona o nome à sessão
            header("Location: ../index.php");
            exit();
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Formulário não enviado corretamente.";
    exit();
}
?>
