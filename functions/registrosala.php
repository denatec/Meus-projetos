<?php 
include('../config/conexao.php'); 
if (isset($_POST['submit'])) {
    # code...
    $nome=$_POST['nome'];
    $sql="INSERT INTO sala(nome) VALUES('$nome') ";

 if($conn->query($sql)){

$_SESSION['sucess']="Dados inseridos com sucesso";
}else{
$_SESSION['error']="Dados nao  inseridos com sucesso";

}   
}
header("location:../sala.php");
?>