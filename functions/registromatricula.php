<?php 

include('../config/conexao.php'); 
if (isset($_POST['submit'])) {
    # code...
    $funcionario=$_POST['funcionario'];
    $periodo=$_POST['periodo'];
    $codsala=$_POST['codsala'];
    $codturma=$_POST['turma'];
    $codcurso=$_POST['curso'];
    $codano=$_POST['ano'];
    $academico=$_POST['academico'];
    $coddisciplina=$_POST['coddisciplina'];
    $codestudante=$_POST['estudante'];
    $sql="INSERT INTO matricula(`funcionario`, `codsala`, `periodo`, `codturma`, `codcurso`, `codano`, `ano_academico`, `coddisciplinas`, `codestudante`)
    VALUES('$funcionario',' $codsala',' $periodo',' $codturma',' $codcurso',' $codano',' $academico',' $coddisciplina',' $codestudante')";

 if($conn->query($sql)){

$_SESSION['sucess']="Dados inseridos com sucesso";
}else{
$_SESSION['error']="Dados nao  inseridos ";

}   
}
header("location:../matricula.php")
?>