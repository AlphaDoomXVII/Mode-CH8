<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Database test code</title>

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

<h1> Dit is om te testen dus niks aanpassen A.U.B. :) </h1>

<!-- Friend dropdown menu -->

<form id="dropdownTest" name="dropdownTest" method="post" action="test.php"> Choose fren
  <select Friend name="friend_id">
    
      <option value="" id="dropdown"><---Select---></option>
  
    
  
      <?php
        $list=$conn->query("SELECT * FROM profile ORDER BY id ASC ");
        while($row_list=$list->fetch_assoc()): 
      ?>

      <option value="<?= $row_list['id']; ?>">
        <?= $row_list['name'];?> <?= $row_list['surname'];?>
      </option> 
      
      <?php 
        $conn->query("INSERT INTO friends (`id_profile`, `id_friend`) VALUES ('[value-1]','[value-2]')")
        
      ?>
      
      <?php endwhile; ?>
    </select>
    <input type="submit" name="Submit" value="Select" id="selectBtn" />

</form>

</body>

<link rel="jsscript" href="script.js">

</html>