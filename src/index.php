<html>
<head>
    <title>Exemplo PHP</title>
</head>
<body>
<?php
ini_set("display_errors", 0);
header('Content-Type: text/html; charset=iso-8859-1');

echo 'Versão Atual do PHP: ' . phpversion() . '<br>';

$servername = "db";
$username = "root";
$password = "dio1234";
$database = "diodb";

$link = new mysqli($servername, $username, $password, $database);

if ($link->connect_errno) {
    error_log("Conexão falhou: " . $link->connect_error); 
    exit('Falha na conexão com o banco de dados. Tente novamente mais tarde.');
}

$valor_rand1 = rand(1, 999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$host_name = gethostname();

$stmt = $link->prepare("INSERT INTO dados (AlunoID, Nome, Sobrenome, Endereco, Cidade, Host) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("isssss", $valor_rand1, $valor_rand2, $valor_rand2, $valor_rand2, $valor_rand2, $host_name);

if ($stmt->execute()) {
    echo "Novo registro criado com sucesso";
} else {
    echo "Erro: " . $stmt->error;
}
$stmt->close();
$link->close(); 
?>
</body>
</html>