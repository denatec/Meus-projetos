<?php 
include('../config/conexao.php'); 
if (isset($_POST['submit'])) {
    # code...
    $nome=$_POST['nome'];
    $professor=$_POST['professor'];
    $sala=$_POST['sala'];
    $ano=$_POST['ano'];
    $sql="INSERT INTO turma(nome,codprofessor,NSALA,cod_ano)VALUES('$nome','$professor',' $sala',' $ano')";

 if($conn->query($sql)){

$_SESSION['sucess']="Dados inseridos com sucesso";
}else{
$_SESSION['error']="Dados nao  inseridos com sucesso";

}   
}
header("location:../turma.php")
?>