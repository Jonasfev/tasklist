<?php
$acao = 'recuperar';
require 'tarefa_controller.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <script>
        function editar(id, txt_tarefa){
            //formulario de edição
            let form = document.createElement('form');
            form.action = "tarefa_controller.php?acao=atualizar";
            form.method = 'post';
            form.className = 'row';

            //input para entrade de dados
            let inputTarefa = document.createElement('input');
            inputTarefa.type = "text";
            inputTarefa.name = 'tarefa';
            inputTarefa.className = 'col-9 form-control';
            inputTarefa.value = txt_tarefa;

            //hidden

            let inputID = document.createElement('input');
            inputID.type = "hidden";
            inputID.name = 'id';
            inputID.value = id;

            //button para envio

            let button = document.createElement('button');
            button.type = 'submit';
            button.className = 'col-3 btn btn-info';
            button.innerHTML = 'Atualizar';

            //inclui input no form

            form.appendChild(inputTarefa);
            //incluir input hidden

            form.appendChild(inputID);

            //incluir button
            form.appendChild(button);

            //selecionar a tarefa
            let tarefa = document.getElementById('tarefa_'+id);

            //limpar texto 
            tarefa.innerHTML = " ";

            //incluir form na pagina
            tarefa.insertBefore(form, tarefa[0]);
        }

        function remover(id){
            location.href = "todas_tarefas.php?acao=remover&&id="+id;
        }
    </script>
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
                <li class = "list-group-item "><a href="taskList.php">Tarefas Pendentes</a></li>
                <li class = "list-group-item "><a href="nova_tarefa.php">Nova Pendentes</a></li>
                <li class = "list-group-item active"><a href="#">Todas Pendentes</a></li>
                </ul>
            </div>

            <div class="col-md-9">
            <div class="container pagina">
                <div class="row">
                    <div class="col">
                        <h4>Todas Tarefas</h4>
                        <hr>
                        <?foreach ($tarefas as $indice => $tarefa){ ?>
                            <div class="row mb-3 d-flex align-itens-center tarefa">
                                <div class="col-sm-9" id="tarefa_<?=$tarefa->id?>">
                                    <?=$tarefa->tarefa?>(<?=$tarefa->status?>)
                                </div>
                                <div class="col-sm-3 mt-2 d-flex justify-content-between">
                                    <i class="fas fa-trash-alt fa-lg text-danger" onclick="remover(<?=$tarefa->id?>);"></i>
                                    <i class="fas fa-edit fa-lg text-info" onclick="editar(<?=$tarefa->id?>, '<?=$tarefa->tarefa?>');"></i>
                                    <i class="fas fa-check-square fa-lg text-sucess"></i>
                                </div>
                            </div>
                        <? } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>