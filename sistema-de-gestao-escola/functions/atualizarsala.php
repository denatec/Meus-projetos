<?php 
include('../config/conexao.php'); 
if (isset($_POST['submit'])) {
    # code...
    $codigo=$_POST['codigo'];
    $nome=$_POST['nome'];
    $Naula=$_POST['Naula'];
    $sql="UPDATE sala SET nome='$nome' WHERE codigo='$codigo'";

 if($conn->query($sql)){

$_SESSION['sucess']="Dados atualizado com sucesso";
}else{
$_SESSION['error']="Dados nao  atualizado com sucesso";

}
header("location:../sala.php");   
}
?>