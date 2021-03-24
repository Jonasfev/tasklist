<?php
    $dsn = "mysql:host=sql210.unaux.com;dbname=unaux_26273311_pdo";
    $usuario = "unaux_26273311";
    $senha = "fumecgggqsvd";

    try{
        $conexao = new PDO($dsn, $usuario, $senha);

        // $query = "create table tb_usuarios(id int not null primary key auto_increment, nome varchar(50) not null, email varchar(100) not null, senha varchar(32) not null)";

        // $retorno = $conexao->exec($query);

        // echo $retorno;

        // $query = 'insert into tb_usuarios(nome, email, senha) values ("Jorge Santa Maria", "jorge@teste.edu.br", "123")';
        // $retorno = $conexao->query($query);

        // $query = 'insert into tb_usuarios(nome, email, senha) values ("Nadia Clara Bela", "nadia@teste.edu.br", "1546852")';
        // $retorno = $conexao->query($query);

        // $query = 'insert into tb_usuarios(nome, email, senha) values ("Natanael Rui Tomas", "natanael@teste.edu.br", "1234")';
        // $retorno = $conexao->query($query);

        // $query = 'insert into tb_usuarios(nome, email, senha) values ("Gomes Kurts", "gomes@teste.edu.br", "12345")';
        // $retorno = $conexao->query($query);

        $query = "select * from tb_usuario";

        $stmt = $conexao->query($query);

        $lista = $stmt->fetch();
        
        // $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $lista = $stmt->fetchAll(PDO::FETCH_NUM);
        // $lista = $stmt->fetchAll(PDO::FETCH_OBJ);

        echo "<pre>";
        print_r($lista);
        echo "</pre>";

        // foreach($lista as $key=>$value){
        //     echo $value['nome'];
        //     echo "<hr>";
        // }

    } catch (PDOException $e){
        echo "<br>Erro: " . $e->getCode();
        echo "<br>Mensagem: " . $e->getMessage();
        echo "<br>Arquivo: " . $e->getFile();
        echo "<br>Linha: " . $e->getLine();
    } catch (Error $e){
        echo "<br>Erro: " . $e->getCode();
        echo "<br>Mensagem: " . $e->getMessage();
        echo "<br>Arquivo: " . $e->getFile();
        echo "<br>Linha: " . $e->getLine();
    }
?>