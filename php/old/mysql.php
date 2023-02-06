<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
echo("<br>");

$sql1 = "DROP DATABASE IF EXISTS myDB"; $conn->query($sql1);
$sql1 = "CREATE DATABASE IF NOT EXISTS myDB";
if ($conn->query($sql1) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
echo("<br>");

$connectdb = "USE myDB"; //$conn->query($connectdb);
if ($conn->query($connectdb) === TRUE) {
    echo "Use successfully";
} else {
    echo "Error use: " . $conn->error;
}
echo("<br>");

$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
echo("<br>");

$sql3 = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
if ($conn->query($sql3) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
  } else {
    echo "Error: " . $sql3 . "<br>" . $conn->error;
}
echo("<br>");
?>

<?php
$sql = "SELECT id, firstname, lastname, email FROM MyGuests";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<h1>".$row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " - Email: " . $row["email"]. " " ."</h1>";
  }
} else {
  echo "0 results";
}
echo("<br>");
?>

<form method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <input type='text' placeholder='Enter First name' name='txt_fname' id='txt_fname' ><br/>
  <input type='text' placeholder='Enter Last name' name='txt_lname' id='txt_lname' ><br/>
  <input type='text' placeholder='Enter email' name='txt_email' id='txt_email' ><br/>
  <input type='submit' value='Submit' id='submit' name='submit'>
</form>

<?php 

if(isset($_POST['submit'])){
   $uname = $_POST['txt_uname'];
   $fname = $_POST['txt_fname'];
   $lname = $_POST['txt_lname'];
   $email = $_POST['txt_email'];

   $insert_query = "INSERT INTO 
                 MyGuests(username,fname,lname,email) 
                 VALUES('".$uname."','".$fname."','".$lname."','".$email."')";
   mysqli_query($conn,$insert_query);
}
?>
</body>
</html>