<?php 
include('../config/conexao.php'); 
if (isset($_POST['submit'])) {
    # code...
    $ano=$_POST['ano'];
    $lancamento=$_POST['lancamento'];
    $disciplina=$_POST['disciplina'];
    $estudante=$_POST['estudante'];
   
    $sql="INSERT INTO nota(cod_ano,data_lancamento,coddisciplinais,codstudys)VALUES('$ano',' $lancamento','$disciplina','$estudante')";

 if($conn->query($sql)){

$_SESSION['sucess']="Dados inseridos com sucesso";
}else{
$_SESSION['error']=" nao foi possivel inserir os dados";

}   
}
header("location:../nota.php")
?>