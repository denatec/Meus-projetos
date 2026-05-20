<?php 
include('../config/conexao.php'); 
if (isset($_POST['submit'])) {
    # code...
    $codigo=$_POST['codigo'];
    $curso=$_POST['curso'];
    $resultado=$_POST['resultado'];
    $estudante=$_POST['estudante'];
    $sql=" UPDATE historico_escolar SET codcuso='$curso',resultado='$resultado',estudante='$estudante' WHERE codigo='$codigo' ";

 if($conn->query($sql)){

$_SESSION['sucess']="Dados atualizado com sucesso";
}else{
$_SESSION['error']="Dados nao  atualizado";

}
header("location:../historico_escolar.php");   
}
?>