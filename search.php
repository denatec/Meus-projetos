<?php 
require_once "config/conexao.php";
$return='';
if (isset($_POST['query'])) {
    # code...
    $search=mysqli_real_escape_string($conn,$_POST['query']);
    $query="SELECT * FROM disciplina WHERE id LIKE '".$search."' OR nome LIKE '".$search."' OR Naula LIKE '".$search."' ";
} else {
    # code...
    $query="SELECT * FROM disciplina";
}
$result=mysqli_query($conn,$query);
if (mysqli_num_rows($result) >0) {
    # code...
$return .='
<table border="1" width="100%" id="table" >
    <tr align="center" style=" background: #013f86; color: #fff;" >
        <th>codigo</th>
        <th>Nome</th>
        <th>Aula</th>
        <th>acção</th>
        <th>check all</th>
    </tr>;
';
while ($row =mysqli_fetch_array($result)) {
    # code...
    $return .='
    <tr>  
    <td>'.$row['codigo'].'</td>
    <td>'.$row['nome'].'</td>
    <td>'.$row['Naula'].'</td>
    <td>
    <a href="functions/editdisciplina.php?editar='.$row['codigo'].'">edit</a>
    <a href="functions/deletedisciplina.php?eleminar='.$row['codigo'].'">delete</a>
    </td>
    <td> <input type="checkbox" name="check[]" value="'.$row['codigo'].'">check all</td>
    </tr>
    ';
}
echo $return;
} else {
    # code...
    echo 'Não foi possivel encontrar a tua pesquisa';
}

?>