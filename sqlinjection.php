<?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    echo "<hr>";

    if(!empty($_POST['usuario']) && !empty($_POST['senha'])){
        $dsn = "mysql:host=sql210.unaux.com;dbname=unaux_26273311_pdo";
        $usuario = "unaux_26273311";
        $senha = "fumecgggqsvd";

        try{
            $conexao = new PDO($dsn, $usuario, $senha);

            $query = "select * from tb_usuarios where ";
            $query .= "email = :usuario ";
            $query .= "AND senha = :senha ";

            // $stmt = $conexao->query($query);
            $stmt = $conexao->prepare($query);

            $stmt->bindValue(':usuario', $_POST['usuario']);
            $stmt->bindValue(':senha', $_POST['senha']);

            $stmt->execute();

            $dados = $stmt->fetch();

            echo "<pre>";
            print_r($dados);
            echo "</pre>";

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
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sqlinjection.php" method="POST">
        <input type="text" name="usuario" placeholder="Usuário">
        <br>
        <input type="password" name="senha" placeholder="Senha">
        <br>
        <button type="submit">Entrar</button>
        <br>
    </form>
</body>
</html>