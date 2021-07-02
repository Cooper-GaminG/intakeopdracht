<?php

include "config.php";


$sql = 'SELECT customer_name, book_title, author, email, date FROM history ORDER BY book_title';
foreach ($conn->query($sql) as $row) { 

    
    print $row['book_title'];
    echo "<br>";
    echo "By ";
    print $row['author'];
    echo "<br>";
    echo "Ordered by: ";
    print $row['customer_name']; 
    echo "<br>";
    echo "Date: ";
    print $row['date']; 
    echo "<br>";
    print $row['email'];
    echo "<br><br>";

}

?>


<html>
<head>
<title>Order List</title>
</head>
</html>