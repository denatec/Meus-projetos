<?php 
include('config/conexao.php'); 
if (isset($_GET['submit'])) {
    # code...
    $gmail=$_GET['gmail'];
    $password=$_GET['password'];
    
    $sql="SELECT * FROM login WHERE gmail='$gmail' AND password='$password'";
    $query=$conn->query($sql);

    if($conn->query($sql)){
   
   $_SESSION['sucess']="Dados inseridos com sucesso";
   }else{
   $_SESSION['error']="Dados nao  inseridos com sucesso";
   }   


}   

header("location:../dasboard.php")
?>