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
    background: #fff;
    
}
tr td{
padding: 15px;
color: #777;
font-weight: 900;
}
tr button[type="submit"]{
    padding: 10px;
    background: #013f86;
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
</style>
<div id="divheader" style="margin-left: 300px; transform: translate(0,100px);">
<form action="functions/registromatricula.php" method="post">
<table style="box-shadow: 0 4px 8px 0 rgba(0, 0,0,0.08);  margin-left: 250px; transform: translate(0,30px);">
        
        <tr>
          <h3 style="color: #013f86; text-align: center;">REGISTRO DE Matricula</h3>
          <tr>
            <td>funcionario</td>
            <td><input type="text"  name="funcionario" id=""></td>
        </tr>
       
<tr>
            <td>Sala</td>
            <td><select name="codsala" id="">
                <option>escolha a sala</option>
            <?php
            $sql="SELECT * FROM sala ";
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
            <td>Periodo</td>
            <td>
                <select name="periodo" id="">
                    <option value="">seleciona o periodo</option>
                    <option value="">Manhã</option>
                    <option value="">Tarde</option>
                    <option value="">Noite</option>
                </select>
            </td>
           

  

        <tr>
            <td>Turma</td>
            <td><select name="turma" id="">
            <option>escolha a turma</option>
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
        </tr>
        
        
        <tr>
            <td>curso</td>
            <td><select name="curso" id="">
            <option>escolha o curso</option>
            <?php
            $sql="SELECT * FROM curso";
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
            <td><select name="codano" id="">
            <option>escolha o Ano Lectivo</option>
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
            <td>Disciplina</td>
            <td><select name="coddisciplina" id="">
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
            <td>Estudante</td>
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
<table   id="table" style="box-shadow: 0 4px 8px 0 rgba(0, 0,0,0.08); width=1600px; ">
<button style="transform: translate(0,40px);padding: 10px;   background: #777; color: #fff; border-radius: 5px;    border: 0;cursor: pointer;width: 200px;">
 <a style="text-decoration: none; color: #fff;" href="pdfmatricula.php"><i class='bx bxs-edit'></i> pdf</a></button>
    <form action="pesquisar.php" method="post">
<div class="search" style="margin-left: 250px;">
            <input type="search" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" id="form-pesquisar" placeholder="search here">
        <label for="search"><button id="btn-pesquisar" type="submit" name="busca"><i class='bx bx-search'></i></button>
        </div>
        </form>
    <tr  style=" background:#013f86; color: #fff;" >
        <th>#</th>
        <th>Funcionario</th>
        <th>codsala</th>
        <th>Periodo</th>
        <th>Turma</th>
        <th>Curso</th>
        <th>Ano Lectivo</th>
        <th>Disciplina</th>
        <th>Estudante</th>
        <th>Ano Academico</th>
        <th>accao</th>
    </tr>
    <?php 
   $sql="SELECT * FROM matricula AS M INNER JOIN turma AS T ON M.codcurso=T.codigo ";
   $query=$conn->query($sql);
   while ($row=$query->fetch_assoc()) {
    # code...

   
    ?>
    <tr  style="box-shadow: 0 4px 8px 0 rgba(0, 0,0,0.08); translate(0,30px);">
        <td><?= $row['codigo'] ?></td>
        <td><?= $row['funcionario'] ?></td>
        <td><?= $row['codsala'] ?></td>
        <td><?= $row['periodo'] ?></td>
        <td><?= $row['nome'] ?></td>
        <td><?= $row['nome'] ?></td>
        <td><?= $row['ano_academico'] ?></td>
        <td><?= $row['coddisciplinas'] ?></td>
        <td><?= $row['codestudante'] ?></td>
         <td><?= $row['codano'] ?></td>
        <td>
        <a style="text-decoration: none; color: #777;" href="functions/editmatricula.php?editar=<?= $row['codigo']; ?>"><i class='bx bxs-edit'></i> Editar</a>
     <a style="text-decoration: none; color: #777;"  href="functions/deletematricula.php?eleminar=<?= $row['codigo']; ?>"><i class='bx bxs-delete' style="width: 10px;"></i></i><i class='bx bx-x'></i>Deletar</a>

        </td>
    </tr>
    <?php 
}
    ?>
</table>
</div>
<?php include('includes/footer.php'); ?>