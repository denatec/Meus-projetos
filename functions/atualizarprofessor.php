<?php 
include('../config/conexao.php'); 
if (isset($_POST['submit'])) {
    # code...
    $matricula=$_POST['matricula'];
    $nome=$_POST['nome'];
    $endereco=$_POST['endereco'];
    $sexo=$_POST['sexo'];
    $Departamento=$_POST['departamento'];
    $data_emissao=$_POST['emissao'];
    $documento_pessoais=$_POST['pessoais'];
    $nome_dependente=$_POST['dependente'];
    $data_nascimento=$_POST['nascimento'];
    $telefone=$_POST['telefone'];
    $codcurso=$_POST['curso'];
    $outros=$_POST['outro'];
    $trabalho_publicado=$_POST['publicado'];
    $curso_extensao=$_POST['extensao'];
    $especealidade=$_POST['especealidade'];
    $licenciatura=$_POST['licenciatura'];
    $codrelatorio=$_POST['relatorio'];
    $codhistorico_escolar=$_POST['historico'];
    $sql="UPDATE disciplina SET nomep='$nome',endereco='$endereco',sexo='$sexo',coddepartamento='$Departamento',	data_admissao='$data_emissao',documentos_pessoais='$documento_pessoais'
    ,nome_dependente='$nome_dependente',data_nascimento_dependente='$data_nascimento',codcurso='$codcurso',telefone='$telefone',outros='$outros',trabalho_publicado='$trabalho_publicado',curso_extensao='$curso_extensao'
    ,especealidade='$especealidade',licenciatura='$licenciatura',codrelatorio='$codrelatorio',codhistorico_escolar ='$codhistorico_escolar' WHERE matricula='$matricula'";

 if($conn->query($sql)){

$_SESSION['sucess']="Dados atualizado com sucesso";
}else{
$_SESSION['error']="Dados nao  atualizado com sucesso";

}
header("location:../professor.php");   
}
?>