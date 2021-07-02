<?php

include "config.php";



$sql = 'SELECT name FROM customers ORDER BY id';
foreach ($conn->query($sql) as $row) {

    print $row['name']; 
    echo "<br><br>";

}

?>

<form action= "result.php" method= "POST">
  
  <label for= "name">Name:</label><br>
  
  <input type="text" id="name" name="name"  value="" require><br>
  
  <input type="submit" name= "submit" value = "Search" >

</form>

<?php

if (isset($_POST["submit"])){ 
    $_SESSION["name"] = $_POST["name"];
}
else{
    echo ''; 
}
    
// echo $_POST["name"];

?>
<html>
<head>
<title>Customer List</title>
</head>
</html>

