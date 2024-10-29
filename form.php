<?php ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action="create.php" method="post" enctype="multipart/form-data">
<label for="name">Nome:</label>
<input type="text" name="nome" id="nome" required><br>

<label for="email">Email:
<input type="text" name="email" id="email"><br>
<label for="matricula">Matrícula:
    <input type="number" name="matricula" id="matricula"><br>
    <label for="nome_responsavel">Nome do responsável:
        <input type="text" name="nome_responsavel" id="nome_responsavel"><br>
    <label for="foto">Foto:</label>
<input type="file" name="foto" id="foto" required>

</label>
<input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>