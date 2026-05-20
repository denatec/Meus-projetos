<?php 
include('../config/conexao.php'); 
if (isset($_POST['submit'])) {
    # code...
    $codigo=$_POST['codigo'];
    $funcionario=$_POST['funcionario'];
    $codsala=$_POST['codsala'];
    $periodo=$_POST['periodo'];
    $turma=$_POST['turma'];
    $curso=$_POST['curso'];
    $ano=$_POST['codano'];
    $academico=$_POST['academico'];
    $disciplina=$_POST['coddisciplina'];
    $estudante=$_POST['estudante'];
    $sql="UPDATE matricula SET funcionario='$funcionario',codsala='$codsala',periodo='$periodo',codturma='$turma',codcurso='$curso',
    codano='$ano',ano_academico='$academico',coddisciplina='$disciplina',estudante='$estudante' WHERE codigo='$codigo'";

 if($conn->query($sql)){

$_SESSION['sucess']="Dados atualizado com sucesso";
}else{
$_SESSION['error']="Dados nao  atualizado ";

}
header("location:../matricula.php");   
}
?>