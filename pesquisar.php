<?php
include('config/conexao.php');
        if (!isset($_GET['busca'])) {
           
       print "<tr>";
          print  "<td colspan='3'>Digite algo para pesquisar...</td>";
      print "</tr>";
       
        } else {
            $pesquisa = $mysqli->real_escape_string($_GET['busca']);
            $sql_code = "SELECT * 
                FROM estudante 
                WHERE nome LIKE '%$pesquisa%' 
                OR bi LIKE '%$pesquisa%'
                OR nif LIKE '%$pesquisa%'";
            $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error); 
            
            if ($sql_query->num_rows == 0) {
            
           print "<tr>";
        print   "<td colspan='3'>Nenhum resultado encontrado...</td>";
          print  "</tr>";
           
            } else {
                while($dados = $sql_query->fetch_assoc()) {
                 print "<table border='1' width='100%' id='table' >";
                print  "<tr align='center' style=' background: #013f86; color: #fff;'>";
                print  "<th>Matricula</th>";
                print  "<th>Nome</th>";
                print  "<th>Curso</th>";
                print  "<th>Graduacao</th>";
                print  "<th>Telefone</th>";
                print  "<th>Data nascimento</th>";
                print  "<th>Sexo</th>";
                print  "<th>Rua</th>";
                print  "<th>Provincia</th>";
                print  "<th>Bi</th>";
                print  "<th>Data</th>";
                print  "<th>accao</th>";
                print "</tr>";
                print "<tr>";
                print "<td>.$row->matricula.</td>";
                print "<td>.$row->nomea.</td>";
                print "<td>.$row->nome.</td>";
                print "<td>.$row->graduacao.</td>";
                print "<td>.$row->telefone.</td>";
                print "<td>.$row->dta_nascimento.</td>";
                print "<td>.$row->sexo.</td>";
                print "<td>.$row->rua.</td>";
                print "<td>.$row->provincia.</td>";
                print "<td>.$row->bi.</td>";
                print "<td>.$row->data.</td>";
                print   "<td>";
                print "<a style='text-decoration: none; color: #777;' href='estudante/editar.php?editar=.$row->matricula.'><i class='bx bxs-edit'></i> Editar</a><br>";
                print "<a style='text-decoration: none; color: #777;'  href='estudante/deletar.php?eleminar=.$row->matricula.'><i class='bx bxs-delete'></i>Deletar</a>";
                print "</td>";
                print "</tr>";
                  
                }
                print "</table>";
                }
            }
           
      
        
  
?>