<?php 
include('../config/conexao.php');

$codigo=$_GET['editar'];
$sql="SELECT * FROM professor WHERE matricula='$codigo'";
  $query=$conn->query($sql);
  $row=$query->fetch_assoc();

?>
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
<form action="atualizarprofessor.php" method="post">
    <table style="box-shadow: 0 4px 8px 0 rgba(0, 0,0,0.08);  margin-left: 250px; transform: translate(0,30px);">
        
  
        <h3 style="color: #013f86; text-align: center;">REGISTRO DE Professores</h3>
        <tr>
          
          <td>codigo</td>
          <td><input type="text" value="<?= $row['matricula'] ?>" name="matricula" id="" required readonly></td>
      </tr>
      <tr>
            <td>Nome</td>
            <td><input type="text" value="<?= $row['nome'] ?>"  name="nome" id=""></td>
        </tr>

        <tr>
            <td>Sexo</td>
            <td>
                <select name="sexo"  id="">seleciona a opcao
                    <option value="">Masculino</option>
                    <option value="">Femenino</option>
                </select>
            </td>
        </tr>
        <tr>
 
        <tr>
            <td>Data Emissao</td>
            <td><input type="date" value="<?= $row['data_admissao'] ?>" name="emissao" id=""></td>
        </tr>
          
        <tr>
            <td>Bi</td>
            <td><input type="text" value="<?= $row['bi'] ?>" name="nif" id=""></td>
        </tr>
        <tr>
            <td>Nif</td>
            <td><input type="text" value="<?= $row['nif'] ?>" name="bi" id=""></td>
        </tr>
        </tr>
        
            <td>Nome Dependente</td>
            <td><input type="text" name="dependente" value="<?= $row['nome_dependente'] ?>" id=""></td>
        </tr>
        <tr>
            <td>Data nascimento</td>
            <td><input type="date" name="nascimento" value="<?= $row['data_nascimento_dependente'] ?>" id=""></td>
        
        </tr>
    <tr>
        <td>telefone</td>
        <td><input type="tel" name="telefone" value="<?= $row['telefone'] ?>" id=""></td>
    </tr>
    <tr>
            <td>curso</td>
            <td><select name="curso"  id="">
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
            <td><input type="text" name="outro" value="<?= $row['outros'] ?>" id=""></td>
        </tr>
        
        <tr>
            <td>Departamento</td>
            <td><select  name="departamento" id="">
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
            <td>Trabalho Publicado</td>
            <td><input type="text" name="publicado" value="<?= $row['trabalho_publicado'] ?>" id=""></td>
        </tr>
        <tr>
            <td>Curso Extensao</td>
            <td><input type="text" name="extensao" value="<?= $row['curso_extensao'] ?>" id=""></td>
        </tr>
        <tr>
            <td>Especialidade</td>
            <td>
                <select name="lincenciatura" id="">
                <option value="">Seleciona lincenciatura</option>
                    <option value="">Sim</option>
                    <option value="">Nao</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Lincenciatura</td>
            <td><input type="text" name="lincenciatura" value="<?= $row['licenciatura'] ?>" id=""></td>
        </tr>

            <td></td>
            <td><button type="submit" name="submit">Registrar</button></td>
        </tr>
    </table>