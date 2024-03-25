<?php
// Verifica se os dados foram enviados por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    // Aqui você pode processar os dados conforme necessário, como salvar em um banco de dados, enviar por e-mail, etc.

    // Por exemplo, vamos apenas retornar os dados recebidos como uma resposta simples
    echo "Nome: " . $nome . "<br>";
    echo "Email: " . $email;
} else {
    // Se os dados não foram enviados por POST, retorna um erro
    http_response_code(400); // Bad Request
    echo "Erro: Método de requisição inválido.";
}
?>
