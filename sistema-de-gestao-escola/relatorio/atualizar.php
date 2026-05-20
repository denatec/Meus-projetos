<?php 
include('../config/conexao.php'); 
if (isset($_POST['submit'])) {
    # code...
    $inicio=$_POST['inicio'];
    $fim=$_POST['fim'];
    $ano=$_POST['ano'];
    $ano_lectivo=$_POST['ano_lectivo'];
  $sql="UPDATE ano_lectivo SET data_inicio='$inicio',fim='$fim',ano='$ano' WHERE codigo='$codigo'";

 if($conn->query($sql)){

$_SESSION['sucess']="Dados atualizado com sucesso";
}else{
$_SESSION['error']="Dados nao  atualizado com sucesso";

}
header("location:../lectivo.php");   
}
?>