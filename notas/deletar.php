<?php 
include('../config/conexao.php');
$codigo=$_GET['eleminar'];
$sql="DELETE FROM nota WHERE codigo='$codigo'";
if($conn->query($sql)){

    $_SESSION['sucess']="Dados eleminado com sucesso";
    }else{
    $_SESSION['error']=" nao  foi possivel eliminar";
    
    }   

    header("location:../nota.php")
?>