<?php
include 'conexao.php';

if (isset($_GET['matricula'])) {
    $matricula = $_GET["matricula"];
    
    // Preparar e executar o SELECT
    $stmt = $con->prepare("SELECT * FROM usuarios WHERE matricula = :matricula");
    $stmt->bindParam(":matricula", $matricula);
    $stmt->execute(); // Adiciona a execução da consulta

    $usuarios = $stmt->fetch(PDO::FETCH_ASSOC);
}

if (isset($_POST["submit"])) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $matricula = $_POST["matricula"];
    $nome_responsavel = $_POST["nome_responsavel"];
    $foto = $_FILES['foto']; // Assumindo que `foto` já é o caminho ou nome da imagem
    $fotoNome=time()."_".$foto["name"];
    $fotoCaminho='uploads/'.$fotoNome;
    move_uploaded_file($foto['tmp_name'],$fotoCaminho);
      
    // Consulta UPDATE com condição WHERE
    $sql = "UPDATE usuarios 
            SET nome = :nome, email = :email, nome_responsavel = :nome_responsavel, foto = :foto
            WHERE matricula = :matricula"; // Adiciona o WHERE
    
    $stmt = $con->prepare($sql);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":nome_responsavel", $nome_responsavel);
    $stmt->bindParam(":foto", $fotoNome);
    $stmt->bindParam(":matricula", $matricula);
    
    $stmt->execute();
   // header("Location: read.php");
    //exit();
    echo $sql; // Adiciona exit para evitar que o código continue executando após o redirecionamento
}
?>
