<?php
// Configuração do banco de dados
$servername = "localhost"; // Servidor de banco de dados
$username = "root";        // Nome de usuário (padrão no XAMPP)
$password = "aluno";            // Senha (padrão no XAMPP é em branco)
$dbname = "exemplo_db";  // Nome do banco de dados
 

$conn = new mysqli($servername, $username,$password,$dbname);


if ($conn->connect_error){
    die("Conexão falhou: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario cadastrado com sucesso!";
} else {
    echo "Erro: " . $sql . '<br>' . $conn->error;
}

$conn->close();

header('Location: index.html')
?>
