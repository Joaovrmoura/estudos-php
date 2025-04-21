<?php
function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

$ip = getUserIP();


// IP do seu computador (troque abaixo pelo seu IP real se quiser)
$ipDoMeuPc = '192.168.0.100'; // ← Substitua por seu IP local real

// Só mostra o IP se for você acessando
if ($ip === $ipDoMeuPc || $ip === '::1' || $ip === '127.0.0.1') {
    echo "Seu IP é: " . $ip;
}else{
    $dataHora = date("Y-m-d H:i:s");
    $mensagem = "Acesso de IP: {$ip} em {$dataHora}\n";

    // Caminho do arquivo
    $arquivo = __DIR__ . "/acessos.txt";
    file_put_contents($arquivo, $mensagem, FILE_APPEND);
    }
?>
