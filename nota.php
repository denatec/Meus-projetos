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

#table{
    border-collapse: collapse;
    padding: 5px;
    background: #fff;
    border-radius: 5px;
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
</style>
<div id="divheader" style="margin-left: 300px; transform: translate(0,100px);">
<form action="notas/registro.php" method="post">
    <table style="box-shadow: 0 4px 8px 0 rgba(0, 0,0,0.08);  margin-left: 250px; transform: translate(0,30px);" >
     
        <tr>
        <h3 style="color: #013f86; text-align: center;">REGISTRO DOS CURSOS</h3>
            <td>Ano </td>
            <td><select name="ano" id="">
            <option>escolha o ano lectivo</option>
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
            <td><input type="date" name="lancamento" id="" placeholder="Digite a segunda nota" required></td>
        </td>
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
            <td><button type="submit" name="submit"><i class='bx bx-check-square'></i>Registrar</button></td>
        </tr>
    </table>
   
</form>
<?php 
if (isset($_SESSION['sucess'])) {
    # code...
    echo "<br><br> <div style='background-color: green ; color: #fff; padding: 3px; border-radius: 3px;'>".$_SESSION['sucess']."</div>" ;
    unset($_SESSION['sucess']);
}
if (isset($_SESSION['error'])){
    # code...
    echo "<br><br> <div style='background-color: red ; color: #fff; padding: 3px; border-radius: 3px;'>".$_SESSION['error']."</div>" ;
    unset($_SESSION['error']);
}
?>
<br>
<br>

<table border="1" width="100%" id="table" >
<button style="transform: translate(0,40px);padding: 10px;   background: #777; color: #fff; border-radius: 5px;    border: 0;cursor: pointer;width: 200px;">
 <a style="text-decoration: none; color: #fff;" href="pdfnota.php"><i class='bx bxs-edit'></i> pdf</a></button>
    <form action="pesquisar.php" method="post">
<div class="search" style="margin-left: 350px;">
            <input type="search" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" id="form-pesquisar" placeholder="search here">
        <label for="search"><button id="btn-pesquisar" type="submit" name="busca"><i class='bx bx-search'></i></button>
        </div>
        </form>
    <tr align="center" style=" background: #013f86; color: #fff;" >
        <th>codigo</th>
        <th>Ano</th>		
        <th>Data Lançamento</th>
        <th>Disciplinais</th>
        <th>Estudante</th>
        <th>acção</th>
    </tr>
    <?php 
   $sql="SELECT * FROM nota AS n INNER JOIN estudante AS e ON n.codstudys=e.matricula";
   $query=$conn->query($sql);
while($row=$query->fetch_assoc()) {
    # code...

   
    ?>
    <tr align="center">
          <td><?= $row['codigo'] ?></td>
          <td><?= $row['cod_ano'] ?></td>
         <td><?= $row['data_lancamento'] ?></td>
        <td><?= $row['coddisciplinais'] ?></td>
        <td><?= $row['nomea'] ?></td>
       
        <td align="center">
        <a style="text-decoration: none; color: #777;" href="notas/editar.php?editar=<?= $row['codigo']; ?>"><i class='bx bxs-edit'></i> Editar</a>
     <a style="text-decoration: none; color: #777;"  href="notas/deletar.php?eleminar=<?= $row['codigo']; ?>"><i class='bx bxs-delete' style="width: 10px;"></i></i><i class='bx bx-x'></i>Deletar</a>

        </td>
    </tr>
    <?php 
}
    ?>
</table>


<?php include('includes/footer.php'); ?>