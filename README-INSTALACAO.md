# 🚀 Guia de Instalação - E-commerce PHP

## Pré-requisitos

- PHP 7.4+ (recomendado PHP 8.0+)
- MySQL 5.7+ ou MariaDB 10.3+
- Servidor web (Apache/Nginx) ou XAMPP/WAMP
- Git

## Instalação Passo a Passo

### 1. Clonar o Repositório
```bash
git clone [URL_DO_REPOSITORIO]
cd EcommercePHP
```

### 2. Configurar Banco de Dados

#### Opção A: Usando phpMyAdmin
1. Abra o phpMyAdmin
2. Crie um novo banco chamado `hcode_shop`
3. Importe o arquivo `database-structure.sql`

#### Opção B: Usando linha de comando
```bash
mysql -u root -p < database-structure.sql
```

### 3. Configurar Aplicação

1. **Copie o arquivo de configuração:**
```bash
cp config.php config.local.php
```

2. **Edite as configurações em `config.local.php`:**
```php
// Ajuste as configurações do banco se necessário
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', 'sua_senha');
define('DB_NAME', 'hcode_shop');
```

### 4. Testar Instalação

1. **Acesse o arquivo de teste:**
```
http://localhost/EcommercePHP/test-connection.php
```

2. **Se tudo estiver OK, acesse a aplicação:**
```
http://localhost/EcommercePHP/
```

## Estrutura do Projeto

```
EcommercePHP/
├── inc/                    # Classes e configurações
│   ├── configuration.php   # Classe de conexão com banco
│   └── Slim-2.x/          # Framework Slim
├── view/                   # Views/Páginas
│   ├── header.php
│   ├── footer.php
│   ├── index.php
│   ├── shop.php
│   └── cart.php
├── img/                    # Imagens
├── lib/                    # Bibliotecas CSS/JS
├── js/                     # JavaScript customizado
├── index.php              # Arquivo principal
├── config.php             # Configurações
└── database-structure.sql # Estrutura do banco
```

## Funcionalidades

- ✅ Catálogo de produtos
- ✅ Carrinho de compras
- ✅ Sistema de avaliações
- ✅ Cálculo de frete
- ✅ Interface responsiva
- ✅ API REST

## Troubleshooting

### Erro de Conexão com Banco
- Verifique se o MySQL está rodando
- Confirme as credenciais em `config.php`
- Teste a conexão com `test-connection.php`

### Erro 404 nas Rotas
- Verifique se o mod_rewrite está habilitado
- Confirme se o `.htaccess` está presente

### Imagens não Carregam
- Verifique as permissões da pasta `img/`
- Confirme os caminhos das imagens

## Desenvolvimento

### Branches
- `master` - Versão estável
- `developer` - Desenvolvimento
- `feature/*` - Novas funcionalidades

### Contribuindo
1. Crie uma branch a partir de `developer`
2. Faça suas alterações
3. Teste localmente
4. Faça commit e push
5. Abra um Pull Request

## Suporte

Para dúvidas ou problemas:
1. Verifique este README
2. Consulte os logs de erro
3. Teste com `test-connection.php`
4. Abra uma issue no repositório
