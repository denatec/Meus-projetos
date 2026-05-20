<?php
include('config/conexao.php');
$sql="SELECT * FROM matricula ";
$res=$conn->query($sql);
if ($res->num_rows >0) {
    $html= "<table border='1' width='100%' id='table' >";
    while ($row = $res->fetch_object()) {
        # code...
        $html.= "<tr align='center' ";
        $html.= "<td>".$row->codigo."</td>";
        $html.= "<td>".$row->funcionario."</td>";
        $html.= "<td>".$row->codsala."</td>";
        $html.= "<td>".$row->pariodo."</td>";
        $html.= "<td>".$row->nome."</td>";
        $html.= "<td>".$row->nome."</td>";
        $html.= "<td>".$row->ano_academico."</td>";
        $html.= "<td>".$row->coddisciplinas."</td>";
        $html.= "<td>".$row->codestudante."</td>";
        $html.= "<td>".$row->codano."</td>";
      
    }
    $html.= "</table>";
} else {
    # code...
    $html.= "Nenhum dados na base de dados";
}

use Dompdf\Dompdf;
require_once 'dompdf/autoload.inc.php';
$dompdf=new Dompdf();
$dompdf->loadHtml($html);
$dompdf->set_option('defaultfont','sans');
$dompdf->setpaper('A4','portrait');
$dompdf->render();
$dompdf->stream();

?>