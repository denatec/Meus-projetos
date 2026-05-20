
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
    <header>SING UP</header>
<form action="login/login.php" method="post">
    <div class="field input">
    <label for="username">Gmail</label>
    <input type="email" name="gmail" placeholder="Digite o teu gmail" id="" required>
    </div>
    <div class="field input">
    <label for="Password">Password</label>
    <input type="password" name="password" placeholder="Digite a tua password" id="" required>
    </div>
    <div class="field input">
        <label for="username">Usename</label>
        <input type="text" name="username" placeholder="Digite o teu user" id="" required>
        </div>
    <div class="field ">

    <input type="submit" class="btn" name="submit" value="LOGIN" id="" required>
    </div>
    <div class="links">
    ja tenho conta? <a href="index.php">Sing</a>
    </div>
</form>
</div>
</div>
</div>
</body>
</html>