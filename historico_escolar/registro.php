<?php 
include('../config/conexao.php'); 
if (isset($_POST['submit'])) {
    # code...
    $curso=$_POST['curso'];
    $resultado=$_POST['resultado'];
    $estudante=$_POST['estudante'];
    $sql="INSERT INTO historico_escolar(codcurso,resultado,estudante)VALUES('$curso','$resultado','$estudante')";

 if($conn->query($sql)){

$_SESSION['sucess']="Dados inseridos com sucesso";
}else{
$_SESSION['error']="Dados nao  inseridos com sucess";

}   
}
header("location:../historico_escolar.php")
?>