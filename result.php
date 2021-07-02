<?php

include "config.php";



$sql = "SELECT name, email, address, birthdate FROM customers WHERE name = '".$_POST['name']."'";
foreach ($conn->query($sql) as $row) {

    print $row['name']; 
    echo "<br>";
    print $row['email']; 
    echo "<br>";
    print $row['address']; 
    echo "<br>";
    print $row['birthdate']; 
    echo "<br><br>";

}

$sql = "SELECT book_title, author, date FROM history WHERE customer_name = '".$_POST['name']."'";
foreach ($conn->query($sql) as $row) {

    print $row['book_title'];
    echo "<br>";
    print $row['author'];
    echo "<br>";
    print $row['date'];
    echo "<br><br>";


}

?>
<html>
<head>
    <title>Result</title>
</head>
</html>