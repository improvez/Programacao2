<?php session_start(); 

    // Verifica se existe valor para o índice nesta posição
    // array_key_exists() equivale ao -> isset()
    // echo "Tarefa informada: " . $_GET['nome'];
    if (array_key_exists('nome', $_GET) && $_GET['nome'] != '') {
        $tarefa = [];
        $tarefa['nome'] = $_GET['nome'];
        if (array_key_exists('data', $_GET)) {
            
            $tarefa['data'] = $_GET['data'];
        } else {
            $tarefa['data'] = '';
        }
        if (array_key_exists('prio', $_GET)) {
            $tarefa['prio'] = $_GET['prio'];
        } else {
            $tarefa['prio'] = '';
        }
        if (array_key_exists('status', $_GET)) {
            $tarefa['status'] = $_GET['status'];
        } else {
            $tarefa['status'] = '';
        }
        $_SESSION['lista_tarefas'][] = $tarefa;
    }
        if (array_key_exists('lista_tarefas', $_SESSION)) {
            $lista_tarefas = $_SESSION['lista_tarefas'];
        } else {
            $lista_tarefas = [];
        }
        include "template.php";
    ?>
<!-- Desafio 01
Inserir os campos para data / prioridade / status -->