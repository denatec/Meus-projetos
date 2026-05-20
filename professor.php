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
    input[type="text"],input[type="tel"], input[type="datetime-local"], input[type="date"],select{
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
</style>
<div id="divheader" style="margin-left: 300px; transform: translate(0,100px);">
<form action="functions/registroprofessor.php" method="post">
    <table style="box-shadow: 0 4px 8px 0 rgba(0, 0,0,0.08);  margin-left: 250px; transform: translate(0,30px);">
        
        <tr>
        <h3 style="color: #013f86; text-align: center;">REGISTRO DE Professores</h3>
          
        </tr>
        <tr>
            <td>Nome</td>
            <td><input type="text" name="nome" id="" required></td>
        </tr>
       

        <tr>
            <td>Sexo</td>
            <td>
                <select name="sexo" id="">
                <option value="">Seleciona o sexo</option>
                    <option value="">Masculino</option>
                    <option value="">Femenino</option>
                </select>
            </td>
        </tr>
        <tr>
        <tr>
            <td>Departamento</td>
            <td><select name="departamento" id="">
            <option>escolha o Departamento</option>
            <?php
            $sql="SELECT * FROM departamento";
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
            <td>Data admissão</td>
            <td><input type="date" name="emissao" id=""></td>
        </tr>
        
        <tr>
            <td>Bi</td>
            <td><input type="text" name="nif" id=""></td>
        </tr>
        <tr>
            <td>Nif</td>
            <td><input type="text" name="bi" id=""></td>
        </tr>
        <tr>
            <td>Nome Dependente</td>
            <td><input type="text" name="dependente" id="" required></td>
        </tr>
        <tr>
            <td>Data nascimento</td>
            <td><input type="date" name="nascimento" id="" required></td>
        </tr>
      
     <tr>
        
        <td>telefone</td>
        <td><input type="tel" name="telefone" id="" required></td>
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
            <td>outro</td>
            <td><input type="text" name="outro" id="" required></td>
        </tr>

        <tr>
            <td>Trabalho Publicado</td>
            <td><input type="text" name="publicado" id="" required></td>
        </tr>
        <tr>
            <td>Curso Extensao</td>
            <td><input type="text" name="extensao" id="" required></td>
        </tr>
        <tr>
            <td>Especialidade</td>
            <td><input type="text" name="especealidade" id="" required></td>
        </tr>
        <tr>
            <td>Lincenciatura</td>
            <td>
                <select name="lincenciatura" id="">
                <option value="">Seleciona lincenciatura</option>
                    <option value="">Sim</option>
                    <option value="">Nao</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>rua</td>
            <td><input type="text" name="rua" id="" required></td>
        </tr>
        <tr>
            <td>cidade</td>
            <td><input type="text" name="cidade" id="" required></td>
        </tr>
        <tr>
            <td>bairro</td>
            <td><input type="text" name="bairro" id="" required></td>
        </tr>
            <td></td>
            <td><button type="submit" name="submit">Registrar</button></td>
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
    echo " <div style='background-color: green ; color: #fff; padding: 3px; border-radius: 3px;'>".$_SESSION['error']."</div>" ;
    unset($_SESSION['error']);
}
?>
<table border="1" width="100%" id="table"  >
<button style="transform: translate(0,40px);padding: 10px;   background: #777; color: #fff; border-radius: 5px;    border: 0;cursor: pointer;width: 200px;">
 <a style="text-decoration: none; color: #fff;" href="pdfprofessor.php"><i class='bx bxs-edit'></i> pdf</a></button>
    <form action="pesquisar.php" method="post">
<div class="search" style="margin-left: 450px;">
            <input type="search" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" id="form-pesquisar" placeholder="search here">
        <label for="search"><button id="btn-pesquisar" type="submit" name="busca"><i class='bx bx-search'></i></button>
        </div>
        </form>
    <tr align="right" style=" background: #013f86; color: #fff;" >
        <th>Matricula</th>
        <th>Nome</th>
        <th>sexo</th>
        <th>Departamento</th>
        <th>emissao</th>
        <th> nascimento</th>
        <th>Telefone</th>
        <th>curso</th>
        
      
      
        <th>acao</th>
    </tr>
    <?php 
   $sql="SELECT * FROM professor  AS p INNER JOIN curso AS c ON p.codcurso=c.codigo";
   $query=$conn->query($sql);
   while ($row=$query->fetch_assoc()) {
    # code...

   
    ?>
    <tr>
        <td><?= $row['matricula'] ?></td>
        <td><?= $row['nomep'] ?></td>
        <td><?= $row['sexo'] ?></td>
        <td><?= $row['cod_departamento'] ?></td>
        <td><?= $row['data_admissao'] ?></td>
        <td><?= $row['data_nascimento_dependente'] ?></td>
        <td><?= $row['telefone'] ?></td>
        <td><?= $row['nome'] ?></td>
        <td align="center">
        <a style="text-decoration: none; color: #777;" href="functions/editprofessor.php?editar=<?= $row['matricula']; ?>"><i class='bx bxs-edit'></i> Editar</a>
        <a style="text-decoration: none; color: #777;"  href="functions/deleteprofessor.php?eliminar=<?= $row['matricula']; ?>"><i class='bx bxs-delete' style="width: 10px;"></i></i><i class='bx bx-x'></i>Deletar</a>
        </td>
    </tr>
    <?php 
}
    ?>
</table>
</div>
<?php include('includes/footer.php'); ?>
