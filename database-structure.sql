-- Estrutura básica do banco de dados para o e-commerce
-- Execute este script no MySQL para criar as tabelas necessárias

CREATE DATABASE IF NOT EXISTS hcode_shop CHARACTER SET utf8 COLLATE utf8_general_ci;
USE hcode_shop;

-- Tabela de categorias
CREATE TABLE IF NOT EXISTS tb_categorias (
    id_cat INT AUTO_INCREMENT PRIMARY KEY,
    nome_cat VARCHAR(100) NOT NULL,
    descricao_cat TEXT,
    ativo TINYINT(1) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de produtos
CREATE TABLE IF NOT EXISTS tb_produtos (
    id_prod INT AUTO_INCREMENT PRIMARY KEY,
    nome_prod_curto VARCHAR(100) NOT NULL,
    nome_prod_longo VARCHAR(255) NOT NULL,
    codigo_interno VARCHAR(50) UNIQUE,
    id_cat INT,
    preco DECIMAL(10,2) NOT NULL,
    peso DECIMAL(8,3) DEFAULT 0,
    largura_centimetro DECIMAL(8,2) DEFAULT 0,
    altura_centimetro DECIMAL(8,2) DEFAULT 0,
    quantidade_estoque INT DEFAULT 0,
    preco_promorcional DECIMAL(10,2) DEFAULT 0,
    foto_principal VARCHAR(255),
    visivel TINYINT(1) DEFAULT 1,
    descricao TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (id_cat) REFERENCES tb_categorias(id_cat)
);

-- Tabela de carrinhos
CREATE TABLE IF NOT EXISTS tb_carrinhos (
    id_car INT AUTO_INCREMENT PRIMARY KEY,
    session_id VARCHAR(255) NOT NULL,
    cep_car VARCHAR(10),
    frete_car DECIMAL(10,2) DEFAULT 0,
    prazo_car INT DEFAULT 0,
    subtotal_car DECIMAL(10,2) DEFAULT 0,
    total_car DECIMAL(10,2) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabela de produtos no carrinho
CREATE TABLE IF NOT EXISTS tb_carrinhosprodutos (
    id_carprod INT AUTO_INCREMENT PRIMARY KEY,
    id_car INT NOT NULL,
    id_prod INT NOT NULL,
    qtd_car INT DEFAULT 1,
    preco_car DECIMAL(10,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_car) REFERENCES tb_carrinhos(id_car),
    FOREIGN KEY (id_prod) REFERENCES tb_produtos(id_prod)
);

-- Tabela de reviews/avaliações
CREATE TABLE IF NOT EXISTS tb_reviews (
    id_review INT AUTO_INCREMENT PRIMARY KEY,
    id_prod INT NOT NULL,
    nome_review VARCHAR(100) NOT NULL,
    email_review VARCHAR(255),
    review TEXT NOT NULL,
    review_score INT DEFAULT 5,
    aprovado TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_prod) REFERENCES tb_produtos(id_prod)
);

-- Inserir dados de exemplo
INSERT INTO tb_categorias (nome_cat, descricao_cat) VALUES
('Eletrônicos', 'Produtos eletrônicos e tecnológicos'),
('Casa e Jardim', 'Produtos para casa e jardim'),
('Esportes', 'Produtos esportivos e fitness'),
('Moda', 'Roupas e acessórios');

INSERT INTO tb_produtos (nome_prod_curto, nome_prod_longo, codigo_interno, id_cat, preco, peso, largura_centimetro, altura_centimetro, quantidade_estoque, preco_promorcional, foto_principal, descricao) VALUES
('iPhone 15', 'Apple iPhone 15 128GB', 'IPH15-128', 1, 5999.00, 0.171, 14.76, 7.15, 10, 5499.00, 'iphone.jpg', 'iPhone 15 com sistema A17 Pro'),
('Smart TV Samsung', 'Smart TV Samsung 55" 4K', 'TV-SAM-55', 1, 2999.00, 15.5, 123.0, 70.0, 5, 2499.00, 'SmartTVSamsung.jpg', 'Smart TV Samsung 55 polegadas 4K'),
('Ar Condicionado LG', 'Ar Condicionado Split LG 12.000 BTU', 'AC-LG-12K', 2, 1299.00, 25.0, 80.0, 30.0, 8, 1099.00, 'arCondicionadoSplitLG.jpg', 'Ar condicionado split LG 12.000 BTU'),
('Cafeteira Dolce Gusto', 'Cafeteira Dolce Gusto Genio S', 'CAF-DG-GENIO', 2, 399.00, 2.5, 25.0, 35.0, 15, 299.00, 'CafeteiraDolceGusto.jpg', 'Cafeteira de cápsulas Dolce Gusto');

-- Inserir alguns reviews de exemplo
INSERT INTO tb_reviews (id_prod, nome_review, email_review, review, review_score, aprovado) VALUES
(1, 'João Silva', 'joao@email.com', 'Excelente produto, muito satisfeito!', 5, 1),
(1, 'Maria Santos', 'maria@email.com', 'Bom custo-benefício', 4, 1),
(2, 'Pedro Costa', 'pedro@email.com', 'TV de ótima qualidade', 5, 1),
(3, 'Ana Oliveira', 'ana@email.com', 'Ar condicionado muito eficiente', 5, 1);
