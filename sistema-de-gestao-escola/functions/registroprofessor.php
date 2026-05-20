<?php 
include('../config/conexao.php'); 
if (isset($_POST['submit'])) {
    # code...
   # $matricula=$_POST['nome'];
    $nome=$_POST['nome'];
    $sexo=$_POST['sexo'];
    $Departamento=$_POST['departamento'];
    $data_emissao=$_POST['emissao'];
    $bi=$_POST['bi'];
    $nif=$_POST['nif'];
    $nome_dependente=$_POST['dependente'];
    $data_nascimento=$_POST['nascimento'];
    $telefone=$_POST['telefone'];
    $codcurso=$_POST['curso'];
    $outros=$_POST['outro'];
    $trabalho_publicado=$_POST['publicado'];
    $curso_extensao=$_POST['extensao'];
    $especealidade=$_POST['especealidade'];
    $licenciatura=$_POST['licenciatura'];
    $rua=$_POST['rua'];
    $cidade=$_POST['cidade'];
    $rua=$_POST['bairro'];
      $sql="INSERT INTO
     `professor`( `nomep`, `sexo`, `cod_departamento`,`data_admissao`, `bi`, `nif`, `nome_dependente`, `data_nascimento_dependente`, `telefone`, `codcurso`, `outros`, `trabalho_publicado`, `curso_extensao`, `especealidade`, `licenciatura`, `rua`, `cidade`, `bairro`)
          VALUES('$nome','$sexo',' $Departamento',' $data_emissao',' $bi',' $nif',' $nome_dependente',' $data_nascimento',' $telefone',' $codcurso',' $outros',' $trabalho_publicado',' $curso_extensao',' $especealidade',' $licenciatura',' $rua','$cidade',' $bairro')";

 if($conn->query($sql)){

$_SESSION['sucess']="Dados inseridos com sucesso";
}else{
$_SESSION['error']="Dados nao  inseridos com sucesso";

}   
}
header("location:../professor.php")
?>