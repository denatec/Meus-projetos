<?php
include('../config/conexao.php');  


use Dompdf\Dompdf;
$query="SELECT  `nome`, `Naula` FROM `disciplina`";
$result=$conn->prepare($query);
$dompdf=new Dompdf(['enable_remote'=>true]);
$result->execute();
$dados="<!DOCTYPE html>";
$dados.="<html lang='pt-br'>";
$dados.="<head>";
$dados.="<meta charset='UTF-8'>";
$dados.="<meta name='viewport' content='0width=device-width, initial-scale=1.0'>";
$dados.=" <title>Gerador de pdp das disciplinas</title>";
$dados.="</head>";
$dados.="<body>";
$dados.="<h1>PDF</h1>";

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    # code...
   //  var_dump($row);
    extract($row);
    $dados.="CODIGO:   $codigo <br>";
    $dados.="Nome:   $nome <br>";
    $dados.= "Numero de aulas:   $Naula <br>";
    $dados.="<hr>";
}
$dados .="<body";

$dompdf->loadHtml($dados);
$dompdf->setpaper('A4','landscape');
$dompdf->setpaper('A4','portrait');
$dompdf->render();
$dompdf->stream();

?>