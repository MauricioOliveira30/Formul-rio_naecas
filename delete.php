<?php
include "conexao.php";
if(isset($_GET["matricula"])){
$matricula=$_GET["matricula"];
$stmt=$con->prepare("DELETE from usuarios where matricula=:matricula");
$stmt->bindParam("matricula",$matricula);
if($stmt->execute()){
    echo "Usuário excluído com sucesso!!!";

}else{
    echo" Erro ao excluir usuário";
}




}