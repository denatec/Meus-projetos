<?php 
include('../config/conexao.php');

$codigo=$_GET['editar'];
$sql="SELECT * FROM nota WHERE codigo='$codigo'";
  $query=$conn->query($sql);
  $row=$query->fetch_assoc();

?>
<style>
    input[type="text"],select{
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
    <table style="box-shadow: 0 4px 8px 0 rgba(0, 0,0,0.08);  margin-left: 500px; transform: translate(0,30px);" >
    <tr>
          
          <td>codigo</td>
          <td><input type="text" value="<?= $row['codigo'] ?>" name="codigo" id="" required readonly></td>
      </tr>
    <td>Ano</td>
    <td><select name="ano" id="">
            <option>escolha o estudante</option>
            <?php
            $sql="SELECT * FROM ano_lectivo";
            $res=$conn->query($sql);
            while ($row = $res->fetch_object()) {
                # code...
                print" <option value='".$row->codigo."'>";
                print $row->data_inicio."</option>";
            }
        ?>       
            </select>
            </td>
        </tr>

        <tr>
            <td>Data Lançamento</td>
            <td><input type="text" name="P2" id="" value="<?= $row['data_lancamento'] ?>" placeholder="Digite o nome" required></td>>
        </td>
        </tr>
        </tr>

        <tr>
            <td>Disciplina</td>
            <td><select name="disciplina" id="">
            <option>escolha a disciplina</option>
            <?php
            $sql="SELECT * FROM disciplina";
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
            <td>ESTUDANTE</td>
            <td><select name="estudante" id="">
            <option>escolha o estudante</option>
            <?php
            $sql="SELECT * FROM estudante";
            $res=$conn->query($sql);
            while ($row = $res->fetch_object()) {
                # code...
                print" <option value='".$row->matricula."'>";
                print $row->nome."</option>";
            }
        ?>       
            </select>
        </td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="submit">Atualizar</button></td>
        </tr>
    </table>
   
</form>