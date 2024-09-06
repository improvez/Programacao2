<?php 

$bdServidor = 'localhost'; // 127.0.0.1
$bdUsuario = 'root'; // nome de usuário com acesso ao banco criado
$bdSenha = 'suasenha'; // conforme usuário criado
$bdBanco = 'tarefas'; // Schema a ser utilizado

// mysqli é um dos conectores ao banco;
// outro conector que estudaremos mais a frente é o PDO.

// Inserir tabela01 e tabela02
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

// função que busca os registro do banco

function buscar_tarefas($conexao) {
    $sqlBusca = 'SELECT * FROM tarefas';
    $resultado = mysqli_query($conexao, $sqlBusca);

    $tarefas = array(); // []

    while($tarefa = mysqli_fetch_assoc($resultado)) {
        $tarefas[] = $tarefa;
    }

    return $tarefas;
} 

// Função de gravação do Banco

function gravar_tarefa($conexao, $tarefa) {
    $sqlGravar = "INSERT INTO tarefas(
        nome, descricao, prioridade, prazo, concluida
    ) VALUES (  
        '{$tarefa['nome']}',
        '{$tarefa['descricao']}',
        '{$tarefa['prioridade']}',
        '{$tarefa['prazo']}',
        '{$tarefa['concluida']}',
    )";
} 

?>