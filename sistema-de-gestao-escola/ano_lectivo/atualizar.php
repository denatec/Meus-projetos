<?php 
include('../config/conexao.php'); 
if (isset($_POST['submit'])) {
    # code...
    $codigo=$_POST['codigo'];
    $inicio=$_POST['inicio'];
    $fim=$_POST['fim'];
    $ano=$_POST['ano'];
    
    $sql="UPDATE releatorio SET data_inicio='$inicio',data_fim='$fim',ano='$ano'  WHERE codigo='$codigo'";

 if($conn->query($sql)){

$_SESSION['sucess']="Dados atualizado com sucesso";
}else{
$_SESSION['error']="Dados nao  atualizado com sucesso";

}
header("location:../letivo.php");   
}
?>