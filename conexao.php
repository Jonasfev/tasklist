<?php

class Conexao{

    private $host= "";

    private $dbname = "";

    private $user = "u";

    private $senha = "";



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
