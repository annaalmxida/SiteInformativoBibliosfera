<?php
session_start();
include __DIR__ . "/database.php";

if (!isset($_POST['email'], $_POST['senha'])) {
    header('Location: login.php');
    exit;
}

$email = $_POST['email'];
$senha = $_POST['senha'];

// Buscar usuário pelo email
$stmt = $conn->prepare(
    "SELECT id_user, usuario, senha FROM login WHERE email = :email"
);
$stmt->bindParam(':email', $email);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Verificar se existe usuário e se a senha bate
if (!$user || $senha !== $user['senha']) {
    $_SESSION['erro_login'] = "E-mail ou senha inválidos";
    header('Location: login.php');
    exit;
}


$_SESSION['id_user'] = $user['id_user'];
$_SESSION['usuario'] = $user['usuario'];

header('Location: home.html');
exit;
?>