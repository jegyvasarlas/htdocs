<?php
    if(isset($_POST['Submit']))
    {
        $nev = array("name"=>$_POST['name'], "email"=>$_POST['email'], "password"=>$_POST['password'], "eletkor"=>$_POST['eletkor'], "szuletesidatum"=>$_POST['szuletesidatum'], "gender"=>$_POST['gender'], "erdeklodes"=>$_POST['erdeklodes'], "jartassag"=>$_POST['jartassag'], "kedvencszin"=>$_POST['kedvencszin'], "megjegyzes"=>$_POST['megjegyzes']);
        var_dump($nev);
    }
?>