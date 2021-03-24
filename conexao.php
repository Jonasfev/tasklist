<?php
class Conexao{
    private $host= "sql308.unaux.com";
    private $dbname = "unaux_26273168_aulaBD";
    private $user = "unaux_26273168";
    private $senha = "sa21dr07";

    public function conectar(){
        try{
            $conexao = new PDO("mysql:host=$this->host;dbname=$this->dbname","$this->user", "$this->senha");
            return $conexao;
        }
        catch(PDOException $e){
            echo '<br>Erro '. $e->getCode();
            echo '<br>Mensagem '. $e->getMessage();
            echo '<br>Arquivo '. $e->getFile();
            echo '<br>Linha '. $e->getLine();
        }
    }

}


?>