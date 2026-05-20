<?php 
include('../config/conexao.php'); 
if (isset($_POST['submit'])) {
    # code...
    $nota=$_POST['nota'];
    $semestre=$_POST['semestre'];
    $ano_lectivo=$_POST['ano_lectivo'];
    $codturma=$_POST['codturma'];
    $lancamento=$_POST['lancamento'];
    $academico=$_POST['academico'];
    $coddisciplina=$_POST['coddisciplina'];
    $codestudante=$_POST['estudante'];
    $sql="INSERT INTO releatorio(`notas`, `semestre`,`coddisciplina`, `codano_lectivo`, `codturma`, `data_lancameto`)
    VALUES('$nota',' $semestre',' $coddisciplina',' $ano_lectivo',' $codturma',' $lancamento')";

 if($conn->query($sql)){

$_SESSION['sucess']="Dados inseridos com sucesso";
}else{
$_SESSION['error']="Dados nao  inseridos ";

}   
}
header("location:../relatorio.php")
?>