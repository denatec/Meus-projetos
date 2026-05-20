<?php 
include('../config/conexao.php');

$codigo=$_GET['editar'];
$sql="SELECT * FROM matricula WHERE codigo='$codigo'";
  $query=$conn->query($sql);
  $row=$query->fetch_assoc();

?>
<style>
    input[type="text"], input[type="datetime-local"],select{
    width: 500px;
    width: 260px;
    height: 40px;
    padding: 0 40px;
    font-size: 16px;
    outline: none;
    border: none;
    border-radius: 10px;
    background: rgb(182, 181, 181);
    display: inline-flex;
   
}  
tr button[type="submit"]{
    padding: 10px;
    background: rgba(106,176,76,1.0);
    color: #fff;
    border-radius: 5px;
    border: 0;
    cursor: pointer;
    width: 200px;
    margin-left: 20px;
   
}
</style>
<form action="atualizar.php" method="post">
    <table style="box-shadow: 0 4px 8px 0 rgba(0, 0,0,0.08);  margin-left: 250px; transform: translate(0,30px);">
    
        <tr>
              
  
        <h3 style="color: #013f86; text-align: center;">atualizar Dos Anos Lectivos</h3>
          <td>codigo</td>
          <td><input type="text" value="<?= $row['codigo'] ?>" name="codigo" id="" required readonly></td>
      </tr>
      <tr>
      <td>Data Inicio</td>
            <td><input type="text" value="<?= $row['data_inicio'] ?>" name="inicio" id="" placeholder="Digite a data inicio" required readonly></td>
        </tr>

        <tr>
            <td>Data Fim</td>
            <td><input type="datetime-local" value="<?= $row['data_fim'] ?>" name="fim" id="" placeholder="Digite a segunda nota" required ></td>
        </td>
        </tr>
        
        <tr>
            <td>Ano</td>
            <td><input type="text" value="<?= $row['ano'] ?>" name="ano" id="" placeholder="Digite o ano" required readonly></td>
        </td>
        </tr>

      
            <td></td>
            <td><button type="submit" name="submit">Registrar</button></td>
        </tr>
    </table>