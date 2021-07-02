<?php

include "config.php";

?>


<a class= "link" href= orders.php>View all orders</a>
<br> <br>


<form action= "order_result.php" method= "POST">
  
  <label for= "name">Search for titles</label><br>
  
  <input type="text" id="title" name="title"  value="" require><br>
  
  <input type="submit" name= "submit" value = "Search" >

</form>

<?php

if (isset($_POST["submit"])){ 
    $_SESSION["title"] = $_POST["title"];
}
else{
    echo ''; 
}
    
// echo $_POST["name"];

?>
<html>
<head>
<title>Customer List</title>
<link rel= "stylesheet" href= "style.css">
</head>
</html>