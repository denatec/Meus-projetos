<?php include('includes/header.php');
include('config/conexao.php');
/*
if (isset($_SESSION['auth'])) {
    # code...

    $_SESSION['sucess']="Login efectuado com sucesso";
    header('Location:dasboard.php');
   

    exit();
  }
  header('Location:index.php');
  */

?>

<?php include('includes/navbar.php'); ?>
<style>
    #divheader{
    margin: auto;
    padding: 10px;
    border-radius: 3px;
    width: 900px;
    background: #fff;
}
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
#table{
    border-collapse: collapse;
    padding: 5px;
    background: #fff;
    
}
tr td{
padding: 5px;
color: #777;
font-weight: 900;
}
tr button[type="submit"]{
    padding: 10px;
    background: rgba(106,176,76,1.0);
    color: #fff;
    border-radius: 5px;
    border: 0;
    cursor: pointer;
    width: 200px;
   
}
#delete{
    padding: 10px;
    background: #d63031;
    color:#fff;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    width: 100%;
}
tr select{
    width: 250px;
}
thead{
    background: #013f86;
    text-align: left;
    color: #fff;

}
tbody tr:nth-child(even){
    background: #f9fafc;
}
</style>
<div id="divheader" style="margin-left: 300px; transform: translate(0,100px);">
<form action="relatorio/registro.php" method="post">
<table style="box-shadow: 0 4px 8px 0 rgba(0, 0,0,0.08);  margin-left: 250px; transform: translate(0,30px);">
        
        <tr>
          <h3 style="color: #013f86; text-align: center;">REGISTRO Relatorios</h3>
        <tr>
            <td>Notas</td>
            <td><select name="nota" id="">
            <option>escolha a nota</option>
            <?php
            $sql="SELECT * FROM nota";
            $res=$conn->query($sql);
            while ($row = $res->fetch_object()) {
                # code...
                print" <option value='".$row->codigo."'>";
                print $row->codigo."</option>";
            }
        ?>       
            </select>
        </td>
        </tr>

          <tr>
            <td>Semestre</td>
            <td><input type="datetime-local" name="semestre" id=""></td>
        </tr>
        
        <tr>
            <td>Discplina</td>
            <td><select name=" coddisciplina" id="">
            <option>escolha o Ano Lectivo</option>
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
            <td><input type="datetime-local" name="lancamento" id=""></td>
        </tr>
        
    <tr>
            <td></td>
            <td><button type="submit" name="submit"><i class='bx bx-check-square'></i>Registrar</button></td>
        </tr>
    </table>
   
   
</form>
<br><br><br><br>
<?php 
if (isset($_SESSION['sucesso'])) {
    # code...
    echo " <div style='background-color: green ; color: #fff; padding: 3px; border-radius: 3px;'>".$_SESSION['sucesso']."</div>" ;
    unset($_SESSION['sucesso']);
}
if (isset($_SESSION['error'])){
    # code...
    echo " <div style='background-color: red ; color: #fff; padding: 3px; border-radius: 3px;'>".$_SESSION['error']."</div>" ;
    unset($_SESSION['error']);
}
?>
<table  width="100%" id="table" >
    <tr align="center" style=" background: #013f86; color: #fff;" >
    <thead border="1">
        <th>Codigo</th>
        <th>Notas</th>
        <th>Semestre</th>
        <th>Disciplina</th>
        <th>Ano Lectivo</th>
        <th>Turma</th>
        <th>Data de Lançamento</th>
        <th>accao</th>
        </tr>
        </thead>
    <?php 
   $sql="SELECT * FROM releatorio";
   $query=$conn->query($sql);
   while ($row=$query->fetch_assoc()) {
    # code...

   
    ?>
    <tr>
    <tbody>


        <td><?= $row['codigo'] ?></td>
        <td><?= $row['notas'] ?></td>
        <td><?= $row['semestre'] ?></td>
        <td><?= $row['coddisciplina'] ?></td>
        <td><?= $row['codano_lectivo'] ?></td>
        <td><?= $row['codturma'] ?></td>
        <td><?= $row['data_lancameto'] ?></td>
        <td align="center">
            <a style="text-decoration: none; color: #777;" href="relatorio/editar.php?editar=<?= $row['codigo']; ?>"><i class='bx bxs-edit'></i> Editar</a>
            <a style="text-decoration: none; color: #777;"  href="relatorio/deletar.php?eleminar=<?= $row['codigo']; ?>"><i class='bx bxs-delete'></i></i><i class='bx bx-x'></i>Deletar</a>
        </td>
      
    </tr>
     </tbody>
    <?php 
}
    ?>
</table>
</div>
<?php include('includes/footer.php'); ?>