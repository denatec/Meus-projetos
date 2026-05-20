<?php 
include('../config/conexao.php'); 
if (isset($_POST['submit'])) {
    # code...
    $username=$_POST['username'];
    $password=$_POST['password'];
    $gmail=$_POST['gmail'];
    $sql="SELECT * FROM login WHERE username='$username' AND password='$password'";
    $query=$conn->query($sql);
 if($query->num_rows>0){
    $_SESSION['error']="ja existe um cadastro com esses registro ";

}else{
    $sql="INSERT INTO login(gmail,password,username)VALUES('$gmail',' $password','$username')";

    if($conn->query($sql)){
   
   $_SESSION['usuario']=$username;
   }else{
   $_SESSION['error']="Dados nao  inseridos com sucesso";
   }   


}   
}
header("location:../dasboard.php")
?>