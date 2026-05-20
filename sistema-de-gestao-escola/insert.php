<?php 
include('config/conexao.php'); 
if (isset($_POST['submit'])) {
    # code...
    $nome=$_POST['nome'];
    $Naula=$_POST['Naula'];
    $sql="SELECT * FROM disciplina WHERE nome='$nome' AND Naula='$Naula'";
    $query=$conn->query($sql);
 if($query->num_rows>0){
    $_SESSION['error']="ja existe um cadastro com esses registro ";

}else{
    $sql="INSERT INTO disciplina(nome,Naula)VALUES('$nome',' $Naula')";

    if($conn->query($sql)){
   
   $_SESSION['sucess']="Dados inseridos com sucesso";
   }else{
   $_SESSION['error']="Dados nao  inseridos com sucesso";
   }   


}   
}
header("location:disciplina.php")
?>