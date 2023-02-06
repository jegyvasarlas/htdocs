<?php
    include("functions.php");
    include('menu.php');
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP és MySQL összekapcsolása</title>
</head>
<body>
    <?php echo $menu; ?>

    <section id="kereses">
        <h2>Szűrés árak alapján</h2>
        <form action="pizzak_szurt.php" method="POST">
            <input type="number" name="minAr" min="0" /> -tól 
            <input type="number" name="maxAr" min="0" /> -ig
            <input type="submit" value="Keresés" />
        </form>
    </section>
      
    <!-- 1. Feladat -->
    <section>
        <h2>Keresés a rendelések között </h2>
        <form>
            Vevő: <input type="text" />     <br/>
            Futár: <input type="text" />    <br/>
            Pizza: <input type="text" />    <br/>
            <input type="submit" value="Keresés" />
        </form>
    </section>

    <!-- 2. Feladat
        Új pizza felvétele:
        - Új menüpont alatt érhető el a menüsorból
        - Formban meg lehet adni: pizza neve és ára (ellenőrizni!!)
     -->

     <!-- 3. Feladat
        Új rendelés felvétele:
        - Új menüpont alatt érhető el a menüsorból
        Form, amelyben egy-egy lenyíló listából választható ki:
            -> vevő
            -> futár
            -> pizza
        - beviteli mezőben (number) lehessen megadni a rendelési darabszámot
        - dátum: mindig az akatuális
        !! 2 táblába kell befűzni: rendelés és tétel 
     -->

</body>
</html>