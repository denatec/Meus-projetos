<?php  include('config/conexao.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css"/>
    <title>Document</title>
</head>

<body>

<div class="container">

<div class="box form-box">
    <header>Login</header>
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
<form action="login/login.php" method="post">
    <div class="field input">
    <label for="username">Gmail</label>
    <input type="email" name="gamil" placeholder="Digite o teu gmail" id="" required>
    </div>
    <div class="field input">
    <label for="Password">Password</label>
    <input type="password" name="password" placeholder="Digite a tua password" id="" required>
    </div>
    <div class="field ">

    <input type="submit" class="btn" name="submit" value="LOGIN" id="" required>
    </div>
    
</form>
</div>
</div>
</div>
</body>
</html>