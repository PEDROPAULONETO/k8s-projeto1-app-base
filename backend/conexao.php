<?php
$servername = "";
$username = "root";
$password = "Senha123";
$database = "meubanco";


$link = null;

try {
    // Criar conexão
    $link = new mysqli($servername, $username, $password, $database);

} catch (mysqli_sql_exception $e) {
    error_log("Erro de conexão com o banco de dados: " . $e->getMessage() . " no arquivo " . $e->getFile() . " na linha " . $e->getLine());

    die("Desculpe, não foi possível conectar ao banco de dados neste momento. Por favor, tente novamente mais tarde.");
}

// --- Fechar a Conexão (boa prática) ---

if ($link) {
     $link->close();
}

?>
