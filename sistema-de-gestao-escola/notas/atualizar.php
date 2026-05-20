<?php 
include('../config/conexao.php'); 
if (isset($_POST['submit'])) {
    # code...
    $codigo=$_POST['codigo'];
    $P1=$_POST['P1'];
    $P2=$_POST['P2'];
    $P3=$_POST['P3'];
    $disciplina=$_POST['disciplina'];
    $estudante=$_POST['estudante'];
   
    $sql="UPDATE notas SET PT1='$P1',PT2='$P2',PT3='$P3',coddisciplinais='$disciplina',codstudys='$estudante' WHERE codigo='$codigo'";

 if($conn->query($sql)){

$_SESSION['sucess']="Dados inseridos com sucesso";
}else{
$_SESSION['error']="Dados nao  inseridos com sucesso";

}   
}
header("location:../nota.php")
?>