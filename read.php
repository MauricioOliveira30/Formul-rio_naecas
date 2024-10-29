<?php
include 'conexao.php';
$sql = "SELECT * FROM usuarios";
$stmt = $con->query($sql);
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de matriculados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <h1>Usuários</h1>
    <table class="table table-dark table-striped" border="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Nome do Responsável</th>
            <th>Matricula</th>
            <th>Foto</th>
            <th>Ações</th>
        </tr>
        <?php
      
         foreach($usuarios as $fieis) { ?>
        <tr>
            <td><?=$fieis["nome"];?></td>
            <td><?=$fieis["email"];?></td>
            <td><?=$fieis["nome_responsavel"];?></td>
            <td><?=$fieis["matricula"];?></td>
            <td><img src="<?=$fieis["foto"];?>" width="50"></td>
            <td>
                <a href="form.php?matricula=<?=$fieis['matricula'];?>" class="btn btn-success">Editar</a>
                <a href="delete.php?matricula=<?=$fieis['matricula'];?>"  class="btn btn-danger">Apagar</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
