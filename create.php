<?php
include 'conexao.php';


if(isset($_POST['submit'])){
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $matricula=$_POST['matricula'];
    $nome_responsavel=$_POST['nome_responsavel'];
    $foto=$_FILES['foto'];
    $fotoNome=time()."_".$foto["name"];
    $fotoCaminho='uploads/'.$fotoNome;

if(!file_exists('uploads')){
mkdir('uploads',0777,true);
}
if(move_uploaded_file($foto['tmp_name'],$fotoCaminho)){
$sql="INSERT into usuarios(nome,email,matricula,nome_responsavel,foto) values (:nome,:email,:matricula,:nome_responsavel,:foto)";
$stmt=$con->prepare($sql);
$stmt->bindParam(':nome',$nome );
$stmt->bindParam(':email',$email );
$stmt->bindParam(':matricula',$matricula );
$stmt->bindParam(':nome_responsavel',$nome_responsavel );
$stmt->bindParam(':foto',$fotoCaminho );
if ($stmt->execute()) {
    echo "Dados salvos com sucesso!";
} else {
    echo "Erro ao salvar os dados!";
}
} else {
echo "Erro ao fazer upload da foto!";
}

}
 

