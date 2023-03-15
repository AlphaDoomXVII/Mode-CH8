<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post aanmaken</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

<?php
# Database connection code

$servername = "localhost";
$username = "Alpha_Doom";
$password = "stan";
$dbname = "mode_ch8";

$conn = new mysqli($servername ,$username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>

<input type="image" name="postPic" value="plaats hier een image" id="postPic" class="center" >

<?php
$conn->query("INSERT INTO posts ('foto')")

?>



    
</body>
</html>