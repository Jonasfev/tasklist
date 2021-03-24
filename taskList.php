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

    <div class="container app">
        <div class="row">
            <div class="col-md-3 menu">
                <ul>
                <li class = "list-group-item active"><a href="#">Tarefas Pendentes</a></li>
                <li class = "list-group-item "><a href="nova_tarefa.php">Nova Pendentes</a></li>
                <li class = "list-group-item "><a href="todas_tarefas.php">Todas Pendentes</a></li>
                </ul>
            </div>

            <div class="col-md-9">
            <div class="container pagina">
                <div class="row">
                    <div class="col">
                        <h4>Tarefas Pendentes</h4>
                        <hr>
                        <div class="row mb-3 d-flex align-itens-center tarefa">
                            <div class="col-sm-9">Lavar o carro</div>
                            <div class="col-sm-3 mt-2 d-flex justify-content-between">
                                <i class="fas fa-trash-alt fa-lg text-danger"></i>
                                <i class="fas fa-edit fa-lg text-info"></i>
                                <i class="fas fa-check-square fa-lg text-sucess"></i>
                            </div>
                        </div>
                        <div class="row mb-3 d-flex align-itens-center tarefa">
                            <div class="col-sm-9">Passear com o cachorro</div>
                            <div class="col-sm-3 mt-2 d-flex justify-content-between">
                                <i class="fas fa-trash-alt fa-lg text-danger"></i>
                                <i class="fas fa-edit fa-lg text-info"></i>
                                <i class="fas fa-check-square fa-lg text-sucess"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>