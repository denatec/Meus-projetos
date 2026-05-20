<?php 
include('../config/conexao.php'); 
if (isset($_POST['submit'])) {
    # code...
    $codigo=$_POST['codigo'];
    $nome=$_POST['nome'];
    $professor=$_POST['professor'];
    $sala=$_POST['sala'];
    $ano=$_POST['ano'];
    $sql="UPDATE turma SET nome='$nome',codprofessor='$professor',NSALA='$sala',cod_ano=' $ano' WHERE codigo='$codigo'";

 if($conn->query($sql)){

$_SESSION['sucess']="Dados atualizado com sucesso";
}else{
$_SESSION['error']="Dados nao  atualizado ";

}
header("location:../turma.php");   
}
?>