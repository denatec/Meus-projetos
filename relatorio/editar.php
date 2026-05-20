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
        
  
        <h3 style="color: #013f86; text-align: center;">REGISTRO Dos Relatorios</h3>
        <tr>
          
          <td>codigo</td>
          <td><input type="text" value="<?= $row['codigo'] ?>" name="codigo" id="" required readonly></td>
      </tr>
      <tr>
            <td>Notas</td>
            <td><select name="nota" id="">
            <option>escolha a turma</option>
            <?php
            $sql="SELECT * FROM nota";
            $res=$conn->query($sql);
            while ($row = $res->fetch_object()) {
                # code...
                print" <option value='".$row->codigo."'>";
                print $row->nome."</option>";
            }
        ?>       
            </select>
        </td>
        </tr>

          <tr>
            <td>Semestre</td>
            <td><input type="datetime-local" value="<?= $row['semestre'] ?>" name="semestre" id=""></td>
        </tr>

        <tr>
            <td>Ano Lectivo</td>
            <td><select name=" ano_lectivo" id="">
            <option>escolha o Ano Lectivo</option>
            <?php
            $sql="SELECT * FROM ano_lectivo";
            $res=$conn->query($sql);
            while ($row = $res->fetch_object()) {
                # code...
                print" <option value='".$row->codigo."'>";
                print $row->nome."</option>";
            }
        ?>       
            </select>
        </td>
        </tr>
        <tr>
            <td>Turma</td>
            <td><select name="codturma" id="">
            <option>escolha a Turma</option>
            <?php
            $sql="SELECT * FROM turma";
            $res=$conn->query($sql);
            while ($row = $res->fetch_object()) {
                # code...
                print" <option value='".$row->codigo."'>";
                print $row->nome."</option>";
            }
        ?>       
            </select>
        </td>
        </tr>
         <tr>
            <td>Data Lançamento</td>
            <td><input type="datetime-local" <?= $row['data_lancameto'] ?> name="lancamento" id=""></td>
        </tr>
        

            <td></td>
            <td><button type="submit" name="submit">Registrar</button></td>
        </tr>
    </table>