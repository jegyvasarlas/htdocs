<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body class="login">
    <form action="login-validate.php" method="post">
        <h1>Bejelentkezés</h1>
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
        <input type="submit" id="submit" name="submit" value="Bejelentkezes">
        <p>Nincs fiókja? <a href="registration.php">Regisztráljon</a></p>
    </form>
</body>
</html>
