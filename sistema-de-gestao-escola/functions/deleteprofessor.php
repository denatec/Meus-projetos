<?php 
include('../config/conexao.php');
$codigo=$_GET['eleminar'];
$sql="DELETE FROM professor WHERE matricula='$matri'";
if($conn->query($sql)){

    $_SESSION['sucess']="Dados eleminado com sucesso";
    }else{
    $_SESSION['error']=" nao  foi possivel eliminar";
    
    }   

    header("location:../professor.php")
?>