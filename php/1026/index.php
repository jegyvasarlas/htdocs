<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Regex</title>
    <link rel="icon" type="image/x-icon" href="../../favicon/think.png">
    <style>
        html {
            zoom: 150%;
            background-color: #555;
            color: #eaeaea;
            text-align: center;
        }
        * {
            font-family: Comic Sans MS, Verdana, Geneva, Tahoma, sans-serif;
        }
        .wrapper {
            display: flex;
            width: 100%;
            justify-content: center;
        }
        hr {
            width: auto;
            background-color: #777;
            border: none;
            height: 2px;;
        }
    </style>
</head>
<body>
    <div>
        <p>😱🥺👻✌️ PHP Regex 😊🫠😎🎃</p>
        
        <?php
            function br() {
                echo("<br>");
            }
            function hr() {
                echo("<br><br>");
            }

            echo("<p style='color: #aaa'><u>ヾ(≧▽≦*)o  = Elso oldal =ヾ(≧▽≦*)o</u></p>");

            $str = "Joska okos nagyon Joska";
            $pattern = "/joska/i";
            $err = "does not match";
            
            //echo preg_match($pattern, $str);

            if(preg_match($pattern, $str)) {
                echo $str;
            } else echo $err;

            br();

            echo preg_replace($pattern, "Pista", $str);

            hr();

            $str = "Nagy Pista:Miskolc:Szeg utca 30.:280000";

            $tomb = preg_split("/:/", $str);
 
            print "Nev: $tomb[0]<br>";
            print "Telepules: $tomb[1]";

            hr();

            $str = "Pista	Miskolc 280000"; // /s = szokoz vagy tab
            $tomb = preg_split("/\s/", $str);
 
            print "Nev: $tomb[0]<br>";
            print "Telepules: $tomb[1]";

            br();
            echo("<p style='color: #aaa'><u>ヾ(≧▽≦*)o  = Masodik oldal =ヾ(≧▽≦*)o</u></p>");

            $str = "alma.alma_alma-alma_alma@alma-alma.space";
            $pattern = "/^[0-9a-z\._-]+@([0-9a-z\.-])+[a-z0-9\.-]$/";
            $err = "does not match";

            if(preg_match($pattern, $str)) {
                echo $str;
            } else echo $err;

            


        ?>
        <p style="color: #888">☆*: .｡. o(≧▽≦)o .｡.:*☆</p>  
    </div>
    
</body>
</html>