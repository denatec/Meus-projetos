<?php  include('../config/conexao.php');
if (empty($_POST) or (empty($_POST["username"])or(empty($_POST["password"])))) {
    # code...
    print" <script>location.href='../index.php'</script>";
             
}
$nome=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM login WHERE username='$nome' AND password='$password'";

$res=$conn->$query($sql) or die($conn->error);

$row=$res->fetch_object();

$qtd=$res->num_rows;

if ($qtd > 0) {
    # code...
    $_SESSION["username"]=$nome;
    $_SESSION["gmail"]=$row->gmail;
    print" <script>location.href='../dasboard.php'</script>";
} else {
    # code...
    print" <script>alert('Usuario e a password incorretas')</script>";
    print" <script>location.href='../index.php'</script>";
}


?>