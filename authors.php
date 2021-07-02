<?php

include "config.php";


$sql = 'SELECT name, age, origin FROM author ORDER BY author_id';
foreach ($conn->query($sql) as $row) {

    print $row['name']; 
    echo "<br>";
    print $row['age'];
    echo " years old.";
    echo "<br>";
    echo "Born in ";
    print $row['origin']; 
    echo "<br><br>";

}

?>

<html>
<head>
<title>Author List</title>
</head>
</html>