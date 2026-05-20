<?php 
include "config/conexao.php";

if (isset($_POST['deleteall'])) {
$checkbox=$_POST['id'];
for ($i=0; $i <count($checkbox) ; $i++) { 
    # code...
    $del_id=$checkbox[$i];

    $sql="DELETE FROM disciplina WHERE codigo='". $del_id."' ";
    if ($conn->query($sql)) {
        # code...
        $_SESSION['sucess']="Dados apagado com sucesso";
    } else {
        # code...
        $_SESSION['sucess']=$conn->error;
    }
   
}
}
 header("location:disciplina.php");
?>