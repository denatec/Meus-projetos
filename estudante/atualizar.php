<?php 
include('../config/conexao.php'); 
if (isset($_POST['submit'])) {
    # code...
    $codigo=$_POST['codigo'];
    $nome=$_POST['nome'];
    $curso=$_POST['curso'];
    $Nif=$_POST['nif'];
    $graduacao=$_POST['graduacao'];
    $telefone=$_POST['telefone'];
    $nascimento=$_POST['nascimento'];
    $sexo=$_POST['sexo'];
    $rua=$_POST['rua'];
    $provincia=$_POST['provincia'];
    $bi=$_POST['bi'];
    $data=$_POST['data'];
    $sql=" UPDATE `estudante` SET `nomea`='$nome',`cursocod`='$curso',`nif`='$Nif',`graduacao`='$graduacao',
`telefone`='$telefone',`dta_nascimento`='$nascimento',`sexo`='$sexo',`Rua`='$rua',`provincia`='$provincia'
   ,`bi`='$bi' WHERE `matricula`='$codigo'";

 if($conn->query($sql)){

$_SESSION['sucess']="Dados atualizado com sucesso";
}else{
$_SESSION['error']="Dados nao  atualizado";

}
header("location:../estudante.php");   
}
?>