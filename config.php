<?php
// Arquivo de configuração do projeto
// Copie este arquivo para config.local.php e ajuste as configurações

// Configurações do Banco de Dados
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'hcode_shop');
define('DB_CHARSET', 'utf8');

// Configurações do Servidor
define('SERVER_URL', 'http://localhost:8000');
define('DEBUG_MODE', true);

// Configurações de Sessão
define('SESSION_LIFETIME', 3600);

// Configurações de Frete
define('CEP_ORIGEM', '08717460');
define('PESO_PADRAO', 0.5);
define('COMPRIMENTO_PADRAO', 4);
define('ALTURA_PADRAO', 12);
define('LARGURA_PADRAO', 16);
define('VALOR_PADRAO', 1.00);

// Configurações de Upload
define('UPLOAD_PATH', 'img/produtos/');
define('MAX_FILE_SIZE', 5 * 1024 * 1024); // 5MB

// Configurações de Cache
define('CACHE_ENABLED', false);
define('CACHE_TIME', 3600);

?>
