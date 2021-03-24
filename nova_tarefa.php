<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a  class = "navbar-brand" href="">
                <img src="img/logo.png" width = "30" height = "30" class ="d-inline-block align-top" alt="">
                APP lista Tarefas
            </a>
        </div>
    </nav>

    <? if(isset($_GET['inclusao']) && $_GET['inclusao']== 1){?>
        <div class="bg-success pt-2 text-white d-flex justify-content-center">
            <h5>Tarefa Inserida com Sucesso!!!</h5>
        </div>
        <? } ?>

    <div class="container app">
        <div class="row">
            <div class="col-md-3 menu">
                <ul>
                <li class = "list-group-item "><a href="taskList.php">Tarefas Pendentes</a></li>
                <li class = "list-group-item active"><a href="#">Nova Pendentes</a></li>
                <li class = "list-group-item "><a href="todas_tarefas.php">Todas Pendentes</a></li>
                </ul>
            </div>

            <div class="col-md-9">
            <div class="container pagina">
                <div class="row">
                    <div class="col">
                        <h4>Nova Tarefa</h4>
                        <hr>

                        <!--Enviando para o banco de dados -->
                        <form action="tarefa_controller.php?acao=inserir" method="POST">
                            <div class="form-group">
                            <label>Descrição da Tarefa</label>
                            <input type="text" name="tarefa" class="form-control" placeholder="Exemplo: lavar a o carro">
                            </div>
                            <button type="submit">Cadastrar</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>