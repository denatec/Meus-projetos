<?php include('includes/header.php'); 
include('config/conexao.php');
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
input[type="text"]{
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
<form action="login/register.php" method="post">
    <table>
        <h3>REGISTRO DE ADM</h3>
        
        <tr>
            <td>Gmail</td>
            <td><input type="text" name="gmail" id=""></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="password" id=""></td>
        </tr>
        
        <tr>
            <td>Usuario</td>
            <td><input type="text" name="nusername" id=""></td>
        </tr>
       
        <tr>
            <td></td>
            <td><button type="submit" name="submit"><i class='bx bx-check-square'></i>Registrar</button></td>
        </tr>
    </table>
   
</form>
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
<table style="background-color:#013f86; color:#fff;" width="100%">
    <tr>
        <th>codigo</th>
        <th>gmail</th>
        <th>Password</th>
        <th>Usuario</th>
        <th>data</th>
        <th>Accao</th>
    </tr>
    <?php 
   $sql="SELECT * FROM login ORDER BY username ASC";
   $query=$conn->query($sql);
   while ($row=$query->fetch_assoc()) {
    # code...

   
    ?>
    <tybody>
    <tr style="background-color:#ccc;">
        <td><?= $row['codigo'] ?></td>
        <td><?= $row['gmail'] ?></td>
        <td><?= $row['password'] ?></td>
        <td><?= $row['username'] ?></td>
        <td><?= $row['data'] ?></td>
        <td align="center">
            <a style="text-decoration: none; color: #777;" href="login/editar.php?editar=<?= $row['codigo']; ?>"><i class='bx bxs-edit'></i> Editar</a>
            <a style="text-decoration: none; color: #777;"  href="login/deletar.php?eleminar=<?= $row['codigo']; ?>"><i class='bx bxs-delete'></i></i><i class='bx bx-x'></i>Deletar</a>
        </td>
    </tr>
    </tybody>
    <?php 
}
    ?>
</table>
</div>
<?php include('includes/footer.php'); ?>