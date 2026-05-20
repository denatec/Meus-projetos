<?php
include('config/conexao.php');
$sql="SELECT * FROM estudante ";
$res=$conn->query($sql);
if ($res->num_rows >0) {
    $html= "<table border='1' width='100%' id='table' >";
    while ($row = $res->fetch_object()) {
        # code...
        $html.= "<tr align='center' ";
        $html.= "<td>".$row->matricula."</td>";
        $html.= "<td>".$row->nomea."</td>";
        $html.= "<td>".$row->graduacao."</td>";
        $html.= "<td>".$row->telefone."</td>";
        $html.= "<td>".$row->dta_nascimento."</td>";
        $html.= "<td>".$row->sexo."</td>";
        $html.= "<td>".$row->Rua."</td>";
        $html.= "<td>".$row->provincia."</td>";
        $html.= "<td>".$row->bi."</td>";
        $html.= "<td>".$row->data."</td>";
      
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