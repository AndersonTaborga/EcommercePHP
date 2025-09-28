<?php include_once("header.php");?>

<section ng-controller="home-controller">
    <!-- Hero Section -->
    <div id="hero-section" class="hero-banner">
        <div class="hero-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="hero-title">Bem-vindo à nossa Loja</h1>
                        <p class="hero-subtitle">Encontre os melhores produtos com os preços mais competitivos do mercado</p>
                        <div class="hero-buttons">
                            <a href="shop" class="btn btn-primary btn-lg">Ver Produtos</a>
                            <a href="#destaques" class="btn btn-outline-primary btn-lg">Ofertas</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="hero-image">
                            <img src="img/banner.jpg" alt="Produtos em Destaque" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Produtos em Destaque -->
    <div id="destaques" class="container" style="margin-top: 60px;">
        <div class="row text-center">
            <h2 class="section-title">Produtos em Destaque</h2>
            <hr class="section-divider">
        </div>
        
        <div class="row" ng-repeat="produto in produtos" ng-if="$index < 3">
            <div class="col-md-4">
                <div class="product-card">
                    <div class="product-image">
                        <a href="produto-{{produto.id_prod}}">
                            <img src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}" class="img-responsive">
                        </a>
                        <div class="product-badge" ng-if="produto.preco_promorcional > 0">
                            Oferta
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">
                            <a href="produto-{{produto.id_prod}}">{{produto.nome_prod_longo}}</a>
                        </h3>
                        <div class="product-price">
                            <span class="price-current">R$ {{produto.preco}}</span>
                            <span class="price-original" ng-if="produto.preco_promorcional > 0">R$ {{produto.preco_promorcional}}</span>
                        </div>
                        <div class="product-actions">
                            <a href="carrinhoAdd-{{produto.id_prod}}" class="btn btn-primary btn-sm">
                                <i class="fa fa-shopping-cart"></i> Comprar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Categorias -->
    <div class="container" style="margin-top: 60px;">
        <div class="row text-center">
            <h2 class="section-title">Nossas Categorias</h2>
            <hr class="section-divider">
        </div>
        
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fa fa-mobile fa-3x"></i>
                    </div>
                    <h4>Eletrônicos</h4>
                    <p>Smartphones, TVs, Notebooks e mais</p>
                    <a href="shop?categoria=1" class="btn btn-outline-primary">Ver Produtos</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fa fa-home fa-3x"></i>
                    </div>
                    <h4>Casa e Jardim</h4>
                    <p>Eletrodomésticos e decoração</p>
                    <a href="shop?categoria=2" class="btn btn-outline-primary">Ver Produtos</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fa fa-futbol-o fa-3x"></i>
                    </div>
                    <h4>Esportes</h4>
                    <p>Equipamentos e acessórios esportivos</p>
                    <a href="shop?categoria=3" class="btn btn-outline-primary">Ver Produtos</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fa fa-shopping-bag fa-3x"></i>
                    </div>
                    <h4>Moda</h4>
                    <p>Roupas e acessórios</p>
                    <a href="shop?categoria=4" class="btn btn-outline-primary">Ver Produtos</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Benefícios -->
    <div class="benefits-section" style="margin-top: 60px; background-color: #f8f9fa; padding: 60px 0;">
        <div class="container">
            <div class="row text-center">
                <h2 class="section-title">Por que escolher nossa loja?</h2>
                <hr class="section-divider">
            </div>
            
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="benefit-item">
                        <i class="fa fa-truck fa-3x text-primary"></i>
                        <h4>Frete Grátis</h4>
                        <p>Frete grátis para compras acima de R$ 200</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="benefit-item">
                        <i class="fa fa-shield fa-3x text-primary"></i>
                        <h4>Compra Segura</h4>
                        <p>Seus dados protegidos com criptografia SSL</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="benefit-item">
                        <i class="fa fa-undo fa-3x text-primary"></i>
                        <h4>Troca Fácil</h4>
                        <p>30 dias para trocar ou devolver</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->
    <div class="newsletter-section" style="background-color: #6f42c1; color: white; padding: 60px 0; margin-top: 60px;">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Receba nossas ofertas exclusivas</h2>
                    <p>Cadastre-se e receba em primeira mão nossas promoções e novidades</p>
                    <form class="newsletter-form" style="margin-top: 30px;">
                        <div class="input-group input-group-lg">
                            <input type="email" class="form-control" placeholder="Seu melhor e-mail">
                            <span class="input-group-btn">
                                <button class="btn btn-warning" type="submit">Cadastrar</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once("footer.php") ?>

<script>
angular.module("shop", []).controller("home-controller", function($scope, $http){
    $scope.produtos = [];

    // Carregar produtos em destaque
    $http({
        method: 'GET',
        url: 'produtos'
    }).then(function successCallback(response) {
        $scope.produtos = response.data;
    }, function errorCallback(response) {
        console.error('Erro ao carregar produtos:', response);
    });
});
</script>
