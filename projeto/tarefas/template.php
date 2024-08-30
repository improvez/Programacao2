
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas PHP</title>
</head>

<body>
    <h1>
        Gerenciador de Tarefas PHP
    </h1>
    <form>
        <fieldset>
            <legend>Nova tarefa</legend>
            <label>
                Tarefa:
                <input type="text" name='nome' />
            </label>
            <label>
                Data:
                <input type="date" name='data' />
            </label>
            <label>
                Prioridade:
                <input type="text" placeholder="baixa" list="prio" name='prio'>
                <datalist id="prio">
                    <option>baixa</option>
                    <option>media</option>
                    <option>alta</option>
                </datalist>
            </label>
            <label>
                Status:
                <input type="checkbox" name='status' />
            </label>
            <input type="submit" name="Gravar" />
        </fieldset>
    </form>
    <table border="1">
        <tr>
            <th>Tarefas</th>
            <th>Data</th>
            <th>Prioridade</th>
            <th>Status</th>
        </tr>
        <?php foreach ($lista_tarefas as $tarefas) : ?>
            <tr>
                <td><?php echo $tarefa["nome"]; ?></td>
                <td><?php echo $tarefa['data']; ?></td>
                <td><?php echo $tarefa['prio']; ?></td>
                <td><?php echo $tarefa['status']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>