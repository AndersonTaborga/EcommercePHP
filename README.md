# Loja Virtual com Angular.Js - PHP, MySQL e Slim Framework 2

## Como Rodar o Projeto

### Pré-requisitos
- XAMPP instalado (PHP 8.2+ e MySQL/MariaDB)
- Git

### Comandos para Rodar

#### 1. Abrir Terminal 1 - Iniciar MySQL
```bash
"C:\xampp\mysql\bin\mysqld.exe" --console
```

#### 2. Abrir Terminal 2 - Iniciar PHP Server
```bash
"C:\xampp\php\php.exe" -S localhost:8000
```

#### 3. Abrir Terminal 3 - Configurar Banco (apenas na primeira vez)
```bash
# Criar banco de dados
"C:\xampp\mysql\bin\mysql.exe" -u root -e "CREATE DATABASE IF NOT EXISTS hcode_shop CHARACTER SET utf8 COLLATE utf8_general_ci;"

# Importar estrutura
Get-Content database-structure.sql | "C:\xampp\mysql\bin\mysql.exe" -u root hcode_shop
```

### Acessar o Projeto
- **Aplicação:** http://localhost:8000
- **Teste de conexão:** http://localhost:8000/test-connection.php

### Parar os Serviços
```bash
# Parar MySQL
taskkill /f /im mysqld.exe

# Parar PHP Server
taskkill /f /im php.exe
```

### Estrutura do Projeto
```
EcommercePHP/
├── inc/                    # Classes e configurações
├── view/                   # Views/Páginas
├── img/                    # Imagens
├── lib/                    # Bibliotecas CSS/JS
├── js/                     # JavaScript customizado
├── index.php              # Arquivo principal
├── config.php             # Configurações
└── database-structure.sql # Estrutura do banco
```

### Funcionalidades
- Catálogo de produtos
- Carrinho de compras
- Sistema de avaliações
- Cálculo de frete
- Interface responsiva
- API REST