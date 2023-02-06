<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body class="register">
<form action="registration-validate.php" method="post">
    <h1>Regisztráció</h1>
    <label for="username">Felhasználónév:</label>
    <br>
    <input type="text" name="username" id="username">
    <br>
    <br>
    <label for="password">Jelszó:</label>
    <br>
    <input type="password" name="password" id="password">
    <br>
    <br>
    <label for="password2">Jelszó megerősítése:</label>
    <br>
    <input type="password" name="password2" id="password2">
    <br>
    <br>
    <input type="submit" id="submit" name="submit" value="Regisztráció">
    <p>Már van fiókja? <a href="login.php">Jelentkezzen be</a></p>
</form>
</body>
</html>
