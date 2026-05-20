<?php include('includes/header.php');
include('config/conexao.php');
?>
<?php include('includes/navbar.php'); ?>
<style>
    input[type="text"],input[type="tel"],input[type="date"],select{
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
<form action="estudante/registro.php" method="post">
    <table style="box-shadow: 0 4px 8px 0 rgba(0, 0,0,0.08);  margin-left: 250px; transform: translate(0,30px);">
        
        <tr>
        <h3 style="color: #013f86; text-align: center;">REGISTRO DE ESTUDANTES</h3>
          
        <tr>
            <td>Nome</td>
            <td><input type="text" name="nome" id=""></td>
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
                print" <option value='".$row->nome."'>";
                print $row->nome."</option>";
            }
        ?>       
            </select>
        </td>
        </tr>
        
        <tr>
            <td>Nif</td>
            <td><input type="text" name="nif" id=""></td>
        </tr>
        <tr>
            <td>Graduacao</td>
            <td><input type="text" name="graduacao" id=""></td>
        </tr>
        <tr>
            <td>Numero</td>
            <td><input type="text" name="telefone" id=""></td>
        </tr>
        <tr>
            <td>Data nascimento</td>
            <td><input type="date" name="nascimento" id=""></td>
        </tr>
        <tr>
            <td>Sexo</td>
            <td>
                <select name="sexo" id="">
                <option value="">seleciona o sexo</option>
                    <option value="">Masculino</option>
                    <option value="">Femenino</option>
                </select>
            </td>
        </tr>

        
        <tr>
            <td>Rua</td>
            <td><input type="text" name="rua" id=""></td>
        </tr>
        <tr>
            <td>Cidade</td>
            <td><input type="text" name="cidade" id=""></td>
        </tr>
    
        <tr>
            <td>Provincia</td>
            <td><input type="text" name="provincia" id=""></td>
        </tr>
        <tr>
            <td>Bi</td>
            <td><input type="text" name="bi" id=""></td>
        </tr>

        <tr>
            <td></td>
            <td><button type="submit" name="submit"><i class='bx bx-check-square'></i> Registrar</button></td>
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
<table border="1" width="100%" id="table" >
<button style="transform: translate(0,40px);padding: 10px;   background: #777; color: #fff; border-radius: 5px;    border: 0;cursor: pointer;width: 200px;">
 <a style="text-decoration: none; color: #fff;" href="pdfestudante.php"><i class='bx bxs-edit'></i> pdf</a></button>
    <form action="pesquisar.php" method="post">
<div class="search" style="margin-left: 450px;">
            <input type="search" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" id="form-pesquisar" placeholder="search here">
        <label for="search"><button id="btn-pesquisar" type="submit" name="busca"><i class='bx bx-search'></i></button>
        </div>
        </form>
    <tr align="center" style=" background: #013f86; color: #fff;" >
        <th>Matricula</th>
        <th>Nome</th>
        <th>Curso</th>
        <th>Graduacao</th>
        <th>Telefone</th>
        <th>Data nascimento</th>
        <th>Sexo</th>
        <th>Rua</th>
        <th>Provincia</th>
        <th>Bi</th>
        <th>Data</th>
        <th>accao</th>
    </tr>
    <?php 
   $sql="SELECT * FROM estudante";
   $query=$conn->query($sql);
   while ($row=$query->fetch_assoc()) {
    # code...

   
    ?>
    <tr id="listar-usuarios">
        <td><?= $row['matricula'] ?></td>
        <td><?= $row['nomea'] ?></td>
        <td><?= $row['cursocod'] ?></td>
        <td><?= $row['graduacao'] ?></td>
        <td><?= $row['telefone'] ?></td>
        <td><?= $row['dta_nascimento'] ?></td>
        <td><?= $row['sexo'] ?></td>
        <td><?= $row['Rua'] ?></td>
        <td><?= $row['provincia'] ?></td>
        <td><?= $row['bi'] ?></td>
        <td><?= $row['data'] ?></td>
        <td>
<a style="text-decoration: none; color: #777;" href="estudante/editar.php?editar=<?= $row['matricula']; ?>"><i class='bx bxs-edit'></i> Editar</a><br>
<a style="text-decoration: none; color: #777;"  href="estudante/deletar.php?eleminar=<?= $row['matricula']; ?>"><i class='bx bxs-delete'></i>Deletar</a>

        </td>
    </tr>
    <?php 
}
    ?>
</table>
</div>
<?php include('includes/footer.php'); ?>
