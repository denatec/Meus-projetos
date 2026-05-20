<?php
include('..config/conexao.php');
if (isset($_POST['search'])) {
    # code...
    $searchq=$_POST['search'];
    $searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
    $query="SELECT * from estudante WHERE nome LIKE '%$searchq%'" or die("nao foi possivel pesquisar");
$count=mysqli_num_rows($conn,$query);
if ($count==0) {
    # code...
    $output='nao foi possivel pesquisar';
} else {
    # code...
  
}

} else {
    # code...
}

?>