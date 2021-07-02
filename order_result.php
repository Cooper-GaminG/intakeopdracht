<?php

include "config.php";

$stmt = $conn->prepare("SELECT book_title, COUNT(*) AS count FROM history WHERE book_title = '".$_POST['title']."'");
$stmt->execute();

$rows = $stmt->fetchALL(PDO::FETCH_ASSOC);

foreach ($rows as $row) {

    echo $row['count']; 
    echo " order(s) for this title";
    
}

echo "<br> <br>";


$sql = "SELECT book_title, author, customer_name, email, date FROM history WHERE book_title = '".$_POST['title']."'";
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
    <title>Order Result</title>
</head>
</html>