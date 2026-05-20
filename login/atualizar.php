<?php 
include('../config/conexao.php'); 
if (isset($_POST['submit'])) {
    # code...
    $codigo=$_POST['codigo'];
    $gmail=$_POST['gmail'];
    $password=$_POST['password'];
    $username=$_POST['username'];
    $sql="UPDATE login SET gmail='$gmail',password='$password',PT3='$P3',username='$username' WHERE codigo='$codigo'";

 if($conn->query($sql)){

$_SESSION['sucess']="Dados inseridos com sucesso";
}else{
$_SESSION['error']="Dados nao  inseridos com sucesso";

}   
}
header("location:../adm.php")
?>