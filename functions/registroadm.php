<?php 
include('../config/conexao.php'); 
if (isset($_POST['submit'])) {
    # code...
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="INSERT INTO estudante(username,password)
    VALUES('$username','$password')";
 $res=$conn->query($sql);
 if($res==true){

$_SESSION['sucesss']="Dados inseridos com sucesso";
}else{
$_SESSION['error']="Dados nao  inseridos com sucesso";

}   
}
header("location:../estudante.php")
?>