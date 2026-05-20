<?php 
include('../config/conexao.php'); 
if (isset($_POST['submit'])) {
    # code...
    
    $nome=$_POST['nome'];
    $curso=$_POST['curso'];
    $Nif=$_POST['nif'];
    $graduacao=$_POST['graduacao'];
    $telefone=$_POST['telefone'];
    $nascimento=$_POST['nascimento'];
    $sexo=$_POST['sexo'];
    $rua=$_POST['rua'];
    $cidade=$_POST['cidade'];
    $disciplina=$_POST['disciplina'];
    $provincia=$_POST['provincia'];
    $bi=$_POST['bi'];
    $sql="INSERT INTO 
    estudante(nomea,cursocod,nif,graduacao,telefone,dta_nascimento,sexo,Rua,provincia,bi)
       VALUES('$nome','$curso',' $Nif','$graduacao','$telefone','$nascimento','$sexo',' $rua','$provincia','$bi')";

 if($conn->query($sql)){

$_SESSION['sucesss']="Dados inseridos com sucesso";
}else{
$_SESSION['error']=" nao  foi possivel atualizar inserir";

}   
}
header("location:../estudante.php")
?>