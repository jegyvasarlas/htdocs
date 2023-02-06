<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        html {
            zoom: 120%;
            background-color: #555;
            color: #eaeaea;
        }
        * {
            font-family: Comic Sans MS, Verdana, Geneva, Tahoma, sans-serif;
        }
        .main {
            display: flex;
            width: auto;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="main">
        <form action="feldolgozo.php" method="POST">
            <label>Nev: </label><input type="text" name="name"><br><br>
            <label>Email: </label><input type="text" name="email"><br><br>
            <label>Jelszo: </label><input type="password" name="password"><br><br>
            <label>Eletkor: </label><input type="number" name="eletkor"><br><br>
            <label>Szuletesi datum: </label><input type="date" name="szuletesidatum"><br><br>
            
            <label>Nem: </label>
            <input type="radio" name="gender" id="female" value="no">
            <label for="female">No</label>
            <input type="radio" name="gender" id="male" value="ferfi">
            <label for="male">Ferfi</label>
            <input type="radio" name="gender" id="nonbinary" value="egyeb">
            <label for="nonbinary">Egyeb</label>
            <br><br>

            <label>Erdeklodei korok:</label><br>
            <input type="checkbox" name="erdeklodes[]" value="videojatekok">
            <label>Videojatekok</label><br>
            <input type="checkbox" name="erdeklodes[]" value="allatok">
            <label>Allatok</label><br>
            <input type="checkbox" name="erdeklodes[]" value="filemek_es_sorozatok">
            <label>Filmek es sorozatok</label><br>
            <input type="checkbox" name="erdeklodes[]" value="gasztronomia">
            <label>Gasztronomia</label><br>
            <input type="checkbox" name="erdeklodes[]" value="tortenelem">
            <label>Tortenelem</label><br>
            <input type="checkbox" name="erdeklodes[]" value="penzugyek_es_kereskedelem">
            <label>Penzugyek es kereskedelem</label><br>
            <input type="checkbox" name="erdeklodes[]" value="zene_es_muveszet">
            <label>Zene es muveszet</label><br><br>

            <label>Informatikai jartassag</label><br>
            <input type="range" name="jartassag" min="1" max="5"><br><br>

            <label>Kedvenc szin: </label>
            <select name="kedvencszin">
                <option value="piros">Piros</option>
                <option value="zold">Zold</option>
                <option value="kek">Kek</option>
                <option value="sarga">Sarga</option>
                <option value="narancs">Narancs</option>
                <option value="lila">Lila</option>
                <option value="barna">Barna</option>
                <option value="roszaszin">Roszaszin</option>
                <option value="barna">Fekete</option>
                <option value="szurke">Szukre</option>
                <option value="barna">Feher</option>
            </select><br><br>

            <label>Egyeb megjegyzes:</label><br>
            <textarea name="megjegyzes" rows="3" cols="30" style="resize: none"></textarea>
            
            <br><br><input type="reset" value="Reset">
            <input type="submit" name="Submit" value="Submit">
        </form>
    </div>
</body>
</html>