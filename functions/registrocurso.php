<?php 
include('../config/conexao.php'); 
if (isset($_POST['submit'])) {
    # code...
    $nome=$_POST['nome'];
    $Naula=$_POST['aula'];
    $descrisao=$_POST['descrisao'];
    $coddepartamento=$_POST['departamento'];
    $sql="INSERT INTO curso(nome,Naula,descrisao,coddepartamento)VALUES('$nome','$Naula',' $descrisao',' $coddepartamento')";

 if($conn->query($sql)){

$_SESSION['sucess']="Dados inseridos com sucesso";
}else{
$_SESSION['error']="Dados nao  inseridos com sucesso";

}   
}
header("location:../curso.php")
?>