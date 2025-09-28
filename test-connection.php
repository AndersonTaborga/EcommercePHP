<?php
// Arquivo de teste para verificar conexão com banco de dados
require_once 'inc/configuration.php';

echo "<h2>Teste de Conexão com Banco de Dados</h2>";

try {
    $sql = new Sql();
    echo "<p style='color: green;'>✅ Conexão com banco de dados estabelecida com sucesso!</p>";
    
    // Testar uma consulta simples
    $result = $sql->query("SELECT 1 as test");
    if ($result) {
        echo "<p style='color: green;'>✅ Consulta de teste executada com sucesso!</p>";
    }
    
    // Verificar se a tabela de produtos existe
    $tables = $sql->select("SHOW TABLES LIKE 'tb_produtos'");
    if (count($tables) > 0) {
        echo "<p style='color: green;'>✅ Tabela 'tb_produtos' encontrada!</p>";
        
        // Contar produtos
        $count = $sql->select("SELECT COUNT(*) as total FROM tb_produtos");
        echo "<p>📊 Total de produtos: " . $count[0]['total'] . "</p>";
    } else {
        echo "<p style='color: orange;'>⚠️ Tabela 'tb_produtos' não encontrada. Você precisa criar a estrutura do banco.</p>";
    }
    
} catch (Exception $e) {
    echo "<p style='color: red;'>❌ Erro: " . $e->getMessage() . "</p>";
    echo "<p>Verifique se:</p>";
    echo "<ul>";
    echo "<li>O MySQL está rodando</li>";
    echo "<li>As credenciais estão corretas em config.php</li>";
    echo "<li>O banco 'hcode_shop' existe</li>";
    echo "</ul>";
}
?>
