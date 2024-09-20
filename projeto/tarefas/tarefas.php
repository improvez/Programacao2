<?php session_start(); 

include "banco.php";
include "auxiliares.php";

    // Verifica se existe valor para o índice nesta posição
    // array_key_exists() equivale ao -> isset()
    // echo "Tarefa informada: " . $_GET['nome'];

    if (array_key_exists('nome', $_POST) && $_POST['nome'] != '') {
        $tarefa = [];
        $tarefa['nome'] = $_POST['nome'];

        if (array_key_exists('descricao', $_POST)) {
            $tarefa['descricao'] = $_POST['descricao'];
        } else {
            $tarefa['descricao'] = '';
        }

        if (array_key_exists('prazo', $_POST)) {
            $tarefa['prazo'] = converte_data_para_banco($_POST['prazo']);
        } else {
            $tarefa['prazo'] = '';
        }

        $tarefa['prioridade'] = $_POST['prioridade'];

        if(array_key_exists('concluida', $_POST)) {
            $tarefa['concluida'] = 1;
        } else {
            $tarefa['concluida'] = 0;
        }

        gravar_tarefa($conexao, $tarefa);

        $lista_tarefas = buscar_tarefas($conexao);
        }
        include "template.php"; 
?>
