<?php
// Redirigir a HTTPS si no estamos ya en HTTPS
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
    $https_url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $https_url);
    exit();
}

// Mostrar phpinfo() solo si es HTTPS
phpinfo();
?>