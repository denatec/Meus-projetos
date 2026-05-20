<?php 
include('../config/conexao.php'); 
if (isset($_POST['submit'])) {
    # code...
 
    $fim=$_POST['fim'];
   
    $sql="INSERT INTO ano_lectivo(`data_fim`)VALUES(' $fim')";

 if($conn->query($sql)){

$_SESSION['sucess']="Dados inseridos com sucesso";
}else{
$_SESSION['error']="Dados nao  inseridos ";

}   
}
header("location:../lectivo.php")
?>