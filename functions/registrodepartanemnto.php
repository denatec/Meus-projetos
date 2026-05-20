<?php 
include('../config/conexao.php'); 
if (isset($_POST['submit'])) {
    # code...
    $nome=$_POST['nome'];
    $telefone=$_POST['telefone'];
    $sql="INSERT INTO departamento(nome,telefone)VALUES('$nome',' $telefone')";

 if($conn->query($sql)){

$_SESSION['sucess']="Dados inseridos com sucesso";
}else{
$_SESSION['error']="Dados nao  inseridos com sucesso";

}   
}
header("location:../departamento.php")
?>