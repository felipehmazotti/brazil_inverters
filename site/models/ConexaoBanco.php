<?php 

require_once './config/init.php';

class ConexaoBanco {
    protected $conBD;

    function __construct(){
        if(!isset($this->conBD)) {
            $this->fazerConexaoBanco();
        }
    }

    function fazerConexaoBanco(){
        try {
            $this->conBD = new PDO("mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
            $this->conBD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Erro ao conectar com o Banco de Dados: " . $e->getMessage();
        }
    }

    // Método para obter a conexão
    public function getConexao() {
        return $this->conBD;
    }
}

?>
