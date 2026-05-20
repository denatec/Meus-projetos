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
<link rel="stylesheet" href="css/table.css">
<style>
    #divheader{
    margin: auto;
    padding: 10px;
    border-radius: 3px;
    width: 900px;
    background: #fff;
}
input[type="number"]{
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
</style>
<div id="divheader" style="margin-left: 300px; transform: translate(0,100px);">
<form action="functions/registrosala.php" method="post">
    <table style="box-shadow: 0 4px 8px 0 rgba(0, 0,0,0.08);  margin-left: 250px; transform: translate(0,30px);" >
     
        <tr>
        <h3 style="color: #013f86; text-align: center;">REGISTRO DA SALA</h3>
            <td>Numero da sala</td>
            <td><input type="number" name="nome" id="" placeholder="Digite o numero da sala" required></td>
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
 <a style="text-decoration: none; color: #fff;" href="pdfsala.php"><i class='bx bxs-edit'></i> pdf</a></button>
    <form action="pesquisar.php" method="post">
<div class="search" style="margin-left: 350px;">
            <input type="search" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" id="form-pesquisar" placeholder="search here">
        <label for="search"><button id="btn-pesquisar" type="submit" name="busca"><i class='bx bx-search'></i></button>
        </div>
        </form>
    <tr align="center" style=" background: #013f86; color: #fff;" >
        <th>codigo</th>
        <th>Nome</th>
        <th>acção</th>
    </tr>
    <?php 
   $sql="SELECT * FROM sala ORDER BY nome ASC";
   $query=$conn->query($sql);
   while ($row=$query->fetch_assoc()) {
    # code...

   
    ?>
    <tr align="center">
          <td><?= $row['codigo'] ?></td>
         <td><?= $row['nome'] ?></td>
         <td align="center">
            <a style="text-decoration: none; color: #777;" href="functions/editsala.php?editar=<?= $row['codigo']; ?>"><i class='bx bxs-edit'></i> Editar</a>
            <a style="text-decoration: none; color: #777;"  href="functions/deletesala.php?eleminar=<?= $row['codigo']; ?>"><i class='bx bxs-delete'></i></i><i class='bx bx-x'></i>Deletar</a>
        </td>
       
    </tr>
    <?php 
}
    ?>
</table>
<?php include('includes/footer.php'); ?>