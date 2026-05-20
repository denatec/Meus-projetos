<?php 
include('../config/conexao.php'); 
if (isset($_POST['submit'])) {
    # code...
    $codigo=$_POST['codigo'];
    $nome=$_POST['nome'];
    $Naula=$_POST['aula'];
    $descrisao=$_POST['descrisao'];
    $coddepartamento=$_POST['departamento'];
    $sql="UPDATE curso SET Naula='$Naula',descrisao='$descrisao',coddepartamento='$coddepartamento' WHERE codigo='$codigo'";

 if($conn->query($sql)){

$_SESSION['sucess']="Dados inseridos com sucesso";
}else{
$_SESSION['error']="Dados nao  inseridos com sucesso";

}   
}
header("location:../curso.php")
?>