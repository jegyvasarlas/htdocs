<?php
$menu = '
<nav>
    <div class="menu-item">
        <a href="index.php" class="menu-button">Kezdőlap</a>
    </div>
    <div class="menu-item">
        <a href="rendelesek.php" class="menu-button">Rendelések</a>
    </div>
    <div class="menu-item">
    <a href="ujfutar.php" class="menu-button">Új futár</a>
    </div>
    ';
if(!isset($_SESSION["user"]))
{
    $menu .= '
<div class="menu-item">
        <a href="login.php" class="menu-button">Bejelentkezés</a>
    </div
    <div class="menu-item">
           <a href="regisztracio.php" class="menu-button">Regisztráció</a>
    </div>';
} else {
    $menu .= '
<div class="menu-item">
        <a href="logout.php" class="menu-button">Kijelentkezés</a>
        </div>';
}
$menu .= '
   <div class="menu-item"></div>
  </nav>
';

?>